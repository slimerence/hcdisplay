@extends(_get_frontend_layout_path('frontend'))
@section('content')
    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding parallax-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title section-title">
                        <h2>Find <span>More</span></h2>
                        <p>about our products</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->
    <!--== Product Details ==-->
    <section id="product-view-manager-app" class="section-padding">
        <div class="container">
            <!-- News Open page Contant Start -->
            <div class="row">
                <!-- News Open page News Content Start -->
                <div class="col-lg-6 col-md-12">
                    <div class="single-content-open project-open">
                        <div class="fotorama" data-allowfullscreen="true" data-nav="thumbs" data-navposition="left" data-arrows="false" data-autoplay="true" data-height="350" data-maxheight="100%">
                            @foreach($product_images as $key=>$media)
                                <img src="{{ asset($media->url) }}">
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="news-heading">
                        <h2>
                            {{ $product->name }}&nbsp;
                            @if($product->manage_stock && $product->stock<$product->min_quantity)
                                <span class="badge badge-pill badge-danger">Out of Stock</span>
                            @endif
                        </h2>
                    </div>
                    <form id="add-to-cart-form">
                        {{ csrf_field() }}
                        <input type="hidden" name="product_id" value="{{ $product->uuid }}">
                        <input type="hidden" name="user_id" value="{{ session('user_data.uuid') }}">

                        @if(count($product_colours)>0)
                            @include(_get_frontend_theme_path('catalog.elements.sections._options.colour'))
                        @endif

                        @if(count($product_options)>0)
                            @include(_get_frontend_theme_path('catalog.elements.sections.options'))
                        @endif
                        <div class="add-to-cart-form-wrap">
                            <div class="field">
                                <p class="d-inline-block">Qty:
                                    @if(!empty($product->unit_text))
                                        <span class="has-text-danger is-size-7">(Unit: {{ $product->unit_text }})</span>
                                    @endif
                                </p>
                                <div class="control quantity-input-wrap d-inline-block">
                                    <input
                                            data-name="quantity"
                                            name="quantity"
                                            type="number"
                                            class="input quantity-input"
                                            placeholder="Quantity"
                                            value="{{ $product->min_quantity }}"
                                            min="{{ $product->min_quantity }}"
                                    >
                                </div>
                                <small id="emailHelp" class="form-text text-muted">
                                    Notice: Minimum quantity is <span>{{ $product->min_quantity }}{{ !empty($product->unit_text)?' '.$product->unit_text:null }}</span> per order.
                                </small>
                            </div>
                            <div class="button-group ptb-20">
                                @if(!$product->manage_stock)
                                    <button v-on:click="addToCartAction($event)" id="add-to-cart-btn" type="submit" class="addtocart2">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;Add to Cart
                                    </button>
                                    <a href="{{ url('/frontend/place_order_checkout') }}" id="shortcut-checkout-btn" class="addtocart2" >
                                        <i class="fa fa-credit-card" aria-hidden="true"></i>&nbsp;Checkout Now!
                                    </a>
                                @else
                                    @if($product->stock<$product->min_quantity)
                                        <button id="send-enquiry-for-shopping-btn" type="submit" class="addtocart2">Send Enquiry</button>
                                    @else
                                        <button id="add-to-cart-btn" type="submit" class="addtocart2">Add to Cart</button>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </form>
                    <div class="project-infor">
                        <h3>Product Info:</h3>
                        @include(_get_frontend_theme_path('catalog.elements.sections.short_description'))
                    </div>
                    <div class="content-share-btn project-share">
                        <a href="http://facebook.com/divergentstudiobd" target="_blank"><i class="fa fa-facebook"></i> Like</a>
                        <a href="http://facebook.com/divergentstudiobd" target="_blank"><i class="fa fa-twitter"></i> Tweet</a>
                        <a href="http://facebook.com/divergentstudiobd" target="_blank"><i class="fa fa-share-alt"></i> Share</a>
                    </div>
                </div>

                <div class="col-lg-12">
                    <!-- Product Details Start-->
                    <div class="p-t-md project-infor">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        @if(!empty($product->description))
                                            <a class="nav-link active" data-toggle="tab" href="#product-description-tab-content">Description</a>
                                        @endif
                                    </li>
                                    @foreach($product_attributes as $key=>$product_attribute)
                                        @if($product_attribute->location == \App\Models\Utils\OptionTool::$LOCATION_ADDITIONAL)
                                            <li class="nav-item">
                                                <a href="#tab-content-{{$key}}" data-toggle="tab" class="nav-link {{ $key==0&&empty($product->description) ? 'active' : null }}">{{ $product_attribute->name }}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                                <div class="tab-content">
                                    @if(!empty($product->description))
                                        <div role="tabpanel" class="tab-pane active" id="product-description-tab-content">
                                            @if(count($productDescriptionTop) > 0)
                                                @foreach($productDescriptionTop as $b)
                                                    <ul class="list-group media-list media-list-stream">
                                                        {!! $b->content !!}
                                                    </ul>
                                                @endforeach
                                            @endif
                                            {!! $product->description !!}
                                            @if(count($productDescriptionBottom) > 0)
                                                <div class="is-clearfix"></div>
                                                @foreach($productDescriptionBottom as $b)
                                                    <ul class="list-group media-list media-list-stream">
                                                        {!! $b->content !!}
                                                    </ul>
                                                @endforeach
                                            @endif
                                        </div>
                                    @endif

                                    @foreach($product_attributes as $key=>$product_attribute)
                                        @if($product_attribute->location == \App\Models\Utils\OptionTool::$LOCATION_ADDITIONAL)
                                            <div role="tabpanel" class="tab-pane {{ $key==0&&empty($product->description) ? 'active' : ' ' }}" id="tab-content-{{$key}}">
                                                <ul class="list-group media-list media-list-stream">
                                                    <?php
                                                    $productAttributeValue = $product_attribute->valuesOf($product);
                                                    // {!! $productAttributeValue->value !!}
                                                    if(count($productAttributeValue)>0){
                                                        echo $productAttributeValue[0]->value;
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product Details End-->
                </div>
            </div>
        </div>
    </section>
    <!--== Product Details End ==-->

@endsection