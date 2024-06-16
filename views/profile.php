<?php
/** @var $this \app\core\View */

$this->title = 'Profile';

?>


<!-- ----------------------- Salon Section ------------------------ -->
<section class="salon">
    <div class="wrapper">
        <img src="./upload/ppt-banner_profile.png" width="100%" />
    </div>
    <div class="profile-section wrapper">
        <!-- ------------- price category --------------- -->
        <div class="grid-one">
            <div class="profile-category">
                <div class="category">
                    <a href="#userProfile" id="userProfileLink">My details</a>
                </div>
                <!-- <div class="category">
                    <a href="#vendor" id="kycLink">KYC verification</a>
                </div> -->
                <div class="category">
                    <a href="#notification" id="noticeLink">Notification</a>
                </div>
            </div>
            <div class="typing-effect">
                <div id="text"></div>

                <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
                <script>
                    var typed = new Typed("#text", {
                        strings: [
                            "SEWAGANJ, Just For YOU",
                            "Choose Us For Quality Service.",
                            "We are Here For You.",
                        ],
                        typeSpeed: 30,
                        loop: true,
                    });
                </script>
            </div>
            <hr />
            <div class="copy-right">
                <p>SewaGanj © 2024. All Rights Reserved.</p>
            </div>
        </div>
        <!-- -----------  Price listing ---------------- -->
        <div class="salon-price-list">


            <div class="profile" id="userProfile">
                <h2>User Profile</h2>
                <div class="profile-detail">
                    <img src="assets/images/userIcon.svg" width="120px" alt="" />
                    <p>Full Name: ABC</p>
                    <p>email: admin@admin.com</p>
                    <p>Phone no.: +977-9800000000</p>
                </div>
            </div>
            <div class="profile" id="notification">
                <h2>Notification</h2>
                <div class="profile-detail">
                    <h3>Request accepted</h3>
                    <p>Your recent request for AC repairing has be acceped successfully. Our service provider will be reaching at your place in an hour.</p>
                    <button>view more</button>
                </div>
            </div>
            <!-- ----------------------- JS ----------------------------- -->
            <script>
                // Function to show user profile
                document.getElementById('userProfileLink').addEventListener('click', function() {
                    document.getElementById('userProfile').style.display = 'block';
                    document.getElementById('notification').style.display = 'none';
                });

                // Function to show notification
                document.getElementById('noticeLink').addEventListener('click', function() {
                    document.getElementById('userProfile').style.display = 'none';
                    document.getElementById('notification').style.display = 'block';
                });

                // Initially, hide both profiles or show one by default
                document.getElementById('userProfile').style.display = 'none';
                document.getElementById('notification').style.display = 'none';
            </script>
        </div>
    </div>
</section>
