@extends(_get_frontend_layout_path('frontend'))
@section('content')
    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding parallax-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title section-title">
                        <h2>RECENT <span>NEWS</span></h2>
                        <p>important news feed</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->
    <section id="news-page-news-feed">
        <div class="container">
            <div class="row">
            @foreach($posts as $key=>$post)
                <!-- Single News Start -->
                <div class="col-lg-4 col-md-6 news-slice">
                    <div class="single-news-content">
                        <a href="{{ url('/page'.$post->uri) }}" class="news-thum" style="background-image:url({{ asset($post->feature_image) }}); "></a>
                        <div class="news-contant">
                            <h4><a href="{{ url('/page'.$post->uri) }}">{!! 'cn'==app()->getLocale() ? $post->title_cn : $post->title !!}</a></h4>

                            <p class="blog-desc">{!! $post->teasing !!}</p>
                            <p class="news-meta">
                            <!--<a href="{{ url('/page'.$post->uri) }}"><i class="fa fa-clock-o"></i> 10, October, 2017</a>-->
                                <a href="{{ url('/page'.$post->uri) }}" class="alignright rd-btn">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Single News End  -->
            @endforeach
                {{ $posts->links() }}
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="#" class="news-see-more-btn raj_btn">See More</a>
                </div>
            </div>
        </div>
    </section>

@endsection