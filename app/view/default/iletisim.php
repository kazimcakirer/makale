<?php require_once 'static/header.php'; ?>
<div class="page-heading-section section bg-parallax" data-bg-image="assets/images/bg/bg-1.jpg" data-overlay="50" style="background-image: url(&quot;assets/images/bg/bg-1.jpg&quot;); background-position: 50% 0px;">
    <div class="container">
        <div class="page-heading-content text-center">
            <h3 class="title">Contact Us</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Contact Us</li>
            </ol>
        </div>
    </div>
</div>

<div class="section section-padding">
    <div class="container">
        <div class="row mb-n5">

            <!-- Contact Map Start -->
            <div class="col-12 mb-5">
                <div class="contact-map google-map" id="contact-map" data-lat="-37.8172835" data-long="144.9560768" data-zoom="12"></div>
            </div>
            <!-- Contact Map End -->

            <!-- Contact Information Start -->
            <div class="col-lg-5 col-12 mb-5">
                <div class="contact-information">
                    <h5 class="title mb-4">Contact Information</h5>
                    <ul>
                        <li><i class="fa fa-map-o"></i><span>House 09, Road 32, Mohammadpur,<br>Dhaka-1200, UK</span></li>
                        <li><i class="fa fa-phone-square"></i><span>+88 018 785 454 589</span></li>
                        <li><i class="fa fa-fax"></i><span>+88 123 785 132 543</span></li>
                        <li><i class="fa fa-envelope-o"></i><span>keller@email.com</span></li>
                    </ul>
                    <div class="contact-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <!-- Contact Information End -->

            <!-- Contact Form Start -->
            <div class="col-lg-7 col-12 mb-5">
                <div class="contact-form">
                    <h5 class="title mb-4">Get in Touch</h5>
                    <form id="contact-form" action="assets/php/contact-mail.php" method="post">
                        <div class="row mb-n3">
                            <div class="col-md-6 col-12 mb-3"><input type="text" name="name" placeholder="Your Name"></div>
                            <div class="col-md-6 col-12 mb-3"><input type="email" name="email" placeholder="Email Address"></div>
                            <div class="col-12 mb-3"><textarea name="message" placeholder="Your Message" rows="4"></textarea></div>
                            <div class="col-12 mb-3"><input class="btn btn-primary px-5" type="submit" value="Send Message"></div>
                        </div>
                    </form>
                    <div class="form-messege"></div>
                </div>
            </div>
            <!-- Contact Form End -->

        </div>
    </div>
</div>

<?php require_once 'static/footer.php'; ?>