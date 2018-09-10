<!--== Footer Area Start ==-->
<footer id="footer-area">
    <div class="container">
        <div class="footer-widget">
            <div class="row">
                <!--Desktop Version 1st Single Widget Start -->
                <div class="col-lg-4 d-none d-xl-block">
                    <div class="single-widget footer-about">
                        <div class="widget-body">
                            <img src="{{ asset('images/logo.png') }}" alt="Space">
{{--                            <p>Aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                            <a href="{{ url('/contact-us') }}" target="_blank" class="footer-btn">Enquire Now</a>--}}
                        </div>
                    </div>
                </div>
                <!--Desktop Version 1st Single Widget End -->

                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <!-- Single Widget Start -->
                        <div class="col-lg-4 col-md-6 d-xl-none">
                            <div class="single-widget footer-about">
                                <div class="widget-body">
                                    <img src="{{ asset('images/logo.png') }}" alt="Spce">
{{--                                    <p>Aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                    <a href="{{ url('/contact-us') }}" target="_blank" class="footer-btn">Enquire Now</a>--}}
                                </div>
                            </div>
                        </div>
                        <!-- Single Widget End -->

                        <!-- Single Widget Start -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-widget">
                                <div class="widget-title">
                                    <h4>Useful Links</h4>
                                </div>
                                <div class="widget-body">
                                    <ul>
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        <li><a href="{{ url('/about-us') }}">About Us</a></li>
                                        <li><a href="{{ url('/page/blog') }}">Our Work</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Widget End -->

                        <!-- Single Widget Start -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-widget">
                                <div class="widget-title">
                                    <h4>Services</h4>
                                </div>
                                <div class="widget-body">
                                    <ul>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Shipping & Returns</a></li>
                                        <li><a href="#">Forget Password</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Widget End -->

                        <!-- Single Widget Start -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-widget">
                                <div class="widget-title">
                                    <h4>Contact Us</h4>
                                </div>
                                <div class="widget-body address-content">
                                    <p class="address">{{ $siteConfig->contact_address }}</p>
                                    <a href="{{ 'tel:'.$siteConfig->contact_phone }}"><span>Tel:</span>{{$siteConfig->contact_phone}}</a>
                                    <a href="{{ 'mailto:'.$siteConfig->contact_email }}" class="email"><span>Email:</span>{{ $siteConfig->contact_email }}</a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Widget End -->
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-copyright">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="copyright-content">
                        <p>&copy; Copyright 2018 Hcdisplay. All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="powerby-content">
                        <p>Powered by <a href="https://www.webmelbourne.com/" target="_blank">Webmelbourne</a></p>
                    </div>
                </div>
            </div>
            <!--== Scroll Top ==-->
            <div id="scroll-top">Top</div>
            <!--== Scroll Top ==-->
        </div>
    </div>
</footer>
<!--== Footer Area End ==-->

