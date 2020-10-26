<?php

namespace App\Http\Controllers\Jasiri;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jasiri\Course;
use Jwplayer\JwplatformAPI;
use FFMpeg\FFMpeg;
use Session;

class CourseController extends Controller
{
    function __construct(Course $course)
    {
        $this->course = $course;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = $this->course->get();
        return view('jasiri.courses.grid',compact('courses'));
    }

    public function list()
    {
        $courses = $this->course->get();
        return view('jasiri.courses.list',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ans =   '{"link":{"protocol":"http","address":"upload.jwplatform.com","path":"\/v1\/videos\/upload","query":{"key":"foHgEGD4","token":"eaf74ad4c45b9dd2fa10d0ed45698959ff9d020ecc6"}},"media":{"type":"video","key":"foHgEGD4"},"status":"ok","rate_limit":{"limit":60,"remaining":59,"reset":1603577160}}Array ( [file] => Array ( [size] => 15093328 [md5] => 9608221019292956642414063a6eb15a ) [media] => Array ( [type] => video [key] => foHgEGD4 ) [redirect_link] => [status] => ok )';

        $ans2 = json_encode($ans);


        

       
        return $ans2;
    }
    public function name($value='')
    {
         $ans =   '{"link":{"protocol":"http","address":"upload.jwplatform.com","path":"\/v1\/videos\/upload","query":{"key":"foHgEGD4","token":"eaf74ad4c45b9dd2fa10d0ed45698959ff9d020ecc6"}},"media":{"type":"video","key":"foHgEGD4"},"status":"ok","rate_limit":{"limit":60,"remaining":59,"reset":1603577160}}Array ( [file] => Array ( [size] => 15093328 [md5] => 9608221019292956642414063a6eb15a ) [media] => Array ( [type] => video [key] => foHgEGD4 ) [redirect_link] => [status] => ok )';

        $ans2 = json_encode($ans);


        

       
        print_r($ans);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($category,$course_name)
    {
        $course = $this->course
                    ->where('title','=',$course_name)
                    ->first();

        if (!isset($course)) {
            return redirect()->back();
        }

        return view('jasiri.courses.detail',compact('course'));
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

    public function upload(Request $request)
    {

        // return Session::getId();

        $ffmpeg = FFMpeg::create();
        $video = $ffmpeg->open($request['file']);
        $video
            ->filters()
            ->resize(new \FFMpeg\Coordinate\Dimension(320, 240))
            ->synchronize();
        $video
            ->frame(\FFMpeg\Coordinate\TimeCode::fromSeconds(10))
            ->save('frame.jpg');
        $video
            ->save(new \FFMpeg\Format\Video\X264(), 'export-x264.mp4')
            ->save(new \FFMpeg\Format\Video\WMV(), 'export-wmv.wmv')
            ->save(new \FFMpeg\Format\Video\WebM(), 'export-webm.webm');
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

    public function uploadVideo(Request $request)
    {
        $jwplatform_api_key = '9qGiUzRc';
        $jwplatform_api_secret = 'utLPJ05Rbv7b1Dh6lCyIifZj';

        $jwplatform_api = new JwplatformAPI($jwplatform_api_key, $jwplatform_api_secret);

        $target_file = $request['file'];
        $params = array();
        $params['title'] = 'PHP API Test Upload';
        $params['description'] = 'Video description here';

        // Create the example video
        $create_response = json_encode($jwplatform_api->call('/videos/create', $params));

        print_r($create_response);

        $decoded = json_decode(trim($create_response), TRUE);
        $upload_link = $decoded['link'];

        $upload_response = $jwplatform_api->upload($target_file, $upload_link);

        return $upload_response;
    }

    public function getCourse($id)
    {
        return Course::findOrFail($id);
    }
}
