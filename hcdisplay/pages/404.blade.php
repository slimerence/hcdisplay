<!DOCTYPE html>
<html class="no-js" lang="en">
@include(_get_frontend_layout_path('frontend._head'))

<body class="loader-active" style="height: 100vh;">
@include( _get_frontend_layout_path('frontend._header') )

<section class="ptb-60">
    <div class="container">
        <div class="error text-center" style="padding: 20px;">
            <h1>This page is coming soon</h1>
        </div>
    </div>
</section>

@include(_get_frontend_layout_path('frontend._footer'))
@include( _get_frontend_layout_path('frontend._js') )

</body>

</html>