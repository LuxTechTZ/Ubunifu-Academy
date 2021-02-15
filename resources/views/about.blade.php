@extends('jasiri.layouts.app')

@section('content')
<main>
    <section class="slider">
        <div id="slider" class="flexslider">
          
<style>

.column {
  float: left;
  width: 20%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 180px;
  text-align: center;
  background-color: #474e5d;
  color: white;

}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
<div class="about-section">
  <h1 style="color:white;">{{trans('titles.About Us')}}</h1>
  <p>Some text about who we are and what we do.</p>
  <p>Resize the browser window to see that this page is responsive by the way.</p>
</div>

<h2 style="text-align:center">{{trans('titles.Our Team')}}</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="{{url('/')}}/img/logo.png" alt="Jane" style="width:100%">
      <div class="container">
        <h2>RAFAEL KINGAZI</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>Rafa@ubunifuacaemy.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="{{url('/')}}/img/logo.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2>FELIX</h2>
        <p class="title">Developer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>felix@@ubunifuacaemy.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="{{url('/')}}/img/logo.png" alt="John" style="width:100%">
      <div class="container">
        <h2>LUJA</h2>
        <p class="title">Developer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>luja@@ubunifuacaemy.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

   <div class="column">
    <div class="card">
      <img src="{{url('/')}}/img/logo.png" alt="John" style="width:100%">
      <div class="container">
        <h2>SAMWELI</h2>
        <p class="title">Mobile Developer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>samweli@@ubunifuacademy.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>


 <div class="column">
    <div class="card">
      <img src="{{url('/')}}/img/logo.png" alt="John" style="width:100%">
      <div class="container">
        <h2>DULLAH</h2>
        <p class="title">Developer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>luja@@ubunifuacademy.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

</div>
</div>
    
    </section>
    <!-- /slider -->

    
</main>
<!-- /main -->
@endsection