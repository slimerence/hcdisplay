@extends( _get_frontend_layout_path('frontend') )

@section('content')

    @include(_get_frontend_theme_path('pages.elements.homeslider'))

    <!--== Hero BOx Start ==-->
    <section id="hero-box-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-box-area">
                        <div class="row">
                            <div class="col-lg-11 aligncenter">
                                <div class="row">
                                    <!-- Single HeroBox Start -->
                                    <div class="col-lg-4 text-center">
                                        <div class="single-hero-box">
                                            <img src="{{ asset('images/svg-icon/house.svg') }}" alt="Space Space">
                                            <h3>Best Products</h3>
                                            <p>Our make bearing also multiply. Fourth open, were.After blessed which sea, over fowl doesn't.</p>
                                        </div>
                                    </div>
                                    <!-- Single HeroBox End End -->

                                    <!-- Single HeroBox Start -->
                                    <div class="col-lg-4 text-center">
                                        <div class="single-hero-box">
                                            <img src="{{ asset('images/svg-icon/crane.svg') }}" alt="Space Space">
                                            <h3>Best Quailty</h3>
                                            <p>Our make bearing also multiply. Fourth open, were.After blessed which sea, over fowl doesn't.</p>
                                        </div>
                                    </div>
                                    <!-- Single HeroBox End End -->

                                    <!-- Single HeroBox Start -->
                                    <div class="col-lg-4 text-center">
                                        <div class="single-hero-box">
                                            <img src="{{ asset('images/svg-icon/plug.svg') }}" alt="Space Space">
                                            <h3>Best Staff</h3>
                                            <p>Our make bearing also multiply. Fourth open, were.After blessed which sea, over fowl doesn't.</p>
                                        </div>
                                    </div>
                                    <!-- Single HeroBox End End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Hero Box End ==-->

    <!--== About Area Start ==-->
    <section id="about-area" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>About <span>Us</span></h2>
                        <p>who are you?</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- About Text Start -->
                <div class="col-lg-6">
                    <div class="about-text">
                        <p>Suspendisse viverra. Congue, suscipit curae; magnis accumsan, faucibus varius tempus ridiculus ac duis et semper Enim taciti primis, aenean, porttitor curabitur sed, euismod ligula scelerisque interdum ridiculus montes purus eget diam rhoncus scelerisque mauris, habitasse arcu donec velit litora vel vehicula inceptos sociis.</p>

                        <p class="color-text">Sociis per iaculis molestie elit ac sit hymenaeos mattis adipiscing mus libero nostra nisi cubilia varius. Integer hymenaeos ridiculus. </p>

                        <p>Curae; varius diam nisi fusce blandit cum sit velit convallis suscipit viverra. euismod ligula scelerisque interdum ridiculus scelerisque interdum ridiculus montes purus eget diam rhoncus scelerisque mauris.
                        </p>
                    </div>
                </div>
                <!-- About Text End -->

                <!-- About Video Start -->
                <div class="col-lg-6">
                    <div class="about-video">
                        <iframe src="https://www.youtube-nocookie.com/embed/O69q6FHR99U?rel=0&amp;showinfo=0"></iframe>
                    </div>
                </div>
                <!-- About Video End -->
            </div>
        </div>
    </section>
    <!--== About Area End ==-->

    <!--== Service Area Start ==-->
    <section id="service-area" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Our <span>Services</span></h2>
                        <p>What we do?</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Service Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <h3><i class="flaticon-building service-icon"></i> Construction</h3>
                        <p>Litora leo senectus suscipit phasellu a lectus. mpot ullamcorper augue. Pellentesque. Commodo vehiculavelia.</p>
                    </div>
                </div>
                <!-- Single Service End -->

                <!-- Single Service Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <h3><i class="flaticon-concrete-mixer service-icon"></i> CONCRETE TRANSPORT</h3>
                        <p>Litora leo senectus suscipit phasellu a lectus. mpot ullamcorper augue. Pellentesque. Commodo vehiculavelia.</p>
                    </div>
                </div>
                <!-- Single Service End -->

                <!-- Single Service Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <h3><i class="flaticon-window service-icon"></i> RENOVATION</h3>
                        <p>Litora leo senectus suscipit phasellu a lectus. mpot ullamcorper augue. Pellentesque. Commodo vehiculavelia.</p>
                    </div>
                </div>
                <!-- Single Service End -->

                <!-- Single Service Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <h3><i class="flaticon-crane service-icon"></i> General Builder</h3>
                        <p>Litora leo senectus suscipit phasellu a lectus. mpot ullamcorper augue. Pellentesque. Commodo vehiculavelia.</p>
                    </div>
                </div>
                <!-- Single Service End -->

                <!-- Single Service Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <h3><i class="flaticon-driller service-icon"></i> Refurbishment</h3>
                        <p>Litora leo senectus suscipit phasellu a lectus. mpot ullamcorper augue. Pellentesque. Commodo vehiculavelia.</p>
                    </div>
                </div>
                <!-- Single Service End -->

                <!-- Single Service Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <h3><i class="flaticon-padlock service-icon"></i> Security Service</h3>
                        <p>Litora leo senectus suscipit phasellu a lectus. mpot ullamcorper augue. Pellentesque. Commodo vehiculavelia.</p>
                    </div>
                </div>
                <!-- Single Service End -->
            </div>
        </div>
    </section>
    <!--== Service Area End ==-->

    <!--== Review Area Start ==-->
    <section id="review-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Customer <span>Review</span></h2>
                        <p>Clients testimonial</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 aligncenter">
                    <div class="testimonial-content owl-carousel">
                        <!-- Single Testimonial Start -->
                        <div class="single-testimonial text-center">
                            <p>Sed. Curabitur Vehicula tempor enim. Blandit porttitor. Nulla elementum elit leo. Vulputate malesuada phasellus. Mus. Etiam eget vestibulum felis arcu.</p>

                            <h3>JHONSON MARTIN</h3>
                            <h5>Joomshaper</h5>
                        </div>
                        <!-- Single Testimonial End -->

                        <!-- Single Testimonial Start -->
                        <div class="single-testimonial text-center">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse fugiat commodi, corporis blanditiis voluptatem magni magnam minima cupiditate.</p>

                            <h3>John Deo</h3>
                            <h5>RR Foundation</h5>
                        </div>
                        <!-- Single Testimonial End -->

                        <!-- Single Testimonial Start -->
                        <div class="single-testimonial text-center">
                            <p>Apparently, Adblock Plus can remove Font Awesome brand icons with their "Remove Social Media Buttons" setting. We will not use hacks to force them to display.</p>

                            <h3>VongChong Smith</h3>
                            <h5>Space Space</h5>
                        </div>
                        <!-- Single Testimonial End -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Review Area End ==-->


    <!--== News Area Start ==-->
    <section id="news-area" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Recent <span>News</span></h2>
                        <p>important news feed</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single News Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-news-content">
                        <a href="news-open.html" class="news-thum news-thumbg-2"></a>
                        <div class="news-contant">
                            <h4><a href="news-open.html">CCNA Featured Multiple Media Report Today Us.</a></h4>

                            <p class="news-meta">
                                <a href="#"><i class="fa fa-clock-o"></i> 10, October, 2017</a>
                                <a href="news-open.html" class="alignright rd-btn">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </p>
                            <p>Lorem ipsum dadipi sit amet, consectetur adipi elit, sed do eiusmod tempor incididunt ut labore et dolore adipi magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <!-- Single News End  -->

            </div>
        </div>
    </section>
    <!--== News Area End ==-->


@endsection