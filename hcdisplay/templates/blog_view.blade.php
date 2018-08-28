@extends(_get_frontend_layout_path('frontend'))
@section('content')
    <section id="page-title-area" class="section-padding parallax-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title section-title">
                        <h2>NEWS <span>DETAILS</span></h2>
                        <p>Read more about us</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="news-open-area" class="section-padding">
        <div class="container">
            <!-- News Open page News Heading or Title Start -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="news-heading">
                        <h1>{{ $blog->title }}</h1>

                </div>
            </div>
            <!-- News Open page News Heading or Title End -->

            <!-- News Open page Contant Start -->
            <div class="row">
                <!-- News Open page News Content Start -->
                <div class="col-lg-12 col-md-12">
                    <div class="single-content-open">
                        {!! $blog->content !!}
                    </div>

                    <!-- News Share Like Button -->
                    <div class="content-share-btn">
                        <a href="{{ $siteConfig->facebook }}" target="_blank"><i class="fa fa-facebook"></i> Like</a>
                        <a href="{{ $siteConfig->twitter }}" target="_blank"><i class="fa fa-twitter"></i> Tweet</a>
                        <a href="{{ $siteConfig->linked_in }}" target="_blank"><i class="fa fa-share-alt"></i> Share</a>
                    </div>
                    <!-- News Share Like Button -->
                </div>
                <!-- News Open page News Content End -->
            </div>
            <!-- News Open page Contant End -->
        </div>
    </section>
    <!--== News Open Page End ==-->

@endsection