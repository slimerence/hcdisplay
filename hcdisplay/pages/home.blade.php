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
                                    <div class="col-lg-3 text-center">
                                        <div class="single-hero-box">
                                            <img src="{{ asset('images/hcdisplay/a1.png') }}" alt="Space Space">
                                            <h3>Quality</h3>
                                            <p>Ours are carefully constructed from durable materials and securely fastened to last a very long time.</p>
                                        </div>
                                    </div>
                                    <!-- Single HeroBox End End -->

                                    <!-- Single HeroBox Start -->
                                    <div class="col-lg-3 text-center">
                                        <div class="single-hero-box">
                                            <img src="{{ asset('images/hcdisplay/a2.png') }}" alt="Space Space">
                                            <h3>Service</h3>
                                            <p>Whether you need help choosing the best signs or displays for your application we're ready to help.</p>
                                        </div>
                                    </div>
                                    <!-- Single HeroBox End End -->

                                    <!-- Single HeroBox Start -->
                                    <div class="col-lg-3 text-center">
                                        <div class="single-hero-box">
                                            <div class="font-as"><i class="fa fa-money fa-fw" aria-hidden="true"></i></div>
                                            <h3>Price</h3>
                                            <p> Little things like shipping display racks unassembled and manufacturing in large quantities save you money.</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 text-center">
                                        <div class="single-hero-box">
                                            <div class="font-as"><i class="fa fa-truck fa-fw" aria-hidden="true"></i></div>
                                            <h3>Delivery</h3>
                                            <p>With an extensive, in-stock inventory that you won't waste time waiting on fixtures to arrive.</p>
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
                        <p>Marco Dazzle. (HC Display) is a professional high-tech enterprise specialized in production, sales, research and development of roll up, A board, pop-up stands and display equipment...etc. </p>

                        <p class="color-text">Our headquarter is in Suzhou. In order to serve our customers better, we invested and built our factory (Suzhou HongCai Exhibition Equipment Co., Ltd.), which specially manufactures the roll up, X/L banner stand, pop up, flagpole and so on. </p>

                    </div>
                </div>
                <!-- About Text End -->

                <!-- About Video Start -->
                <div class="col-lg-6">
                    <div class="about-video">
                        <iframe src="https://www.youtube.com/embed/1d4ymQxwdZ0?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
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
                        <p style="color: #fff;">Clients testimonial</p>
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
                @foreach($posts as $key=>$post)
                    @if($post->feature_image)
                <!-- Single News Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-news-content">
                        <a href="{{ url('/page'.$post->uri) }}" class="news-thum" style="background-image: url({{ asset($post->feature_image) }});"></a>
                        <div class="news-contant">
                            <h4><a href="{{ url('/page'.$post->uri) }}">{{ $post->title }}</a></h4>
                            <p class="news-meta">
                                <a href="{{ url('/page'.$post->uri) }}"><i class="fa fa-clock-o"></i>{{ $post->updated_at->format('d, F, Y') }}</a>
                            </p>
                            <p style="max-height: 4em;overflow: hidden">{!! $post->teasing !!}</p>
                        </div>
                    </div>
                </div>
                <!-- Single News End  -->
                @endif
            @endforeach
            </div>
        </div>
    </section>
    <!--== News Area End ==-->


@endsection