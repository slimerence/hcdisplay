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
                            <p>Aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                            <p style="margin-top: 30px;">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eiust.</p>
                            <a href="/" target="_blank" class="footer-btn">Enquire Now</a>
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
                                    <p>Aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                    <p style="margin-top: 30px;">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eiust.</p>
                                    <a href="/" target="_blank" class="footer-btn">Enquire Now</a>
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
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Projects</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Partners</a></li>
                                        <li><a href="#">Newsletter</a></li>
                                        <li><a href="#">Contact Us</a></li>
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
                                        <li><a href="#">Buliding Construction</a></li>
                                        <li><a href="#">Concrete Transport</a></li>
                                        <li><a href="#">Renovation</a></li>
                                        <li><a href="#">General Bulider</a></li>
                                        <li><a href="#">Refurbisment</a></li>
                                        <li><a href="#">Security Service</a></li>
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
                                    <a href="{{ 'tel:'.$siteConfig->contact_fax }}"><span>Mobile:</span> {{$siteConfig->contact_fax}}</a>
                                    <a href="{{ 'mailto:'.$siteConfig->contact_email }}" class="email"><span>Email:</span>{{ $siteConfig->contact_email }}</a>
                                    <a href="#" class="con-btn">Get Direction on Map <i class="fa fa-long-arrow-right"></i></a>
                                    @if(isset($siteConfig))
                                    <ul class="social-icon">
                                        @if(!empty($siteConfig->facebook))
                                            <li><a href="{{ $siteConfig->facebook }}"><i class="fa fa-facebook"></i></a></li>
                                        @endif
                                        @if(!empty($siteConfig->twitter))
                                            <li><a href="{{ $siteConfig->twitter }}"><i class="fa fa-twitter"></i></a></li>
                                        @endif
                                        @if(!empty($siteConfig->linked_in))
                                            <li><a href="{{ $siteConfig->linked_in }}"><i class="fa fa-linkedin"></i></a></li>
                                        @endif
                                    </ul>
                                    @endif

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
                        <p>&copy; Copyright 2017 SpaceSpace. All Rights Reserved.</p>
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

