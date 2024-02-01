<div class="section bg-transparent" style="padding: 40px; 0;">
    <div class="container">
        <div class="heading-block mw-xs mx-auto text-center mb-6">
            <h3 class="text-dark text-transform-none ls-0">Keemasan Payment Partner</h3>
        </div>
    </div>
    <ul class="clients-grid row row-cols-2 row-cols-sm-3 row-cols-md-6">
        @php
            $paymentPartners = ['1.png', '2.png', '3.png', '4.png', '5.png', '6.png', '7.png', '8.png', '14.png', '9.png', '10.png', '11.png', '12.png', '13.png'];
        @endphp
        @foreach ($paymentPartners as $partner)
            <li class="col"><a href="#"><img src="keemasan/payment-partner/{{ $partner }}"
                        alt="Payment Partner KeemasanID"></a></li>
        @endforeach

    </ul>
</div>
