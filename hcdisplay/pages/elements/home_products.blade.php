<!--== About Area Start ==-->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Top <span>Sale</span></h2>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($promotionProducts as $product)
                <div class="col-lg-3 col-md-6 news-slice">
                    <div class="single-news-content">
                        <a href="{{ url('catalog/product/'.$product->uri) }}" class="news-thum" style="background-image: url({{ $product->getProductDefaultImageUrl() }})"></a>
                        <div class="product-content">
                            <h4><a href="{{ url('catalog/product/'.$product->uri) }}">{{ $product->name }}</a></h4>
                            <div class="news-meta">
                                @if($product->special_price)
                                    <a href="{{ url('catalog/product/'.$product->uri) }}"><strong style="text-decoration: line-through;">${{ $promotionProduct->getSpecialPriceGST() }}</strong> <span>${{ $promotionProduct->getDefaultPriceGST() }}</span></a>
                                @else <a href="{{ url('catalog/product/'.$product->uri) }}">${{ $product->getDefaultPriceGST() }}</a>
                                @endif
                                <a href="{{ url('catalog/product/'.$product->uri) }}" class="alignright rd-btn">Shop Now <i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!--== About Area End ==-->
