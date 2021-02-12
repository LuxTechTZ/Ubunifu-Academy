@extends('jasiri.back.layouts.clean')

@section('page')
  Course
@endsection

@section('template_linked_css')
 <!-- BEGIN PAGE LEVEL PLUGINS -->

@endsection

@section('content')
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>{{ trans('titles.Edit Course Details')}}
                    <small>{{ trans('titles.Course Details')}}</small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->
            
        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="{{url('/')}}/account/dashboard">{{trans('titles.Home')}}</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="{{url('/')}}/account/mycourses">{{trans('titles.My Courses')}}</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span class="active">{{trans('titles.Countries')}}</span>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->
        @include('semi.alert')
        <div class="m-heading-1 border-green m-bordered">
       
            <h3>{{$course->title}}</h3>
                        <div class="actions">
                           <a class="btn green" href="{{url('/')}}/account/courses/edit/{{$course->id}}">{{trans('titles.Edit Course Details')}}</a>
                        </div>
                <br> 
                <hr>
                <h3>{{trans('titles.Selected Batch')}}</h3>
                <div class="row">
                    
                <div class="col-md-4">
                    <p><b>{{trans('titles.Title: ')}}</b> {{$course->category->title}}</p>
                </div>
                <div class="col-md-4">
                    
                    <p><b>{{trans('titles.Details:')}} </b> {{$course->description}}</p>
                </div>
                <div class="col-md-4">
                    
                    <p><b>{{trans('titles.Price:')}} </b> {{$course->price}}</p>
                </div>
                <div class="col-md-4">
                    
                    <p><b>{{('titles.Discount Price:')}} </b> {{$course->discount_price}}</p>
                </div>
                <div class="col-md-4">
                    <p><b>{{trans('titles.Image:')}}</b> {{$course->image}}</p>
                </div>
                <div class="col-md-12">

                    <p>{!! $course->full_details !!}</p>
                    
                </div>
                </div>
            

        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light portlet-fit bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class=" icon-layers font-green"></i>
                            <span class="caption-subject font-green bold uppercase">{{('titles.Lessons')}}</span>
                            <div class="caption-desc font-grey-cascade"> This is the list of your lessons in order.</div>

                        </div>
                        <div class="actions">
                           <a class="btn green" href="{{url('/')}}/account/courses/lesson/create/{{$course->id}}">{{trans('titles.Add Lesson')}}</a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        @foreach($course->lessons as $lesson)
                        <div class="mt-element-list">
                            <div class="mt-list-head list-simple ext-1 font-white bg-blue-chambray">
                                <div class="list-head-title-container">
                                    <!-- <div class="list-date">Nov 8, 2015</div> -->
                                    <h3 class="list-title">{{$lesson->name}}
                                    <div class="actions pull-right">
                                       <button form="part-{{$lesson->id}}" type="submit" class="btn btn-warning">{{('titles.Edit Lesson')}}</button>
                                       <button form="part-{{$lesson->id}}" type="submit" class="btn green">{{('titles.Add Part')}}</button>
                                    </div>
                                    <form id="part-{{$lesson->id}}" hidden="" method="post" action="{{url('/')}}/account/courses/lesson/part/create">
                                        @csrf
                                        <input type="hidden" name="course_id" value="{{$course->id}}">
                                        <input type="hidden" name="lesson_id" value="{{$lesson->id}}">
                                       
                                    </form>
                                    </h3>
                                </div>
                            </div>
                            <div class="mt-list-container list-simple ext-1 group">
                                @foreach($lesson->parts as $part)
                                    
                                <a class="list-toggle-container" data-toggle="collapse" href="#completed-{{$lesson->id}}{{$part->order}}" aria-expanded="false">
                                    <div id="#samlpe{{$lesson->id}}{{$part->order}}" class="list-toggle done uppercase"> Part {{$part->order}}
                                    </div>
                                </a>
                                <div class="panel-collapse collapse in" id="completed-{{$lesson->id}}{{$part->order}}">
                                    <ul>
                                        <li class="mt-list-item done">
                                            <div class="list-icon-container">
                                                <i class="icon-user"></i>
                                            </div>
                                            <div class="list-datetime" style="width: 200px"> 
                                                <a href="{{url('/')}}/account/courses/material/create/{{$part->id}}" class="btn btn-success btn-sm pull-right">{{('titles.Add Material')}}</a>
                                            </div>
                                            <div class="list-item-content">
                                                <h3 class="uppercase">
                                                    <a href="javascript:;">{{('titles.You have ')}}<b> {{count($part->materials)}} </b>Materials</a>
                                                </h3>
                                            </div>
                                            <form method="post" enctype="multipart/form-data"></form>
                                        </li>
                                        @foreach($part->materials as $material)
                                        <li class="mt-list-item done">
                                            <div class="list-icon-container">
                                                <i class="success icon-check"></i>
                                            </div>
                                            <div class="list-datetime" style="width: 200px"> {{date('j M, Y',strtotime($material->created_at))}} </div>
                                            <div class="list-item-content">
                                                <h3 class="uppercase">
                                                    <a href="{{url('/')}}/account/courses/material/edit/{{$material->id}}">{{$material->name}}</a>
                                                </h3>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endforeach

                               <!--  <a class="list-toggle-container" data-toggle="collapse" href="#pending-simple" aria-expanded="false">
                                    <div class="list-toggle uppercase"> Part 2
                                        <span class="badge badge-default pull-right bg-white font-dark bold">3</span>
                                    </div>
                                </a>
                                <div class="panel-collapse collapse" id="pending-simple">
                                    <ul>
                                        <li class="mt-list-item">
                                            <div class="list-icon-container">
                                                <i class="icon-close"></i>
                                            </div>
                                            <div class="list-datetime"> 8 Nov </div>
                                            <div class="list-item-content">
                                                <h3 class="uppercase">
                                                    <a href="javascript:;">Listings Feature</a>
                                                </h3>
                                            </div>
                                        </li>
                                        <li class="mt-list-item">
                                            <div class="list-icon-container">
                                                <i class="icon-close"></i>
                                            </div>
                                            <div class="list-datetime"> 8 Nov </div>
                                            <div class="list-item-content">
                                                <h3 class="uppercase">
                                                    <a href="javascript:;">Listings Feature</a>
                                                </h3>
                                            </div>
                                        </li>
                                        <li class="mt-list-item">
                                            <div class="list-icon-container">
                                                <i class="icon-close"></i>
                                            </div>
                                            <div class="list-datetime"> 8 Nov </div>
                                            <div class="list-item-content">
                                                <h3 class="uppercase">
                                                    <a href="javascript:;">Listings Feature</a>
                                                </h3>
                                            </div>
                                        </li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                        @endforeach
                        <!-- End Lesson Foreach -->
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
             
            </div>
        </div>
        <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT BODY -->
</div>


@endsection


@section('footer_scripts') 
<!-- BEGIN PAGE LEVEL PLUGINS -->

@endsection