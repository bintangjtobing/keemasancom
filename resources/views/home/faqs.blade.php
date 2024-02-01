@extends('welcome')
@section('title', 'FaQs')
@section('content')
    <section id="content">
        <div class="content-wrap py-3">
            <section class="page-title bg-transparent">
                <div class="container">
                    <div class="page-title-row">

                        <div class="page-title-content">
                            <h1>FaQs</h1>
                            <span>All your Questions answered in one place</span>
                        </div>

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">FaQs</li>
                            </ol>
                        </nav>

                    </div>
                </div>
            </section>
            <section id="content">
                <div class="content-wrap">
                    <div class="container">

                        <div class="row gx-5 col-mb-80">
                            <!-- Post Content
                                                                        ============================================= -->
                            <main class="postcontent col-lg-8 offset-2">

                                <div id="faqs" class="faqs">

                                    <div id="faqs-list" class="fancy-title title-bottom-border">
                                        <h3>Some of your Questions:</h3>
                                    </div>

                                    <ul class="iconlist faqlist">
                                        <li><i class="fa-solid fa-caret-right"></i><strong><a href="#"
                                                    data-scrollto="#faq-1">Lorem ipsum dolor sit?</a></strong></li>
                                        <li><i class="fa-solid fa-caret-right"></i><strong><a href="#"
                                                    data-scrollto="#faq-2">Lorem ipsum dolor sit?</a></strong></li>
                                        <li><i class="fa-solid fa-caret-right"></i><strong><a href="#"
                                                    data-scrollto="#faq-3">Lorem ipsum dolor sit?</a></strong></li>
                                    </ul>

                                    <div class="divider"><i class="bi-circle-fill"></i></div>

                                    <h3 id="faq-1"><strong>Q.</strong> Lorem ipsum dolor sit?</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero
                                        ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates
                                        doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque
                                        explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe,
                                        aperiam, nam unde quas beatae vero vitae nulla.</p>

                                    <div class="divider divider-right"><a href="#" data-scrollto="#faqs-list"><i
                                                class="fa-solid fa-chevron-up"></i></a></div>
                                    <h3 id="faq-2"><strong>Q.</strong> Lorem ipsum dolor sit?</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero
                                        ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates
                                        doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque
                                        explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe,
                                        aperiam, nam unde quas beatae vero vitae nulla.</p>

                                    <div class="divider divider-right"><a href="#" data-scrollto="#faqs-list"><i
                                                class="fa-solid fa-chevron-up"></i></a></div>
                                    <h3 id="faq-3"><strong>Q.</strong> Lorem ipsum dolor sit?</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero
                                        ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates
                                        doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque
                                        explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe,
                                        aperiam, nam unde quas beatae vero vitae nulla.</p>

                                    <div class="divider divider-right"><a href="#" data-scrollto="#faqs-list"><i
                                                class="fa-solid fa-chevron-up"></i></a></div>
                                </div>

                            </main>
                        </div>

                    </div>
                </div>
            </section>

            <div class="clear"></div>

            <div class="container mt-6 dotted-bg rounded-6" style="background-color: #4315411b;">
                <div class="row align-items-center justify-content-between p-5 p-md-6">
                    <div class="col mb-5 mb-lg-0">
                        <h2 class="font-body h1 mb-0">#InvestasiMudah dan terpercaya Bersama KEEMASANID</h2>
                    </div>
                    <div class="col-auto">
                        <a href="#" class="btn px-3 py-2 px-md-5 py-md-3 btn-dark bg-color rounded-pill"><i
                                class="bi-calendar color-2 me-2 position-relative" style="top: 1px"></i>Book a
                            Schedule</a>
                        <a href="/hubungi-kami" class="btn px-3 py-2 px-md-5 py-md-3 bg-color-2 rounded-pill ms-2"><i
                                class="bi-envelope color me-2 position-relative" style="top: 1px"></i>Contact
                            Us</a>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- #content end -->
@endsection
