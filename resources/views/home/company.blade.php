@extends('welcome')
@section('title', 'Produk dan Layanan')
@section('content')
    <section id="content">
        <div class="content-wrap py-3">
            <div class="section bg-transparent" style="padding:20px 0;">
                <div class="container">
                    <div class="heading-block mw-xs mx-auto text-left mb-2">
                        <h3 class="color text-transform-none ls-0">Tentang Perusahaan Kami</h3>
                        <p>
                            Emas telah menjadi komoditi yang diminati oleh konsumen Indonesia sejak lama. Hal ini karena
                            emas memiliki sifat yang tahan lama, mudah dibeli dan dijual, serta memiliki nilai yang
                            cenderung meningkat dari waktu ke waktu.<br>
                            <br>
                            Pada tahun 1999, PT Kebun Emas Nusantara (Keemasan) didirikan di Medan, Sumatera Utara. Keemasan
                            merupakan perusahaan yang bergerak di bidang investasi emas. Keemasan menyediakan berbagai
                            produk emas, mulai dari emas batangan, emas perhiasan, hingga emas koin.
                            Keemasan didirikan oleh sekelompok pengusaha yang memiliki visi untuk menjadi perusahaan
                            terdepan yang menyediakan produk emas unggulan. Keemasan berkomitmen untuk memberikan manfaat
                            nyata kepada semua konsumen, baik untuk investasi maupun untuk kebutuhan sehari-hari.<br>
                            <br>
                            <b>Pengembangan PT Kebun Emas Nusantara</b><br>
                            Sejak didirikan, Keemasan telah berkembang pesat. Keemasan telah memiliki jaringan cabang yang
                            tersebar di seluruh Indonesia. Keemasan juga telah bekerja sama dengan berbagai mitra, seperti
                            toko emas tradisional, perbankan, dan perusahaan asuransi.
                            Keemasan terus berinovasi untuk memberikan layanan yang terbaik kepada konsumen. Keemasan telah
                            meluncurkan berbagai produk dan layanan baru, seperti program nyicil emas, gadai emas, dan
                            layanan jual beli emas online.<br>
                            <br>
                            <b>Visi dan misi PT Kebun Emas Nusantara</b><br>
                            Visi Keemasan adalah menjadi perusahaan terdepan yang menyediakan produk emas unggulan. Keemasan
                            berkomitmen untuk memberikan produk emas yang berkualitas tinggi, layanan yang terbaik, dan
                            harga yang kompetitif.<br>
                            <br>
                            <b>Misi Keemasan</b> adalah hadir memberi manfaat nyata kepada semua konsumen. Keemasan ingin
                            membantu
                            konsumen untuk mencapai tujuan finansial mereka dengan berinvestasi emas.<br>
                            <br>
                            Pada tahun 2024, PT Kebun Emas Nusantara telah memasuki usia ke-25. Selama 25 tahun, Keemasan
                            telah melayani jutaan konsumen di Indonesia. Keemasan berkomitmen untuk terus berinovasi dan
                            memberikan layanan terbaik kepada konsumen, sehingga Keemasan dapat terus menjadi perusahaan
                            terdepan yang menyediakan produk emas unggulan.
                        </p>
                    </div>
                    <div class="row mt-6">
                        <div class="col-12 text-center mt-0 mt-md-4">
                            <a href="/hubungi-kami" class="btn text-larger px-5 py-3 btn-dark bg-color rounded-pill"><i
                                    class="bi-calendar color-2 me-2 position-relative" style="top: 1px"></i>Hubungi
                                Kami</a>
                        </div>
                    </div>
                </div>
            </div>

            @include('partials.produk')

            @include('partials.paymentPartner')

            @include('partials.CTA')

        </div>
    </section><!-- #content end -->
@endsection
