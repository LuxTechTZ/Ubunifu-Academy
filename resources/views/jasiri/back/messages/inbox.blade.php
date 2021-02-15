@extends('jasiri.back.layouts.app')

@section('page')
  Dashboard
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
                 <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{url('/')}}/account/dashboard">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Messages</li>
      </ol>
            </div>
        </div>
        <div class="container-fluid">
      <!-- Breadcrumbs-->
    <div class="box_general">
      <h4>Inbox</h4>
      <div class="list_general">
        <ul>
          <!-- <li>
            <span>2 hours ago</span>
            <figure><img src="{{url('/')}}/back_assets/img/avatar1.jpg" alt=""></figure>
            <h4>Enzo Ferrari <i class="unread">Unread</i></h4>
            <p>In vim mucius menandri convenire, an brute zril vis. Ancillae delectus necessitatibus no eam, at porro solet veniam mel, ad everti nostrud vim. Eam no menandri pertinacia deterruisset.</p>
          </li>
          <li>
            <span>2 hours ago</span>
            <figure><img src="{{url('/')}}/back_assets/img/avatar2.jpg" alt=""></figure>
            <h4>Andrea Lomarco <i class="unread">Unread</i></h4>
            <p>Ex omnis error aliquam quo, eu eos atqui accusam, ex nec sensibus erroribus principes. No pro albucius eloquentiam accommodare. Mei id illud posse persius. Nec eu dico lucilius delicata, qui propriae voluptaria eu.</p>
          </li>
          <li>
            <span>2 hours ago</span>
            <figure><img src="{{url('/')}}/back_assets/img/avatar3.jpg" alt=""></figure>
            <h4>Marc Twain <i class="read">Read</i></h4>
            <p>Ex omnis error aliquam quo, eu eos atqui accusam, ex nec sensibus erroribus principes. No pro albucius eloquentiam accommodare. Mei id illud posse persius. Nec eu dico lucilius delicata, qui propriae voluptaria eu.</p>
          </li>
          <li>
            <span>2 hours ago</span>
            <figure><img src="{{url('/')}}/back_assets/img/avatar4.jpg" alt=""></figure>
            <h4>Lucas Swing <i class="read">Read</i></h4>
            <p>Cum id mundi admodum menandri, eum errem aperiri at. Ut quas facilis qui, euismod admodum persequeris cum at. Summo aliquid eos ut, eum facilisi salutatus ne. Mazim option abhorreant ne his.</p>
          </li>
          <li>
            <span>2 hours ago</span>
            <figure><img src="{{url('/')}}/back_assets/img/avatar5.jpg" alt=""></figure>
            <h4>Steve Wornder <i class="read">Read</i></h4>
            <p>In vim mucius menandri convenire, an brute zril vis. Ancillae delectus necessitatibus no eam, at porro solet veniam mel, ad everti nostrud vim. Eam no menandri pertinacia deterruisset.</p>
          </li>
          <li>
            <span>2 hours ago</span>
            <figure><img src="{{url('/')}}/back_assets/img/avatar6.jpg" alt=""></figure>
            <h4>Mark Shoemaker <i class="unread">Unread</i></h4>
            <p>In vim mucius menandri convenire, an brute zril vis. Ancillae delectus necessitatibus no eam, at porro solet veniam mel, ad everti nostrud vim. Eam no menandri pertinacia deterruisset.</p>
          </li> -->
        </ul>
      </div>
    </div>
    <!-- /box_general-->
    <nav aria-label="...">
      <ul class="pagination pagination-sm add_bottom_30">
        <!-- <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li> -->
      </ul>
    </nav>
    <!-- /pagination-->
    </div>
    </div>
</div>
	  <!-- /container-fluid-->

@endsection