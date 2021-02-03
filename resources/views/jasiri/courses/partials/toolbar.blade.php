<div class="filters_listing sticky_horizontal">
        <div class="container">
            <ul class="clearfix">
                <li>
                    <div class="switch-field">
                        <input type="radio" id="all" name="listing_filter" value="all" checked>
                        <label for="all">All</label>
                        <input type="radio" id="popular" name="listing_filter" value="popular">
                        <label for="popular">Popular</label>
                        <input type="radio" id="latest" name="listing_filter" value="latest">
                        <label for="latest">Latest</label>
                    </div>
                </li>
                <li>
                    <div class="layout_view">
                        <a href="{{url('/')}}/courses-grid" class="{{ (Request::is('courses-grid') || Request::is('permissions')) ? 'active' : null }}"><i class="icon-th"></i></a>
                        <a href="{{url('/')}}/courses-list" class="{{ (Request::is('courses-list') || Request::is('permissions')) ? 'active' : null }}"><i class="icon-th-list"></i></a>
                    </div>
                </li>
                <li>
                    <select name="orderby" class="selectbox">
                        <option value="category">Category</option>
                        @foreach($categories as $category)
                        <option><a href="{{url('/')}}/courses-grid/{{$category->title}}">{{$category->title}}</a></option>
                        @endforeach
                    </select>
                </li>
            </ul>
        </div>
        <!-- /container -->
    </div>