@extends('layouts.academy_editors')

@section('breadcrumb')
<!-- Breadcrumb-v1 -->
<div class="g-hidden-sm-down g-bg-gray-light-v8 g-pa-20">
<ul class="u-list-inline g-color-gray-dark-v6">

  <li class="list-inline-item g-mr-10">
    <a class="u-link-v5 g-color-gray-dark-v6 g-color-secondary--hover g-valign-middle"
       href="{{url('/')}}/home">Dashboard</a>
    <i class="hs-admin-angle-right g-font-size-12 g-color-gray-light-v6 g-valign-middle g-ml-10"></i>
  </li>
    <li class="list-inline-item g-mr-10">
    <a class="u-link-v5 g-color-gray-dark-v6 g-color-secondary--hover g-valign-middle"
       href="{{url('/')}}/admin/courses">Courses</a>
    <i class="hs-admin-angle-right g-font-size-12 g-color-gray-light-v6 g-valign-middle g-ml-10"></i>
  </li>
  <li class="list-inline-item">
    <span class="g-valign-middle">Create Category</span>
  </li>
</ul>
</div>
<!-- End Breadcrumb-v1 -->
@endsection


@section('content')




<div class="g-pa-20">
    <h1 class="g-font-weight-300 g-font-size-28 g-color-black g-mb-28">Edit Category</h1>

    <div class="row">
        <!-- 1-st column -->
        <div class="col-md-12">
            <!-- Basic Text Inputs -->
            <form method="POST"
                  @if($user->isTeacher())
                    action="{{route('teacher_update_course',$course->id)}}"
                  @else
                    action="{{route('update_courses',$course->id)}}"
                  @endif
                  enctype="multipart/form-data">
                @csrf
                <div class="g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md g-mb-30">
                  <h3 class="d-flex align-self-center text-uppercase g-font-size-12 g-font-size-default--md g-color-black g-mb-20">
                      Category Details
                  </h3>
                  <!-- Default Input -->
                    <div class="row">
                        <div class="form-group g-mb-30 col-md-6">
                            <label class="g-mb-10" for="inputGroup-1_1">Name</label>
                            <div class="g-pos-rel">
                              <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                                <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                                </span>
                              <input id="title" required value="{{$course->title}}"
                                     class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10"
                                     type="text"
                                     name="title">
                            </div>
                        </div>
                        <div class="form-group g-mb-30 col-md-6">
                            <label class="g-mb-10" for="inputGroup-1_1">Category</label>
                            <div class="g-pos-rel">
                              <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                                <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                                </span>
                              <select id="category_id" required
                                     class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10"
                                     type="number"
                                      name="category_id">
                                  <option></option>
                                  @foreach($categories as $category)
                                      @if($course->category->id == $category->id)
                                        <option selected value="{{$category->id}}">{{$category->title}}</option>
                                      @else
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                      @endif
                                  @endforeach
                              </select>
                            </div>
                        </div>

                        <div class="form-group g-mb-30 col-md-12">
                            <label class="g-mb-10" for="description-1_1">Introduction Details</label>
                            <div class="g-pos-rel">
                              <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                                <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                                </span>
                              <input id="description" required value="{{$course->description}}"
                                     class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10"
                                     type="text"
                                     name="description">
                            </div>
                        </div>

                        <div class="form-group g-mb-30 col-md-12">
                            <label class="g-mb-10" for="inputGroup-1_1">Description</label>
                            <div class="g-pos-rel">
                              <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                                <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                                </span>
                              <textarea class="js-text-editor" name="full_details"
                                   data-height="156" data-placeholder="start typing here">
                                  {{$course->full_details}}
                              </textarea>
                            </div>
                        </div>

                        <div class="form-group g-mb-30 col-md-6">
                            <label class="g-mb-10" for="inputGroup-1_1">Price</label>
                            <div class="g-pos-rel">
                              <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                                <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                                </span>
                              <input id="price" required value="{{$course->price}}"
                                     class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10"
                                     type="number"
                                     name="price">
                            </div>
                        </div>

                        <div class="form-group g-mb-30 col-md-6">
                            <label class="g-mb-10" for="inputGroup-1_1">Image</label>
                            <img src="{{url('/')}}/{{Illuminate\Support\Facades\Storage::url($course->image)}}">
                            <div class="g-pos-rel">
                              <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                                <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                                </span>
                              <input id="img"
                                     class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10"
                                     type="file" accept="image/jpeg,image/png"
                                     name="img">
                            </div>
                        </div>


                    </div>
                  <!-- End Default Input -->
                    <div class="media-body align-self-center text-right">
                        <button class="js-fancybox btn btn-xl u-btn-secondary g-width-160--md g-font-size-default g-ml-10"
                        type="submit">
                            Update Course
                        </button>
                      </div>
                </div>
            </form>
            <!-- End Basic Text Inputs -->
        </div>
        <!-- End 1-st column -->
    </div>
</div>
@endsection
