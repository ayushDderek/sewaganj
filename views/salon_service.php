<?php
?>

<!-- ----------------------- Salon Section ------------------------ -->
<section class="salon">
    <div class="wrapper">
        <img src="assets/salon/top-banner2-01.png" width="100%" />
    </div>
    <div class="salon-section wrapper">
        <!-- ------------- price category --------------- -->
        <div class="grid-one">
            <div class="salon-price-category">
                <div class="category"><a href="#basic">Basic</a></div>
                <div class="category"><a href="#premium">Premium</a></div>
                <div class="category"><a href="#luxury">Luxury</a></div>
            </div>
            <div class="typing-effect">
                <div id="text"></div>

                <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
                <script>
                    var typed = new Typed('#text', {
                        strings: ['SEWAGANJ, Just For YOU', 'Choose Us For Quality Service.', 'We are Here For You.'],
                        typeSpeed: 30,
                        loop: true
                    });
                </script>
            </div>
            <hr>
            <div class="copy-right"><p>SewaGanj © 2024. All Rights Reserved.</p></div>
        </div>
        <!-- -----------  Price listing ---------------- -->
        <div class="salon-price-list">
            <div class="pricing" id="basic">
                <h2>BASIC</h2>

                <div class="pricing-product">
                    <div class="service-detail">
                        <a href="#"><div>
                                <h4>Foot Massage</h4>
                                rating: 4.1 price: NRS. 299
                            </div></a>
                    </div>
                    <!-- <img src="assets/salon/waxing.jpg" alt="" /> -->
                </div>
                <div class="pricing-product">
                    <div class="service-detail">
                        <a href="#"><div>
                                <h4>Cut, file & polish</h4>
                                rating: 4.1 price: NRS. 399
                            </div></a>
                    </div>
                    <!-- <img src="assets/salon/waxing.jpg" alt="" /> -->
                </div>
                <div class="pricing-product">
                    <div class="service-detail">
                        <a href="#"><div>
                                <h4>Bleach</h4>
                                rating: 4.1 price: NRS. 549
                            </div></a>
                    </div>
                    <!-- <img src="assets/salon/waxing.jpg" alt="" /> -->
                </div>
            </div>

            <div class="pricing" id="premium">
                <h2>PREMIUM</h2>

                <div class="pricing-product">
                    <div class="service-detail">
                        <a href="#"
                        ><div>
                                <h4>Elysian Candle Spa Manicure</h4>
                                rating: 4.1 price: NRS. 1,599
                            </div></a
                        >

                    </div>
                    <!-- <img src="assets/salon/waxing.jpg" alt="" /> -->
                </div>
                <div class="pricing-product">
                    <div class="service-detail">
                        <a href="#"><div>
                                <h4>Glovite lightening facial</h4>
                                rating: 4.1 price: NRS. 1,699
                            </div></a>

                    </div>
                    <!-- <img src="assets/salon/waxing.jpg" alt="" /> -->
                </div>
                <div class="pricing-product">
                    <div class="service-detail">
                        <a href="#"><div>
                                <h4>Manicure & Pedicure</h4>
                                rating: 4.1 price: NRS. 2,199
                            </div></a>
                    </div>
                    <!-- <img src="assets/salon/waxing.jpg" alt="" /> -->
                </div>
            </div>

            <div class="pricing" id="luxury">
                <h2>LUXURY</h2>
                <div class="pricing-product">
                    <div class="service-detail">
                        <a href="#"><div>
                                <h4>Wax & Glow</h4>
                                rating: 4.1 price: NRS. 2,999
                            </div></a>
                        <ul>
                            <li>Waxing: Full arm, full leg</li>
                            <li>Facial: Cheryl's by L'Oreal glovite facial</li>
                            <li>Facial hair removal: Upper lip - Threading</li>
                        </ul>
                    </div>
                    <!-- <img src="assets/salon/waxing.jpg" alt="" /> -->
                </div>
                <div class="pricing-product">
                    <div class="service-detail">
                        <a href="#"
                        ><div>
                                <h4>Manicure & Pedicure</h4>
                                rating: 4.1 price: NRS. 2,199
                            </div></a>
                        <ul>
                            <li>Manicure: Elysian Rose manicure</li>
                            <li>Pedicure:  Elysian Rose pedicure</li>
                            <li>Threading & Face waxing</li>
                        </ul>
                    </div>
                    <!-- <img src="assets/salon/waxing.jpg" alt="" /> -->
                </div>
            </div>
        </div>
    </div>
</section>
