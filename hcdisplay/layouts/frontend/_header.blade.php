<!--== Preloader Area Start ==-->
<div class="preloader">
    <div class="preloader-spinner">
        <div style="color: #fab702" class="la-ball-scale-pulse la-2x">
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<!--== Preloader Area End ==-->

<!--== Header Top Area Start ==-->
<div id="header-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 d-none d-md-block">
                <ul class="header-social-icon">
                    <li class="connect-title">Stay Connected :</li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 text-right">
                <a href="tel:01816277243" class="call-phone">Call Us Now : <span>+400 000 000</span></a>
            </div>
        </div>
    </div>
</div>
<!--== Header Top Area End ==-->

<!--== Header Bottom Area Start ==-->
<header id="header-area">
    <div class="container">
        <div class="row">
            <!-- Logo Area Start -->
            <div class="col-lg-3">
                <div class="logo-area">
                    <a href="/"><img src="{{ asset('images/logo.png') }}" alt="Spacespace"></a>
                </div>
            </div>
            <!-- Logo Area End -->
            @include(_get_frontend_layout_path('frontend._nav'))

        </div>
    </div>
</header>
<!--== HeaderMian Area End ==-->
