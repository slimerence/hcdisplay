<!-- MianMenu or Navbar Start -->
<div class="col-lg-9">
    <nav class="main-menu alignright">
        <ul>
            <li class="active"><a href="{{ url('/') }}">Home</a></li>
            <li><a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories <i class="fa fa-angle-down"></i></a>
                <ul class="sub-menu">
                    @foreach ($categoriesTree as $item)
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="{{ url('category/view/'.$item->uri) }}">{{$item ->name}}</a>
                            <?php $childrens = \App\Models\Catalog\Category::where('parent_id', $item->id)->where('include_in_menu',true)
                                ->orderBy('position','asc')
                                ->get();
                            ?>
                            @if(count( $childrens )>0)
                                <ul class="subchild-menu">
                                    @foreach($childrens as $subnav)
                                        <li><a class="dropdown-item" href="{{ url('category/view/'.$subnav->uri )}}">{{$subnav->name }}</a></li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </li>

            <li><a href="{{ url('about-us') }}">About</a></li>
            <li><a href="{{ url('page/blog') }}">Our Work</a></li>
            <li><a href="{{ url('contact-us') }}"> Contact Us</a></li>
        </ul>
    </nav>
</div>
<!-- MianMenu or Navbar End -->
