<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="author" content="Boxity Central Indonesia">
    <meta name="google-site-verification" content="0cZjGwY5g597nKaz-od_uHdkGAZWABWJDdT6zpTkx0k" />
    <meta name="description"
        content="Investasi Emas Mudah dan Terpercaya Bersama Keemasan yang telah berpengalaman selama lebih dari 10 tahun.">
    <meta name="keyword"
        content="gold investment, keemasanid, investasi emas, gadai emas, kebun emas, sewa kebun emas, KEEMASAN, umroh dan haji, emas jadi umroh, harga emas terbaru">
    <meta name="url" content="{{ Request::url() }}">
    <meta name="identifier-URL" content="{{ Request::url() }}">

    <!-- Font Imports -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&family=DM+Serif+Text&display=swap"
        rel="stylesheet">

    <!-- Core Style -->
    <link rel="stylesheet" href="{!! asset('style.css?' . rand(10000, 99999)) !!}">

    <!-- Font Icons -->
    <link rel="stylesheet" href="{!! asset('css/font-icons.css?' . rand(10000, 99999)) !!}">

    <!-- Plugins/Components CSS -->
    <link rel="stylesheet" href="{!! asset('css/swiper.css?' . rand(10000, 99999)) !!}">

    <!-- Niche Demos -->
    <link rel="stylesheet" href="{!! asset('demos/finance/finance.css?' . rand(10000, 99999)) !!}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{!! asset('css/custom.css?' . rand(10000, 99999)) !!}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.png" type="image/png">

    <!-- Document Title
 ============================================= -->
    <title>@yield('title') | KeemasanID</title>
    <!-- FAVICON AND TOUCH ICONS -->
    <link rel="icon" href="favicon.png" type="image/png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon.png">

    {{-- Meta --}}
    <meta name="og:title" property="og:title" content="@yield('title') | KeemasanID" />
    <meta name="og:url" property="og:url" content="{{ Request::url() }}" />
    <meta name="og:type" property="og:type" content="website" />
    <meta name="og:image" property="og:image"
        content="https://res.cloudinary.com/boxity-id/image/upload/w_1000/q_auto:best/f_auto/w_1000/q_auto:best/f_auto/v1706416951/meta-cover_juzl1l.png" />
    <meta name="og:description" property="og:description"
        content="Investasi Emas Mudah dan Terpercaya Bersama Keemasan yang telah berpengalaman selama lebih dari 10 tahun." />
    <meta name="twitter:card" content="@yield('title') | KeemasanID" />
    <meta name="twitter:title" property="og:title" content="@yield('title') | KeemasanID" />
    <meta name="twitter:url" property="og:url" content="{{ Request::url() }}" />
    <meta name="twitter:type" property="og:type" content="website" />
    <meta name="twitter:image" property="og:image"
        content="https://res.cloudinary.com/boxity-id/image/upload/w_1000/q_auto:best/f_auto/v1706416951/meta-cover_juzl1l.png" />
    <meta name="twitter:description" property="og:description"
        content="Investasi Emas Mudah dan Terpercaya Bersama Keemasan yang telah berpengalaman selama lebih dari 10 tahun." />
    <link rel="canonical" href="{{ Request::url() }}/" />
    <link rel="shortcut icon" href="favicon.png" type="image/png" sizes="64x64" />
    <meta name="og:email" content="info@keemasan.co.id" />
    <meta name="og:phone_number" content="085222927499" />
    <meta name="og:latitude" content="-6.9223102" />
    <meta name="og:longitude" content="107.612916" />
    <meta name="og:street-address"
        content="Jl. Asia Afrika No.158, Kb. Pisang,
    Kec. Sumur Bandung, Kota Bandung, Jawa Barat" />
    <meta name="og:locality" content="Jawa Barat" />
    <meta name="og:region" content="ID" />
    <meta name="og:postal-code" content="40261" />
    <meta name="og:country-name" content="Indonesia" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-621984060"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-621984060');
    </script>
    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-621984060/hx6OCNW32IEZELzyyqgC'
        });
    </script>
    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-621984060/GP2YCNi32IEZELzyyqgC'
        });
    </script>
    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-621984060/TIryCNu32IEZELzyyqgC'
        });
    </script>
</head>

<body class="stretched">
    <div id="wrapper">
        @include('partials.header')
        <div id="notification-area"></div>
        @yield('content')
        @include('partials.footer')

    </div>
    <div id="gotoTop" class="uil uil-angle-double-up bg-color h-bg-color-2 shadow rounded-circle"></div>

    <!-- JavaScripts
 ============================================= -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            function fetchNotification() {
                $.ajax({
                    url: '/proxy-fetch',
                    type: 'GET',
                    success: function(data) {
                        if (data) {
                            $('#notification-area').html(data);
                            $(".alert").fadeTo(5000, 500).slideUp(500, function() {
                                $(this).remove();
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log("Error: " + error);
                    },
                    complete: function() {
                        setTimeout(fetchNotification, 5000);
                    }
                });
            }
            fetchNotification();
        });
    </script>

    <script src="{!! asset('js/plugins.min.js?' . rand(10000, 99999)) !!}"></script>
    <script src="{!! asset('js/functions.bundle.js?' . rand(10000, 99999)) !!}"></script>

    <script>
        jQuery(document).ready(function() {
            var lastScrollTop = 0;
            window.addEventListener("scroll", function(event) {
                var st = jQuery(this).scrollTop();
                if (st > lastScrollTop) {
                    jQuery('#header.sticky-on-scrollup').removeClass('show-sticky-onscroll'); // Down Scroll
                } else {
                    jQuery('#header.sticky-on-scrollup').addClass('show-sticky-onscroll'); // Up Scroll
                }
                lastScrollTop = st;
            });

            jQuery('.services-grid .feature-box').hover(
                function() {
                    jQuery(this).addClass("dark");
                },
                function() {
                    jQuery(this).removeClass("dark");
                }
            );
        });
    </script>


</body>

</html>
