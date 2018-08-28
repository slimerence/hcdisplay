<!--=======================Javascript============================-->
<!--=== Jquery Min Js ===-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--=== Jquery Migrate Min Js ===-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.1/jquery-migrate.min.js"></script>
<!--=== Popper Min Js ===-->
<script src="{{ asset('js/popper.min.js') }}"></script>
<!--=== Bootstrap Min Js ===-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!--=== Isotope Min Js ===-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.4/isotope.pkgd.min.js"></script>
<!--=== PortfoloHover Min Js ===-->
<script src="{{ asset('js/plugins/hover.min.js') }}"></script>
<!--=== Owl Carousel Min Js ===-->
<script src="{{ asset('js/plugins/owl.carousel.min.js') }}"></script>
<!--=== SlickNav Min Js ===-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/jquery.slicknav.min.js"></script>
<!--=== Parallax Bg Js ===-->
<script src="{{ asset('js/plugins/parallax-bg.js') }}"></script>

<!--=== Mian Js ===-->
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/all.js') }}"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
@if(isset($vuejs_libs_required))
    @foreach($vuejs_libs_required as $lib)
        @include('frontend.vuejs.'.$lib)
    @endforeach
@endif