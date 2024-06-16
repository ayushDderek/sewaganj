<?php
/** @var $categories */
?>


<section class="home" id="home">
    <div class="banner">
        <img src="assets/images/banner.jpg" width="100%" alt="">
    </div>

    <section class="home-services wrapper">
        <h1>Our Services</h1>
        <hr>
        <div class="our-services">
            <!-- ------------------- 1st Row ------------- -->

            <div class="services-row">
                <?php
                foreach ($categories as $keys ) :
                $data = get_object_vars($keys);
                ?>
                <div class="service-box"><a href="<?php echo '/' . str_replace(' ', '-', strtolower($data['category'])); ?>">
                        <div class="service-logo">
                            <img src="../upload/<?php echo $data['image'] ?>" alt="home-repair">
                        </div>
                        <div class="service-label"><?= $data['category'] ?></div></a>
                </div>
            <?php endforeach; ?>
            </div>


        </div>
    </section>
    <section class="aboutUs wrapper" id="aboutUs">
        <div class="aboutUs-bg">
            <div class="aboutUs-graphic">
                <img src="assets/images/aboutUs.png" alt="aboutUs graphic">
            </div>
            <div class="adoutUs-title">
                <h1>Who Are We?</h1>
                <div class="aboutUs-para">
                    <p><b>Sewa-Ganj</b> is an online platform that allows customer to get access to home services as when ,how, where they want the services.</p>
                    <p>sewaganj is your GATEWAY TO HASSLE-FREE Home solutions and trusted partner for all the home services like electrician, plumber,movers and packers,women's and men's salon, grooming and many more.</p>
                    <p>We ensure our customers a high quality, standardised and reliable service experience. To fulfill this, we work closely with our service partners, enabling them with technology, training, products, tools, insurance and brand, helping them succeed and deliver their work.</p>
                </div>
            </div>
        </div>
    </section>
</section>
