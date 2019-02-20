<!--== News Area Start ==-->
<section id="news-area" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Our <span>Work</span></h2>
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
                            <a href="{{ url('/page'.$post->uri) }}" class="news-thum" style="background-image: url({{ asset($post->feature_image) }});background-size: cover;"></a>
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

