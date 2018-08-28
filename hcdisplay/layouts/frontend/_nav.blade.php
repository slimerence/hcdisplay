<!-- MianMenu or Navbar Start -->
<div class="col-lg-9">
    <nav class="main-menu alignright">
        <ul>
            <li class="active"><a href="{{ url('/') }}">Home</a></li>
            <li><a href="#" target="_self" onclick="return false;">Categories <i class="fa fa-angle-down"></i></a>
                <ul class="sub-menu">
                    @foreach ($categoriesTree as $item)
                        <li><a href="{{ url('category/view/'.$item->uri) }}">{{$item ->name}}</a></li>
                    @endforeach
                </ul>
            </li>
            <li><a href="{{ url('aboutus') }}">About</a></li>
            <li><a href="{{ url('page/blog') }}">News &amp; Media</a></li>
            <li><a href="{{ url('contact-us') }}"> Contact Us</a></li>
        </ul>
    </nav>
</div>
<!-- MianMenu or Navbar End -->
