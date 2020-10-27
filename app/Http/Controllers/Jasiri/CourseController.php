<?php

namespace App\Http\Controllers\Jasiri;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jasiri\Course;
use App\Models\Jasiri\VideoUpload;
use Jwplayer\JwplatformAPI;
use FFMpeg\FFMpeg;
use Session;
use Storage;
use Streaming\Representation;
use Validator;
use Auth;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

use Streaming\FFMpeg as STFFMpeg;

class CourseController extends Controller
{
    function __construct(Course $course, VideoUpload $vodeo_upload)
    {
        $this->course = $course;
        $this->vodeo_upload = $vodeo_upload;
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

        $config = [
            'ffmpeg.binaries'  => '/usr/bin/ffmpeg',
            'ffprobe.binaries' => '/usr/bin/ffprobe',
            'timeout'          => 3600, // The timeout for the underlying process
            'ffmpeg.threads'   => 12,   // The number of threads that FFmpeg should use
        ];

        $log = new Logger('FFmpeg_Streaming');
        $log->pushHandler(new StreamHandler('var/log/ffmpeg-streaming.log')); // path to log file
            
       



        // Olde code 
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
        // $video = Storage::get('videos/raw-videoHarmonize.mp4');

        // return $contents;


        // validate the uploaded file
        $validation = $request->validate([
            'file' => 'required|file|mimes:mp4,MPEG,WMV,FLV,avi|max:204800'
            // for multiple file uploads
            // 'photo.*' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048'
        ]);
        $file      = $validation['file']; // get the validated file
        $extension = $file->getClientOriginalExtension();
        $filename = 'raw-video' . $file->getClientOriginalName();
        $path = $file->storeAs('videos', $filename);

        $uploaded_video             = new VideoUpload;
        $uploaded_video->user_id    = 1; //Auth::user()->id;
        $uploaded_video->lesson_id  = 1;
        $uploaded_video->name       = $filename;
        $uploaded_video->path       = $path;
        $uploaded_video->extenssion = $extension;
        $uploaded_video->status     = 0;

        $uploaded_video->save();

        dd($path);


        // $file = $request->file('file');

        // generate a new filename. getClientOriginalExtension() for the file extension

        // save to storage/app/photos as the new $filename

        dd($path);

        return "Hellllo";


        $ffmpeg = FFMpeg::create();
        $video = $ffmpeg->open('vid/Jasiri Test_Trim.mp4');
        $video
            ->filters()
            ->resize(new \FFMpeg\Coordinate\Dimension(320, 240))
            ->synchronize();
        $video
            ->frame(\FFMpeg\Coordinate\TimeCode::fromSeconds(10))
            ->save('export/frame.jpg');
        $video
            // ->save(new \FFMpeg\Format\Video\X264(), 'export/export-x264.mp4')
            ->save(new \FFMpeg\Format\Video\WMV(), 'export/export-wmv.wmv')
            ->save(new \FFMpeg\Format\Video\WebM(), 'export/export-webm.webm');
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

    public function playdemo()
    {
        return view('jasiri.courses.vid');
    }

    public function convertVideo($video_data='')
    {
        $last_vid = $this->vodeo_upload->first();

        $this->convertVideo($last_vid);

        // return $last_vid;



        $ffmpeg = STFFMpeg::create();

        $stored_video = Storage::get($last_vid->path);

        $video = $ffmpeg->open($stored_video);




        // $r_144p  = (new Representation)->setKiloBitrate(95)->setResize(256, 144);
        // $r_240p  = (new Representation)->setKiloBitrate(150)->setResize(426, 240);
        // $r_360p  = (new Representation)->setKiloBitrate(276)->setResize(640, 360);
        // $r_480p  = (new Representation)->setKiloBitrate(750)->setResize(854, 480);
        // $r_720p  = (new Representation)->setKiloBitrate(2048)->setResize(1280, 720);
        // $r_1080p = (new Representation)->setKiloBitrate(4096)->setResize(1920, 1080);
        // $r_2k    = (new Representation)->setKiloBitrate(6144)->setResize(2560, 1440);
        // $r_4k    = (new Representation)->setKiloBitrate(17408)->setResize(3840, 2160);

        // $video->dash()
        //     ->setSegDuration(30) // Default value is 10 
        //     ->setAdaption('id=0,streams=v id=1,streams=a')
        //     ->x264()
        //     ->addRepresentations([$r_144p, $r_240p, $r_360p, $r_480p, $r_720p, $r_1080p, $r_2k, $r_4k])
        //     ->save('var/media/dash-stream.mpd');

        $video->dash()
                ->setAdaption('id=0,streams=v id=1,streams=a') // Set the adaption.
                ->x264() // Format of the video. Alternatives: x264() and vp9()
                ->autoGenerateRepresentations() // Auto generate representations
                ->save('vids/'.$video_data->user_id.'/'.$video_data->lesson_id.'.mpd'); // It can be passed a path to the method or it can be null

        return "Hello";

        $video->hls()
            ->fragmentedMP4()
            ->x264()
            ->autoGenerateRepresentations([720, 360]) // You can limit the numbers of representatons
            ->save('vids/hamo2.mpd');
        $video->dash()
            ->generateHlsPlaylist()
            ->setAdaption('id=0,streams=v id=1,streams=a')
            ->x264()
            ->autoGenerateRepresentations()
            ->save('vids/');
    }
}
