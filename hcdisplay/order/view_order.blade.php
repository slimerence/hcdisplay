@extends(_get_frontend_layout_path('catalog'))
@section('content')
    <section class="ptb-60">

    <div class="container ptb-60" id="view-orders-manager-app">
        <div class="box">
            <div class="col is-pulled-left">
                <h4>
                    Order #: {{ $order->serial_number }} {!! \App\Models\Utils\OrderStatus::GetName($order->status) !!}
                </h4>
            </div>
            @if(session('user_data.role') == \App\Models\Utils\UserGroup::$FINANCE_CONTROLLER && $order->status == \App\Models\Utils\OrderStatus::$PENDING)
                <div class="col">
                    <div class="btn-group float-right order-actions-bar" role="group" aria-label="Actions">
                        <a class="btn btn-success" href="{{ url('frontend/my_orders') }}" role="button">
                            <i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i>&nbsp;Back
                        </a>
                        <a class="btn btn-primary need-confirm"
                           data-msg="Are you sure to approve this order (# {{$order->serial_number}})?"
                           href="{{ url('frontend/approve_order/'.session('user_data.uuid').'/'.$order->uuid) }}" role="button">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Approve
                        </a>
                        <a class="btn btn-danger" v-on:click="askWhy($event)"
                           data-msg="Are you sure to decline this order (# {{$order->serial_number}})?"
                           href="{{ url('frontend/decline_order/'.session('user_data.uuid').'/'.$order->uuid) }}" role="button">
                            <i class="fa fa-ban" aria-hidden="true"></i>&nbsp;Decline
                        </a>
                    </div>
                </div>
            @else
                <div class="col is-pulled-right" style="margin-right: 1%;">
                    <a class="button is-link is-pulled-right" href="{{ url('frontend/my_orders') }}">
                        <i class="fa fa-arrow-left"></i>&nbsp;Back
                    </a>
                </div>
            @endif
            <div class="is-clearfix"></div>
        </div>


        <div class="box">
            <div class="row">
                <div class="col-6">@include(_get_frontend_theme_path('order.elements.summary'))</div>
                <div class="col-6">@include(_get_frontend_theme_path('order.elements.customer'))</div>
            </div>
            <div class="is-clearfix"></div>
        </div>
        <br>
        <div class="box">
            @include(_get_frontend_theme_path('order.elements.order_items'))
            <div class="is-clearfix"></div>
        </div>
        <div class="box">
            <div class="row">
                <div class="col-6">@include(_get_frontend_theme_path('order.elements.shipment'))</div>
                <div class="col-6">@include(_get_frontend_theme_path('order.elements.notes'))</div>
            </div>
            <div class="is-clearfix"></div>
        </div>
        <div class="content pt-40">
            @if(session('user_data.role') == \App\Models\Utils\UserGroup::$FINANCE_CONTROLLER && $order->status == \App\Models\Utils\OrderStatus::$PENDING)
                <div class="col">
                    <div class="btn-group float-right order-actions-bar" role="group" aria-label="Actions">
                        <a class="btn btn-success" href="{{ url('frontend/my_orders') }}" role="button">
                            <i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i>&nbsp;Back
                        </a>
                        <a class="btn btn-primary" href="{{ url('frontend/approve_order/'.session('user_data.uuid').'/'.$order->uuid) }}" role="button">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Approve
                        </a>
                        <a class="btn btn-danger"
                           v-on:click="askWhy($event)"
                           data-msg="Are you sure to decline this order (# {{$order->serial_number}})?"
                           href="{{ url('frontend/decline_order/'.session('user_data.uuid').'/'.$order->uuid) }}" role="button">
                            <i class="fa fa-ban" aria-hidden="true"></i>&nbsp;Decline
                        </a>
                    </div>
                </div>

            @else
                <div class="col" style="margin-right: 1%;">
                    <a class="button is-link is-pulled-right" href="{{ url('frontend/my_orders') }}" role="button">
                        <i class="fa fa-arrow-left"></i>&nbsp;Back
                    </a>
                </div>
            @endif
                <div class="is-clearfix"></div>
        </div>
        <br>
    </div>
    </section>
@endsection