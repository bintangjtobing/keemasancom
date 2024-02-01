@extends('welcome')
@section('title', 'Homepage')
@section('content')
    @include('partials.slider')
    <section id="content">
        <div class="content-wrap py-5">

            @include('partials.header-2')

            @include('partials.keunggulan')

            @include('partials.produk')

            @include('partials.keemasanShop')

            @include('partials.paymentPartner')
            @include('partials.beritaKeemasan')

            @include('partials.CTA')

        </div>
    </section><!-- #content end -->
@endsection
