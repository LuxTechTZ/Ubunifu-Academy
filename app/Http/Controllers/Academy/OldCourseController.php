<?php

namespace App\Http\Controllers\Academy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jasiri\Course;
use App\Models\Jasiri\VideoUpload;
use App\Models\Jasiri\Category;
use Jwplayer\JwplatformAPI;
use Session;
use Storage;
use Validator;
use Auth;
// Monolog
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
// Vimeio
use Vimeo\Vimeo;
use Vimeo\Exceptions\VimeoUploadException;
// FFMpeg
use FFMpeg\FFMpeg;
use Streaming\Representation;
use Streaming\FFMpeg as STFFMpeg;

class OldCourseController extends Controller
{
    function __construct(Course $course, VideoUpload $vodeo_upload,Category $category)
    {
        $this->course = $course;
        $this->vodeo_upload = $vodeo_upload;
        $this->category = $category;
    }


    public function index($category_title = null)
    {
        if (isset($category_title)) {
            $categ = $this->category
                        ->where('title','=',$category_title)
                        ->first();
            $courses = $categ->courses;
        }else{
            $courses = $this->course->get();
        }
        $categories = $this->category->get();

        return view('jasiri.courses.grid',compact('courses','categories'));
    }


    // Show student Courses
    public function studentCourses()
    {
    	// return Auth::user()->student->courses;


    	if (Auth::user()->hasRole(5) ) {
            return view('academy.courses.student.index');
        }else{
            return view('jasiri.back.courses.index');
        }
    }



    public function list()
    {
        $categories = $this->category->get();

        $courses = $this->course->get();
        return view('jasiri.courses.list',compact('courses','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->category->get();
        return view('jasiri.back.courses.create',compact('categories'));
    }

    public function storeCourse(Request $request)
    {
        $teacher = Auth::user()->teacher;

        $validation = $request->validate([
            // 'file' => 'required|file|mimes:mp4,MPEG,WMV,FLV,avi|max:204800'
            // for multiple file uploads
            'raw_image' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048'
        ]);

        // $course = new Course;
        $request['owner_id'] = Auth::user()->id;
        $request['teacher_id'] = $teacher->id;

         // validate the uploaded file
        $file      = $validation['raw_image']; // get the validated file
        $extension = $file->getClientOriginalExtension();
        $filename = $request['title'] . $file->getClientOriginalName();
        $file->move('uploads/couurse/'.Auth::user()->id.'/'.$request['title'].'/image',$filename);

        $request['image'] = '/uploads/couurse/'.Auth::user()->id.'/'.$request['title'].'/image/'.$filename;
        $course = Course::create($request->all());
        $teacher->courses()->attach($course->id);

        return redirect('account/mycourses/')->withFlashSuccess('Course Created');;

        return $teacher->courses;
    }

    public function course($course_id)
    {
        $course = Course::findOrFail($course_id);
        return view('jasiri.back.courses.course',compact('course'));
    }

    public function uploadToLonode(Request $request,$course_id)
    {
        // validate the uploaded file
        $validation = $request->validate([
            'file' => 'required|file|mimes:mp4,MPEG,WMV,FLV,avi|max:204800'
            // for multiple file uploads
            // 'photo.*' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048'
        ]);
        $file      = $validation['file']; // get the validated file
        $extension = $file->getClientOriginalExtension();
        $filename = 'raw-video' . $file->getClientOriginalName();
        $file->move('uploads/rawvideos/'.$course_id,$filename);

        $path = 'uploads/rawvideos/'.$course_id.$filename;

        $uploaded_video             = new VideoUpload;
        $uploaded_video->user_id    = 1; //Auth::user()->id;
        $uploaded_video->lesson_id  = 1;
        $uploaded_video->name       = $filename;
        $uploaded_video->path       = $path;
        $uploaded_video->extenssion = $extension;
        $uploaded_video->status     = 0;

        $uploaded_video->save();

        return $this->uploadToJW($request,$path,$filename);

        return 200;

        dd($path);
    }

    public function uploadToJW(Request $request,$path = null,$filename = null)
    {
        $jwplatform_api_key = '9qGiUzRc';
        $jwplatform_api_secret = 'utLPJ05Rbv7b1Dh6lCyIifZj';

        $jwplatform_api = new JwplatformAPI($jwplatform_api_key, $jwplatform_api_secret);

        if (isset($path)) {
            $target_file = $path;
            $params['title'] = $filename;
        }else{
            $target_file = $request['file'];
            $params['title'] = 'Upload From Linode 2';
        }
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

    public function UploadToVimeo(Request $request)
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

        $file_name = $request["file"];

        try {
            // Upload the file and include the video title and description.
            $uri = $lib->upload($file_name, array(
                'name' => 'Vimeo API SDK test upload',
                'description' => "This video was uploaded through the Vimeo API's PHP SDK."
            ));

            // Get the metadata response from the upload and log out the Vimeo.com url
            $video_data = $lib->request($uri . '?fields=link');
            echo '"' . $file_name . ' has been uploaded to ' . $video_data['body']['link'] . "\n";

            // Make an API call to edit the title and description of the video.
            $lib->request($uri, array(
                'name' => 'Vimeo API SDK test edit',
                'description' => "This video was edited through the Vimeo API's PHP SDK.",
            ), 'PATCH');

            echo 'The title and description for ' . $uri . ' has been edited.' . "\n";

            // Make an API call to see if the video is finished transcoding.
            $video_data = $lib->request($uri . '?fields=transcode.status');
            echo 'The transcode status for ' . $uri . ' is: ' . $video_data['body']['transcode']['status'] . "\n";
        return $video_data;
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


        $user = Auth::user();


        // Olde code
        $course = $this->course
                    ->where('title','=',$course_name)
                    ->first();

        if (!isset($course)) {
            return redirect()->back();
        }

        if (isset($user->id)) {
            if (isset($user->student->id)) {
                foreach ($user->student->courses as $paid_course) {
                    if($course->id == $paid_course->id){
                        $course = $paid_course;
                    return view('jasiri.courses.paid',compact('course'));
                    }
                }
            }
        }

        return view('jasiri.courses.detail',compact('course'));
    }

    public function TeachersCourse($value='')
    {

        return view('jasiri.back.courses.mycourses');
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

        // // $image = new Image;

        // $file_type = $img->extension();

        // $file_name  = microtime(true).".".$file_type;

        // $file_name = '/uploads/products/'.$file_name;

        // // $file_size = $img->getClientSize();

        // $img->move('uploads/products',$file_name);

        // $image->product_id = $id;
        // $image->image = $file_name;
        // $image->extension = $file_type;

        // if ($image->save()) {
        //     return true;
        // }

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
        $file->move('videos/',$filename);

        $path = 'videos/'.$filename;

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
        $last_vid = $this->vodeo_upload
                ->where('lesson_id','=',1)
                ->orderBy('id','desc')
                ->first();
        return view('jasiri.courses.vid',compact('last_vid'));
    }

    public function convertVideo($video_data='')
    {
        $last_vid = $this->vodeo_upload
                ->where('lesson_id','=',1)
                ->orderBy('id','desc')
                ->first();

        $stored_video = $last_vid->path;
        // return $stored_video;

        $ffmpeg = STFFMpeg::create();


        $video = $ffmpeg->open($stored_video);

        $r_144p  = (new Representation)->setKiloBitrate(95)->setResize(256, 144);
        $r_240p  = (new Representation)->setKiloBitrate(150)->setResize(426, 240);
        $r_360p  = (new Representation)->setKiloBitrate(276)->setResize(640, 360);
        $r_480p  = (new Representation)->setKiloBitrate(750)->setResize(854, 480);
        $r_720p  = (new Representation)->setKiloBitrate(2048)->setResize(1280, 720);
        $r_1080p = (new Representation)->setKiloBitrate(4096)->setResize(1920, 1080);
        $r_2k    = (new Representation)->setKiloBitrate(6144)->setResize(2560, 1440);
        $r_4k    = (new Representation)->setKiloBitrate(17408)->setResize(3840, 2160);

        $video->dash()
            ->setSegDuration(30) // Default value is 10
            ->setAdaption('id=0,streams=v id=1,streams=a')
            ->x264()
            ->addRepresentations([$r_144p, $r_240p, $r_360p, $r_480p, $r_720p, $r_1080p, $r_2k, $r_4k])
            ->save('vids/'.$last_vid->id.'/new.mpd');

        return "Hello";
        $video->dash()
                ->setAdaption('id=0,streams=v id=1,streams=a') // Set the adaption.
                ->x264() // Format of the video. Alternatives: x264() and vp9()
                ->autoGenerateRepresentations() // Auto generate representations
                ->save('vids/'.$last_vid->id.'/new.mpd'); // It can be passed a path to the method or it can be null


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

    public function studentCoursesss($value='')
    {
        if (Auth::user()->hasRole(5) ) {
            // $student_courses = $this->course->
            return view('jasiri.back.student.paid_courses');
        }else{
            return view('jasiri.back.courses.index');
        }

    }
}
