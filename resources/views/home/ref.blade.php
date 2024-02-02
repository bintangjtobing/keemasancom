@extends('welcome')
@section('title', $sponsor_nama . ' | ' . $sponsor_username . ' | Referral')
@section('content')
    <section id="content">
        <div class="content-wrap py-4">
            <section id="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                            <div class="profile-card text-center">
                                <img src="{{ $sponsor_fotone != 'no-images.png' ? asset($sponsor_fotone) : 'https://res.cloudinary.com/boxity-id/image/upload/v1706840685/no-images_oxu8sh.png' }}"
                                    alt="User image - Keemasan .com" class="profile-image">
                                <h3 style="margin-top:10px; margin-bottom: 5px;">{{ $sponsor_nama }}</h3>
                                <span class="title"
                                    style="@if ($sponsor_peringkat == 'JUNIOR FARMERS') color:#431541; font-weight:bolder;
                                @elseif($sponsor_peringkat == 'SENIOR FARMERS')
                                color:#FEC152; font-weight:bolder;
                                @else
                                color:#FEC152;font-weight:bold;color: #FEC152;background-color: #431541;padding: 8px;border-radius: .25rem; @endif">
                                    @if ($sponsor_peringkat == 'JUNIOR FARMERS' || $sponsor_peringkat == 'SENIOR FARMERS')
                                        <i class="bi bi-patch-check-fill"
                                            style="@if ($sponsor_peringkat == 'JUNIOR FARMERS') color:#431541;
@else
color:#FEC152; @endif"></i>
                                    @elseif($sponsor_peringkat == 'MASTER FARMERS')
                                        <img src="{!! asset('keemasan/peringkat/master.png') !!}" style="width:25px; margin-right:3px;"
                                            alt="Master Farmers - {{ $sponsor_nama }}">
                                    @endif
                                    {{ $sponsor_peringkat }}
                                </span>
                                <div class="action-buttons" style="margin: 20px 0;">
                                    <a href="https://api.whatsapp.com/send?phone={{ $sponsor_wa }}&amp;text=Halo%20{{ $sponsor_nama }}%20Saya%20tertarik%20dan%20ingin%20bergabung%20dengan%20{{ $sc_name }}%20mohon%20infonya"
                                        target="_blank" class="btn discussion my-1"
                                        style="padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  margin-right: 10px; background-color: #FEC152;
  color: #431541;"><i
                                            class="bi bi-whatsapp"></i> Diskusi
                                        Keemasan</a>
                                    <a href="https://keemasan.id/reff_{{ $sponsor_username }}" target="_blank"
                                        class="btn rent my-1"
                                        style="padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  margin-right: 10px; background-color: #431541;
  color: #FEC152;"><i
                                            class="bi bi-bag"></i> Sewa
                                        Kebun Emas</a>
                                </div>
                                <h2 style="color: #333; font-size: 1.5em; margin-bottom: 5px;">CARA CERDAS BERKEBUN EMAS
                                </h2>
                                <p style="color: #666;
                                    line-height: 1.6;">
                                    Tanam bibit emas di platform keemasan, dapatkan panen 0.03 gram dari setiap bibit
                                    emas yang anda tanam di platform keemasan hingga 99 kali masa panen</p>
                                <h2 style="color: #333;  font-size: 1.5em;  margin-bottom: 5px;">DAPATKAN BAGI HASIL
                                    PANEN</h2>
                                <p style="color: #666;
                                    line-height: 1.6;">Beli kebun
                                    emas di platform keemasan, hanya dengan Rp 300.000 anda sudah memiliki
                                    kavling kebun emas dan dapat disewakan kepada 15 petani dan dapatkan bagi hasil
                                    panen hingga 50% sampai 99 kali masa panen</p>
                                <h2 style="color: #333;  font-size: 1.5em;  margin-bottom: 5px;">PELAJARI VIDEO KEEMASAN
                                </h2>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 my-1">
                                        <iframe width="560" height="315"
                                            src="https://www.youtube.com/embed/mHvd6_ar7pY?si=xUsPYzk-yvyKXji4"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen></iframe>
                                    </div>
                                    <div class="col-lg-6 col-md-6 my-1">
                                        <iframe width="560" height="315"
                                            src="https://www.youtube.com/embed/6dQmcYjlWf4?si=wJ6kjtxo2lIch_ge"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen></iframe>
                                    </div>
                                    <div class="col-lg-6 col-md-6 my-1">
                                        <iframe width="560" height="315"
                                            src="https://www.youtube.com/embed/YDAkQ1NjLkQ?si=1lqQiUeaU4MgxIqJ"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen></iframe>
                                    </div>
                                    <div class="col-lg-6 col-md-6 my-1">
                                        <iframe width="560" height="315"
                                            src="https://www.youtube.com/embed/FCr7kdnsqgw?si=2TbLYK1cQwncNaEf"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </section><!-- #content end -->
    <style>
        @media only screen and (max-width: 600px) {
            .profile-image {
                display: block;
                /* Override if necessary to ensure it's a block-level element */
                margin: 0 auto 10px;
                /* Center the image and provide some margin at the bottom */
            }

            .action-buttons a {
                display: block;
                /* Stack the buttons vertically */
                margin: 10px auto;
                /* Center the buttons with automatic horizontal margins */
                /* Remove the margin-right style from the inline style attribute if it's not needed */
            }
        }
    </style>
@endsection
