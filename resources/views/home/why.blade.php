@extends('welcome')
@section('title', 'Kenapa kami?')
@section('content')
    <section id="content">
        <div class="content-wrap py-5">

            @include('partials.header-2')

            @include('partials.keunggulan')

            @include('partials.produk')

            @include('partials.paymentPartner')

            @include('partials.CTA')

        </div>
    </section><!-- #content end -->
@endsection
