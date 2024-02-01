<header id="header" class="sticky-on-scrollup">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row justify-content-between justify-content-md-center text-center">
                <!-- Logo centered on mobile using text-center and my-auto classes -->
                <div id="logo" class="mx-auto my-auto order-2 order-lg-1">
                    <a href="/">
                        <img class="logo-default"
                            srcset="https://res.cloudinary.com/boxity-id/image/upload/w_auto/q_auto:best/f_auto/v1706443919/logo_nqbebi.png, https://res.cloudinary.com/boxity-id/image/upload/w_auto/q_auto:best/f_auto/v1706443919/logo_nqbebi.png 2x"
                            src="https://res.cloudinary.com/boxity-id/image/upload/w_1000/q_auto:best/f_auto/v1706443919/logo_nqbebi.png"
                            alt="KeemasanID Logo">
                    </a>
                </div>

                <!-- Text centered on mobile using text-center class -->
                <div class="header-misc order-3 mx-auto my-1">
                    <a href="https://keemasan.co.id" class="btn text-larger btn-dark bg-color px-4 py-2 rounded-pill">
                        <span class="ms-2">PT Kebun Emas Nusantara</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header>

<style>
    /* Custom CSS for mobile view */
    @media (max-width: 767px) {
        .header-row {
            flex-direction: column;
            /* Stack logo and text on top of each other */
        }

        #logo,
        .header-misc {
            order: 0;
            /* Reset order to stack properly */
            margin-bottom: 10px;
            /* Add some space between logo and text button */
        }
    }
</style>
