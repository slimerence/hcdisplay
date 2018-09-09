@extends(_get_frontend_layout_path('catalog'))

@section('content')

    <section class="ptb-60">
    <div class="container">
        <div class="row">
        @if(env('support_wholesale',false))
            <div class="col-md-6">
                @include(_get_frontend_theme_path('customers.elements.customer'))
            </div>
            <div class="col-md-6">
                @include(_get_frontend_theme_path('customers.elements.wholesale'))
            </div>
        @else
            <div class="col-md-3"></div>
            <div class="col-md-6">
                @include(_get_frontend_theme_path('customers.elements.customer'))
            </div>
            <div class="col-md-3"></div>
        @endif
        </div>
    </div>
    </section>
@endsection