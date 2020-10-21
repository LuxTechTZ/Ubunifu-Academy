

<div class="header-v5 header-static">
	<!-- Topbar v3 -->
	<div class="topbar-v3">
		<div class="search-open">
			<div class="container">
				<input type="text" class="form-control" placeholder="Search">
				<div class="search-close"><i class="icon-close"></i></div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<!-- Topbar Navigation -->
					<ul class="left-topbar">
						<li>
							<a>Currency (TSH)</a>
							<ul class="currency">
								<li class="active">
									<a href="#">TSH <i class="fa fa-check"></i></a>
								</li>
								
							</ul>
						</li>
						<li>
							<a>Language (EN)</a>
							<ul class="language">
								<li class="active">
									<a href="#">English (EN)<i class="fa fa-check"></i></a>
								</li>
								
							</ul>
						</li>
					</ul><!--/end left-topbar-->
				</div>
				<div class="col-sm-6">
					{{-- Authentication Links --}}
                @guest
                   <ul class="list-inline right-topbar pull-right">
						<li><a href="#">Account</a></li>
						<li><a href="{{url('/')}}/user_login">Login</a> | <a href="{{url('/')}}/user_register">Register</a></li>
						<li><i class="search fa fa-search search-button"></i></li>
					</ul>
                @else
                	<ul class="list-inline right-topbar pull-right">
						<li>{{ Auth::user()->name }} | <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form></li>
						<li><a href="{{url('/')}}/profile">Account</a></li>
						<li><i class="search fa fa-search search-button"></i></li>
					</ul>

                  
                @endguest
					
				</div>
			</div>
		</div><!--/container-->
	</div>
	<!-- End Topbar v3 -->
<!-- === Header v5 ===-->

	<!-- Navbar -->
	<div class="navbar navbar-default mega-menu" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{url('/')}}">
					<img style="max-width: 200px; max-height: 50px" id="logo-header" src="{{url('/')}}/images/logo/Duka Mtandao.jpg" alt="Logo">
					
					
				</a>
			</div>

			<!-- Shopping Cart -->
			<div class="shop-badge badge-icons pull-right">
				<a href="#"><i class="fa fa-shopping-cart"></i></a>
				@if(isset($idd))
				<span class="badge badge-sea rounded-x">{{count($idd->cart_items)}}</span>
				@endif
				<div class="badge-open">
					<ul class="list-unstyled mCustomScrollbar" data-mcs-theme="minimal-dark">
					@if(isset($idd))
					@foreach($idd->cart_items as $cart_product)
					<li>
						<a href="{{url('/')}}/product/{{$cart_product->product->id}}"><img class="full-width img-responsive"  src="{{url('/')}}/{{$cart_product->product->images->first()->image}}" alt=""></a>
						<a href="{{ url('cart/remove',$cart_product->product->id)}}" type="button" class="close">×</a>
						<div class="overflow-h">
							<span>{{$cart_product->product->name}}</span>
							<small>{{$cart_product->quantity}} x {{number_format($cart_product->product->price)}} TSH</small>
						</div>
					</li>
					@endforeach
					@else
					<h4 style="text-align: center;">The cart is empty</h4>
					@endif

					</ul>
					<div class="subtotal">
						<div class="overflow-h margin-bottom-10">
							@if(isset($idd))
							<span>Subtotal</span>
							<span class="pull-right subtotal-cost">{{number_format($idd->total)}} TSH</span>
							@endif
						</div>
						<div class="row">
							<div class="col-xs-6">
								<a href="{{url('/')}}/home/cart" class="btn-u btn-brd btn-brd-hover btn-u-sea-shop btn-block">View Cart</a>
							</div>
							<div class="col-xs-6">
								<a href="{{url('/')}}/chekout" class="btn-u btn-u-sea-shop btn-block">Checkout</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Shopping Cart -->

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-responsive-collapse">
				<!-- Nav Menu -->
				<ul class="nav navbar-nav">

					<!-- Gifts -->
					<li class=" mega-menu-fullwidth active">
						<a href="{{url('/')}}/products/list" class="" >
							All
						</a>
					</li>
					@foreach(App\Models\Chuo\ProductCategory::get() as $category)
					<li class=" mega-menu-fullwidth">
						<a href="{{url('/')}}/products/category/{{$category->name}}" class="" >
							{{$category->name}}
						</a>
					</li>
					@endforeach
					<!-- End Gifts -->

				
				<!-- End Nav Menu -->
			</div>

			<!-- Messeges Here! -->
@if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            {!! $error !!}<br/>
        @endforeach
    </div>
@elseif (session()->get('flash_success'))
    <div class="alert alert-success fade in alert-dissmissable">
    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        @if(is_array(json_decode(session()->get('flash_success'), true)))
            {!! implode('', session()->get('flash_success')->all(':message<br/>')) !!}
        @else
            {!! session()->get('flash_success') !!}
        @endif
    </div>
@elseif (session()->get('flash_warning'))
    <div class="alert alert-warning">
        @if(is_array(json_decode(session()->get('flash_warning'), true)))
            {!! implode('', session()->get('flash_warning')->all(':message<br/>')) !!}
        @else
            {!! session()->get('flash_warning') !!}
        @endif
    </div>
@elseif (session()->get('flash_info'))

    <div class="alert alert-info">
        @if(is_array(json_decode(session()->get('flash_info'), true)))
            {!! implode('', session()->get('flash_info')->all(':message<br/>')) !!}
        @else
            {!! session()->get('flash_info') !!}
        @endif
    </div>
@elseif (session()->get('flash_danger'))
    <div class="alert alert-danger">
        @if(is_array(json_decode(session()->get('flash_danger'), true)))
            {!! implode('', session()->get('flash_danger')->all(':message<br/>')) !!}
        @else
            {!! session()->get('flash_danger') !!}
        @endif
    </div>
@elseif (session()->get('flash_message'))
    <div class="alert alert-info">
        @if(is_array(json_decode(session()->get('flash_message'), true)))
            {!! implode('', session()->get('flash_message')->all(':message<br/>')) !!}
        @else
            {!! session()->get('flash_message') !!}
        @endif
    </div>
@endif
		</div>
	</div>
	<!-- End Navbar -->
</div>
<!--=== End Header v5 ===
