<?php
use app\core\Application;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $this->title ?></title>
    <!-- -------------- CSS links ------------------>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/css_sg/navbar.css">
    <link rel="stylesheet" href="/css_sg/footer.css">
    <link rel="stylesheet" href="/css_sg/style.css">
    <link rel="stylesheet" href="css_sg/home.css">
    <link rel="stylesheet" href="css_sg/profile.css">
    <link rel="stylesheet" href="css_sg/salon.css">
    <link rel="stylesheet" href="css_sg/home-repair.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/warehouse.css">

</head>
<body>
<!-- ------------ NavBar ------------ -->
<section type="navbar" id="navbar-bg">
    <nav class="navbar wrapper">
        <div class="nav-section">
            <div class="logo">
                <a href="/"><img id="nav-logo" src="assets/images/logo3.png" width="10px" alt="SewaGanj logo"></a>
            </div>

<!--            <div class="nav-section-elements">-->
<!--                <li><a href="#home">Home</a></li>-->
<!--                <li><a href="#services">Services</a></li>-->
<!--                <li><a href="#aboutUs">About Us</a></li>-->
<!--                <li><a href="#contact">Contact</a></li>-->
<!--            </div>-->

            <div class="nav-section-location">
                <img src="assets/images/location.svg" width="30px" alt="">
                <input type="text" placeholder="location"></input>
            </div>
            <div class="warehouse">
                <a href="/warehouse" class="warehouse"><img src="assets/images/warehouse.svg" width="30px" alt="warehouse logo">Warehouse</a>
            </div>
            <div class="nav-login-container">
            <?php if(Application::isGuest()) : ?>
                <div class="nav-section-login">
                    <img src="assets/images/userIcon.svg" width="30px" alt="">
                    <button type="login"><a href="/login">login / Register</a></button>
                </div>
            <?php else: ?>
            <div class="nav-login-container" >
                <div class="nav-section-login">
                    <button><a href="/profile">Profile</a></button>
                </div>
                <div class="nav-section-login">
                    <img src="assets/images/userIcon.svg" width="30px" alt="">
                    <button type="logout"><a href="/logout">Welcome <?php echo Application::$app->user->getDisplayName() ?> (Logout)</a></button>
                </div>
            </div>
            <?php endif; ?>
            </div>
            <!-- </div> -->
    </nav>
    <hr>
</section>
<!-- ------------ Header Container --------------- -->

<section id="container">
    <?php if (Application::$app->session->getFlash('success')) : ?>
    <div class="alert alert-success">
        <?php echo Application::$app->session->getFlash('success') ?>
    </div>
    <?php endif; ?>
    {{content}}
</section>

<!-- -------------------- News letter ---------------- -->
<section id="newsletter-section" id="contact">
    <div class="footer-top wrapper">
        <div class="footer-text">
            <h2 class="head-foot">Subscribe to our newsletter</h2>
            <p class="para-foot">Praesent fringilla erat a lacinia egestas. Donec vehicula tempor libero et cursus. Donec non quam urna. Quisque vitae porta ipsum.</p>
        </div>
        <div class="email-input">
            <input type="text" placeholder="Email address">
            <span class="sub-btn"><button type="button" >SUBSCRIBE </button>
            <i class="fa-solid fa-arrow-right"></i>
            </span>
        </div>
    </div>
</section>

<!-- -------------------- Footer -------------------- -->
<section type="Footer" id="footer-bg">
    <div class="footer wrapper">

        <div class="footer-body">
            <div class="footer-body-container">
                <div class="footer-item grid-one">
                    <a href=""><img id="logo2" src="assets/images/logo3.png"></a>
                    <a href="">Customer Support</a>
                    <span><i class="fa-solid fa-phone"></i><a href="">051-123456</a></span>
                    <span><i class="fa-solid fa-location-dot"></i>
                    <a href="">Birgunj, Nepal</a></span>
                    <span><i class="fa-solid fa-envelope"></i><a href="">info@sewaganj.com</a></span>
                </div>
                <div class="footer-item">
                    <a href="">Help Centers</a>
                    <a href="">Jobs</a>
                    <a href="">Cookie Preferences</a>
                    <a href="">Legal Notices</a>
                    <a href="">Contact Us</a>
                </div>
                <div class="footer-item">
                    <a href="">DOWNLOAD APP</a>
                    <a href="" class="app-icon"><i class="fa-brands fa-google-play"></i>Play store</a>
                    <a href="" class="app-icon"><i class="fa-brands fa-app-store"></i></i>App store</a>
                </div>

            </div>
        </div>
        <div class="lining"></div>
        <div class="footer-bottom">
            <p>SewaGanj - All Right Reserved © 2024. Design by SewaGanj Team</p>
        </div>
    </div>
</section>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="./assets/js/cart.js"></script>


</body>
</html>