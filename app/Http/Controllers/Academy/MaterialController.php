<?php

namespace App\Http\Controllers\Academy;

use App\Http\Controllers\Controller;
use App\Models\Jasiri\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Jwplayer\JwplatformAPI;

class MaterialController extends Controller
{

    public function index($id)
    {
        $lesson = Lesson::findOrFail($id);

        return view('academy.back.courses.materials.create',compact('lesson'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function uploadVideo(Request $request)
    {
        $images = $request['fileAttachment2'];
        if (is_array($images)){
//            return 200;
            foreach ($images as $image){
                $jw = $this->uploadToJW($image);
                $request['image'] = Storage::putFile('public/materials', $image, 'public');
                return  $jw;
            }
        }
    }

    public function uploadToJW($file)
    {
        $jwplatform_api_key = 'cvVXmnGN';
        $jwplatform_api_secret = '5It9ysQLnFUP1etoDmkKf3ht';

        $jwplatform_api = new JwplatformAPI($jwplatform_api_key, $jwplatform_api_secret);


            $target_file = $file;
            $params['title'] = 'Upload From Linode 2';

        $params = array();
        $params['description'] = 'Video description here';

        $create_response = json_encode($jwplatform_api->call('/videos/create', $params));
        $decoded = json_decode(trim($create_response), TRUE);
        $upload_link = $decoded['link'];

        $upload_response = $jwplatform_api->upload($target_file, $upload_link);

        // Create the example video

        // print_r($create_response);
        return $upload_response;

    }

    public function store(Request $request)
    {
        //
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
        //
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
        //
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
