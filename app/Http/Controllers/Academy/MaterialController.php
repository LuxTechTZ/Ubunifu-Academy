<?php

namespace App\Http\Controllers\Academy;

use App\Http\Controllers\Controller;
use App\Models\Jasiri\Lesson;
use App\Models\Jasiri\Material;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Storage;
use Jwplayer\JwplatformAPI;

class MaterialController extends Controller
{

    public function index($id)
    {
        $lesson = Lesson::findOrFail($id);

        return view('academy.back.courses.materials.create',compact('lesson'));
    }


    public function uploadVideo(Request $request)
    {
        $images = $request['fileAttachment2'];
        if (is_array($images)){
            foreach ($images as $image){
                $jw = $this->uploadToJW($image);
                $data['size'] = $jw['file']['size'];
                $data['token'] = $jw['file']['md5'];
                $data['type'] = $jw['media']['type'];
                $data['key'] = $jw['media']['key'];
                $data['status'] = $jw['status'];
                $data['lesson_id'] = $request['lesson_id'];
                $data['user_id'] = 1;
                $file = $image->getClientOriginalName();
                $data['name'] = pathinfo($file, PATHINFO_FILENAME);
                return Material::create($data);
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
