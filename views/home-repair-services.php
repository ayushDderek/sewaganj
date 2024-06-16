<?php
?>


<!-- ----------------------- Salon Section ------------------------ -->
<section class="salon">
    <div class="wrapper">
        <img src="assets/images/home-repair.png" width="100%" />
    </div>
    <div class="salon-section wrapper">
        <!-- ------------- price category --------------- -->
        <div class="grid-one">
            <div class="salon-price-category">
                <div class="category"><a href="#electrician">Electrician</a></div>
                <div class="category"><a href="#plumbing">Plumbing</a></div>
                <div class="category"><a href="#motor">Motor Services</a></div>
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
            <div class="pricing" id="electrician">
                <h2>Electrician</h2>

                <div class="pricing-product">
                    <div class="service-detail">
                        <div>
                            <h4>Services:</h4>
                            <ul>
                                <li>Wiring</li>
                                <li>MCB Installation</li>
                                <li>Panel Board Installation</li>
                                <li>Power Switch Installation</li>
                            </ul>

                        </div>
                    </div>
                    <!-- <img src="assets/salon/waxing.jpg" alt="" /> -->
                </div>
            </div>

            <div class="pricing" id="plumbing">
                <h2>Plumbing</h2>

                <div class="pricing-product">
                    <div class="service-detail">
                        <a href="#"><div>
                                <h4>Services:</h4>
                                <ul>
                                    <li>Piping Overhaul</li>
                                    <li>Leakage Repair</li>
                                    <li>Tap Replacement</li>
                                    <li>Drainage Solutions</li>
                                    <li>Piping Errors</li>
                                </ul>

                            </div></a>

                    </div>
                    <!-- <img src="assets/salon/waxing.jpg" alt="" /> -->
                </div>


            </div>

            <div class="pricing" id="motor">
                <h2>Motor Services</h2>
                <div class="pricing-product">
                    <div class="service-detail">
                        <a href="#"><div>
                                <h4>Services:</h4>
                                <ul>
                                    <li>rewinding of the motor</li>
                                    <li>Change/Servicing/New starting Recoil of Capacitor</li>
                                    <li>Change of motor bearing</li>
                                </ul>

                            </div></a>
                    </div>
                    <!-- <img src="assets/salon/waxing.jpg" alt="" /> -->
                </div>
            </div>
        </div>
    </div>
</section>
