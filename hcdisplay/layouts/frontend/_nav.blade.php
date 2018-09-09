<!-- MianMenu or Navbar Start -->
<div class="col-lg-9">
    <nav class="main-menu alignright">
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a class="nav-link" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories <i class="fa fa-angle-down fa-fw"></i></a>
                <ul class="sub-menu">
                    @foreach ($categoriesTree as $item)
                        <?php $childrens = \App\Models\Catalog\Category::where('parent_id', $item->id)->where('include_in_menu',true)
                            ->orderBy('position','asc')
                            ->get();
                        ?>
                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="{{ url('category/view/'.$item->uri) }}">{{$item ->name}}
                                @if(count( $childrens )>0)
                                <i class="fa fa-angle-right fa-fw"></i>
                                @endif
                            </a>
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

            @if(!session('user_data.id'))
                <li class="nav-item"> <a class="nav-link" href="{{ url('frontend/customers/login') }}"><i class="fa fa-sign-in fa-fw" aria-hidden="true"></i><span> Login</span></a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('frontend/customers/register') }}"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span> Register</span></a></li>
            @else
                <li class="nav-item"> <a class="nav-link" href="{{ url('frontend/my_orders/'.session('user_data.uuid')) }}"><i class="fa fa-wpforms fa-fw" aria-hidden="true"></i><span>My Order</span></a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                        <span> Logout</span>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    </a>
                </li>
            @endif
        </ul>
    </nav>
</div>
<!-- MianMenu or Navbar End -->
