@extends('welcome')
@section('title', 'Produk dan Layanan')
@section('content')
    <section id="content">
        <div class="container">

            @include('partials.layanan')
            <div class="content-wrap py-3">
                @include('partials.produk')

                @include('partials.keemasanShop')

                @include('partials.paymentPartner')

                @include('partials.CTA')

            </div>
    </section><!-- #content end -->
@endsection
