@extends( _get_frontend_layout_path('frontend') )

@section('content')
    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding parallax-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title section-title">
                        <h2>Contact <span>Us</span></h2>
                        <p>contact us for any kind of support</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Contact Information Start ==-->
    <div id="contact-information">
        <div class="container">
            <div class="row">
                <!-- Single Contact Info Start -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-contact-info">
                        <img src="{{ asset('img/svg-icon/support.svg') }}" alt="">
                        <p><span>Tel: </span> {{$config->contact_phone}}</p>
                        <p><span>Mob: </span> {{$config->contact_fax}}</p>
                    </div>
                </div>
                <!-- Single Contact Info End -->

                <!-- Single Contact Info Start -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-contact-info">
                        <img src="{{ asset('img/svg-icon/map.svg') }}" alt="">
                        <p>{{ $config->contact_address }}</p>
                    </div>
                </div>
                <!-- Single Contact Info End -->

                <!-- Single Contact Info Start -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-contact-info">
                        <img src="{{ asset('img/svg-icon/mail.svg') }}" alt="">
                        <p>{{ $config->contact_email }}</p>
                    </div>
                </div>
                <!-- Single Contact Info End -->

                <!-- Single Contact Info Start -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-contact-info">
                        <img src="{{ asset('img/svg-icon/clock.svg') }}" alt="">
                        <p><span>Week Days: </span> 05:00 – 22:00</p>
                        <p><span>Sunday: </span> Closed</p>
                    </div>
                </div>
                <!-- Single Contact Info End -->
            </div>
        </div>
    </div>
    <!--== Contact Information End ==-->

    <!--== Contact Us Form Start ==-->
    <section id="contact-form-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-form-contant">
                        <h3>Contact us for help!</h3>
                        <form id="commentform" action="{{ url('contact-us') }}" method="post" class=contact-us-form">
                            {{ csrf_field() }}
                            <input type="hidden" name="user" value="{{ session('user_data.uuid') }}">
                            <div class="row">
                                <!-- Name Input Start -->
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input class="form-control input" name="name" type="text" placeholder="Your Name" id="input-name" required>
                                    </div>
                                </div>
                                <!-- Name Input End -->
                                <!-- Subject Input Start -->
                                <div class="col-lg-6  col-md-6">
                                    <div class="form-group">
                                        <input class="form-control input" name="mobile" type="text" placeholder="Your Phone #" id="input-phone" required>
                                    </div>
                                </div>
                                <!-- Subject Input End -->
                                <!-- Email Input Start -->
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input class="form-control input" type="email" placeholder="Your Email" name="email" id="input-email" required>
                                    </div>
                                </div>
                                <!-- Email Input End -->

                                <!-- Message Input Start -->
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea rows="6" class="textarea form-control" placeholder="Your Message *" id="input-message" name="message"></textarea>
                                    </div>
                                </div>
                                <!-- Message Input End -->
                                <div class="col-md-12">
                                    <div class="control">
                                        <label class="checkbox">
                                            <input type="checkbox" checked>
                                            I agree to the <a href="{{ url('/terms') }}">terms and conditions</a>
                                        </label>
                                    </div>
                                </div>
                                <!-- Submit Input Start -->
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <button id="submit-contact-us-btn" class="raj_btn" type="submit">Send Now <i class="fa fa-send-o"></i></button>
                                </div>
                                <!-- Submit Input End -->
                                <div class="notification is-primary" style="display: none;margin-top: 10px;" id="txt-on-success">
                                    Your enquiry form has been saved, we will contact you very soon!
                                </div>
                                <div class="notification is-danger" style="display: none;margin-top: 10px;" id="txt-on-fail">
                                    System is busy, please try again later!
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if($config->embed_map_code)
    <div id="google-map-area">
        {!! $config->embed_map_code !!}
    </div>
    <!--== Google Map Area End ==-->
    @endif

@endsection