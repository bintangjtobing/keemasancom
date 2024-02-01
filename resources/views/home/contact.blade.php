@extends('welcome')
@section('title', 'Hubungi Kami')
@section('content')
    <section id="content">
        <div class="content-wrap py-3">
            <section class="page-title bg-transparent">
                <div class="container">
                    <div class="page-title-row">

                        <div class="page-title-content">
                            <h1>Hubungi Kami</h1>
                            <span>Jangan sungkan untuk menghubungi kami.</span>
                        </div>

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                            </ol>
                        </nav>

                    </div>
                </div>
            </section>
            <section id="content">
                <div class="content-wrap">
                    <div class="container">

                        <div class="row align-items-stretch col-mb-50 mb-0">
                            <!-- Contact Form
                                                                        ============================================= -->
                            <div class="col-lg-6">

                                <div class="fancy-title title-border">
                                    <h3>Send us an Email</h3>
                                </div>

                                <div class="form-widget">

                                    <div class="form-result"></div>

                                    <form class="mb-0" id="template-contactform" name="template-contactform"
                                        action="include/form.php" method="post">

                                        <div class="form-process">
                                            <div class="css3-spinner">
                                                <div class="css3-spinner-scaler"></div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <label for="template-contactform-name">Name <small>*</small></label>
                                                <input type="text" id="template-contactform-name"
                                                    name="template-contactform-name" value=""
                                                    class="form-control required">
                                            </div>

                                            <div class="col-md-4 form-group">
                                                <label for="template-contactform-email">Email <small>*</small></label>
                                                <input type="email" id="template-contactform-email"
                                                    name="template-contactform-email" value=""
                                                    class="required email form-control">
                                            </div>

                                            <div class="col-md-4 form-group">
                                                <label for="template-contactform-phone">Phone</label>
                                                <input type="text" id="template-contactform-phone"
                                                    name="template-contactform-phone" value="" class="form-control">
                                            </div>

                                            <div class="w-100"></div>

                                            <div class="col-md-12 form-group">
                                                <label for="template-contactform-subject">Subject <small>*</small></label>
                                                <input type="text" id="template-contactform-subject" name="subject"
                                                    value="" class="required form-control">
                                            </div>

                                            <div class="w-100"></div>

                                            <div class="col-12 form-group">
                                                <label for="template-contactform-message">Message <small>*</small></label>
                                                <textarea class="required form-control" id="template-contactform-message" name="template-contactform-message"
                                                    rows="6" cols="30"></textarea>
                                            </div>

                                            <div class="col-12 form-group d-none">
                                                <input type="text" id="template-contactform-botcheck"
                                                    name="template-contactform-botcheck" value=""
                                                    class="form-control">
                                            </div>

                                            <div class="col-12 form-group">
                                                <button name="submit" type="submit" id="submit-button" tabindex="5"
                                                    value="Submit" class="button button-3d m-0">Submit </button>
                                            </div>
                                        </div>

                                        <input type="hidden" name="prefix" value="template-contactform-">

                                    </form>
                                </div>

                            </div><!-- Contact Form End -->

                            <!-- Google Map
                                                                        ============================================= -->
                            <div class="col-lg-6 min-vh-50">
                                {{-- <div class="gmap h-100" data-address="Melbourne, Australia"
                                    data-markers='[{address: "Melbourne, Australia", html: "<div class=\"p-2\" style=\"width: 300px;\"><h4 class=\"mb-2\">Hi! We are <span>Envato!</span></h4><p class=\"mb-0\" style=\"font-size:1rem;\">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day.</p></div>", icon:{ image: "images/icons/map-icon-red.png", iconsize: [32, 39], iconanchor: [32,39] } }]'>
                                </div> --}}
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7344879353373!2d107.61291597644592!3d-6.922310193077393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e62ea9cac225%3A0x5e92672577890b91!2sJl.%20Asia%20Afrika%20No.158%2C%20Paledang%2C%20Kec.%20Lengkong%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040261!5e0!3m2!1sid!2sid!4v1706419458923!5m2!1sid!2sid"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div><!-- Google Map End -->
                        </div>

                        <!-- Contact Info
                                                                    ============================================= -->
                        <div class="row col-mb-50">
                            <div class="col-sm-6 col-lg-6">
                                <div class="feature-box fbox-center fbox-bg fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="uil uil-map-marker"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Our Headquarters<span class="subtitle">Bandung, Indonesia</span></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-6">
                                <div class="feature-box fbox-center fbox-bg fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="bi-telephone"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Speak to Us<span class="subtitle">(62)85222927499</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Contact Info End -->

                    </div>
                </div>
            </section>

            <div class="clear"></div>

            @include('partials.CTA')

        </div>
    </section><!-- #content end -->
@endsection
