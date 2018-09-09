@extends( _get_frontend_layout_path('frontend') )

@section('content')

    @include(_get_frontend_theme_path('pages.elements.homeslider'))
    @include(_get_frontend_theme_path('pages.elements.home_service'))
    @include(_get_frontend_theme_path('pages.elements.home_about'))
    {{--@include(_get_frontend_theme_path('pages.elements.home_sericos'))--}}
    @include(_get_frontend_theme_path('pages.elements.home_review'))
    @include(_get_frontend_theme_path('pages.elements.home_ourwork'))


@endsection