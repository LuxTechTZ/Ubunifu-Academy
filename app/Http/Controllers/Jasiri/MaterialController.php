<?php

namespace App\Http\Controllers\Jasiri;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jasiri\Student;
use App\Models\Jasiri\Part;
use App\Models\Jasiri\Material;
use App\Models\Jasiri\VideoUpload;
use Auth;

// Vimeio
use Vimeo\Vimeo;
use Vimeo\Exceptions\VimeoUploadException;

class MaterialController extends Controller
{
    function __construct(Student $student,Part $part)
    {
        $this->student = $student;
        $this->part = $part;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($part_id)
    {
        $material_part = Part::findOrFail($part_id);
        return view('jasiri.back.materials.create',compact('material_part'));
    }
    public function upload($value='')
    {
        # code...
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$part_id)
    {
        //
        $material_part = Part::findOrFail($part_id);

        $request['lesson_id'] = $material_part->lesson->id;
        $request['part_id'] = $part_id;
        $request['user_id'] = Auth::user()->id;
        $material = Material::create($request->all());

        return redirect('account/courses/material/edit/'.$material->id)->withFlashSuccess('Lesson Part Created');


      
    }

    public function uploadToLonode(Request $request,$material_id)
    {
        // validate the uploaded file
        $material = Material::findOrFail($material_id);

        $validation = $request->validate([
            'file' => 'required|file|mimes:mp4,MPEG,WMV,FLV,avi|max:204800'
            // for multiple file uploads
            // 'photo.*' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048'
        ]);
        $file      = $validation['file']; // get the validated file
        $extension = $file->getClientOriginalExtension();
        $filename = 'raw-video' . $file->getClientOriginalName();
        $file->move('uploads/rawvideos/'.$material_id,$filename);

        $path = 'uploads/rawvideos/'.$material_id.'/'.$filename;

        $uploaded_video             = new VideoUpload;
        $uploaded_video->user_id    =  Auth::user()->id;
        $uploaded_video->lesson_id  = $material->lesson->id;
        $uploaded_video->name       = $filename;
        $uploaded_video->path       = $path;
        $uploaded_video->extenssion = $extension;
        $uploaded_video->status     = 0;

        $material->local_file       = $path;
        $material->type = $extension;
        $material->status     = 0;

        // return json_encode('error', 400);
        $material->save();
        $uploaded_video->save();

        $this->UploadToVimeo($request,$path,$material->id);
        return json_encode('success', 200);


        // dd($path);
    }

    public function UploadToVimeo(Request $request,$path,$filename)
    {
        $client_id = "401950af9e82d952247d7a2bae3b0605da389493";
        $client_secret = "28LEdyK6cqtGMYK9SCsgyJ8C3Bqlj/R5kj7ISrrVmB3kcCVGb4tH8NpGZeCY73zZuHoF08PpHQKnl+h6koUcMCAJCdpWvWXkSR6mfN0o3QMCVIdsf000nTgOVVQyx1hu";
        $access_token = "aeb3a776f92a1529af75a43efa0bd344";

        $lib = new Vimeo($client_id, $client_secret, $access_token);

        // if (empty($config['access_token'])) {
        //     throw new Exception(
        //         'You can not upload a file without an access token. You can find this token on your app page, or generate ' .
        //         'one using `auth.php`.'
        //     );
        // }

        $file_name = $path;

        try {
            // Upload the file and include the video title and description.
            $uri = $lib->upload($file_name, array(
                'name' => $filename,
                'description' => "This video was uploaded through the Vimeo API's PHP SDK."
            ));

            // Get the metadata response from the upload and log out the Vimeo.com url
            $video_data = $lib->request($uri . '?fields=link');
            echo '"' . $file_name . ' has been uploaded to ' . $video_data['body']['link'] . "\n";

            // Make an API call to edit the title and description of the video.
            // $lib->request($uri, array(
            //     'name' => 'Vimeo API SDK test edit',
            //     'description' => "This video was edited through the Vimeo API's PHP SDK.",
            // ), 'PATCH');

            // echo 'The title and description for ' . $uri . ' has been edited.' . "\n";

            // Make an API call to see if the video is finished transcoding.
            $video_data = $lib->request($uri . '?fields=transcode.status');
            echo 'The transcode status for ' . $uri . ' is: ' . $video_data['body']['transcode']['status'] . "\n";
        // return $video_data;
        } catch (VimeoUploadException $e) {
            // We may have had an error. We can't resolve it here necessarily, so report it to the user.
            echo 'Error uploading ' . $file_name . "\n";
            echo 'Server reported: ' . $e->getMessage() . "\n";
        } catch (VimeoRequestException $e) {
            echo 'There was an error making the request.' . "\n";
            echo 'Server reported: ' . $e->getMessage() . "\n";
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $material = Material::findOrFail($id);
        return view('jasiri.back.materials.create',compact('material'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $material_part = Part::findOrFail($part_id);
        return view('jasiri.back.materials.create',compact('material_part'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
