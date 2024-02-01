@extends('welcome')
@section('title', 'Berita Terbaru')
@section('content')
    <section id="content">
        <div class="content-wrap py-3">
            <section class="page-title bg-transparent">
                <div class="container">
                    <div class="page-title-row">

                        <div class="page-title-content">
                            <h1>Berita</h1>
                            <span>Our Latest News in Keemasan</span>
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

                        <!-- Posts
                                                                        ============================================= -->
                        @include('partials.beritaKeemasan-justPost')
                    </div>
                </div>
            </section>

            <div class="clear"></div>

            @include('partials.CTA')

        </div>
    </section><!-- #content end -->
@endsection
