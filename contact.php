<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="HTML5 Template Infolio Multi-Purpose themeforest">
    <meta name="description" content="Infolio - Multi-Purpose HTML5 Template">
    <meta name="author" content="">

    <!-- Title  -->
    <title>Infolio</title>

    <?php include('css.php') ?>

</head>

<body>

<!-- ==================== Start Loading ==================== -->

<?php include('loader.php') ?>

<!-- ==================== End Loading ==================== -->


<div class="cursor"></div>


<!-- ==================== Start progress-scroll-button ==================== -->

<div class="progress-wrap cursor-pointer">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>

<!-- ==================== End progress-scroll-button ==================== -->



<div id="smooth-wrapper">

    <!-- ==================== Start Navbar ==================== -->

    <?php include('navbar.php') ?>

    <!-- ==================== End Navbar ==================== -->
    <div id="smooth-content">

        <main class="main-bg">

            <!-- ==================== Start Header ==================== -->
            <header class="page-header bg-img section-padding" data-background="assets/imgs/header/b5.jpg"
                    data-overlay-dark="9">
                <div class="container pt-100">
                    <div class="text-center">
                        <h1 class="fz-100 text-u">Contact Us.</h1>
                        <div class="mt-15">
                            <a href="home-main.html">Home</a>
                            <span class="padding-rl-20">|</span>
                            <span class="main-color">Contact</span>
                        </div>
                    </div>
                </div>
            </header>
            <!-- ==================== End Header ==================== -->

            <!-- ==================== Start Contact ==================== -->
            <section class="contact section-padding sub-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 valign">
                            <div class="sec-head md-mb80">
                                <h2 class="text-u ls1 d-rotate wow">
                                        <span class="rotate-text">Let's make your <br> brand <span class="fw-200">
                                                brilliant!</span></span>
                                </h2>
                                <p class="mt-20 mb-20">If you would like to work with us or just want to get in
                                    touch, we’d love to hear from you!</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="morinfo mt-30">
                                            <h6 class="mb-15">Address</h6>
                                            <p>Besòs 1, 08174 Sant Cugat del Vallès, Barcelona</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="morinfo mt-30">
                                            <h6 class="mb-15">Email</h6>
                                            <p>Support@uithemez.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="phone fz-30 fw-600 mt-30 underline main-color">
                                    <a href="#0">+1 840 841 25 69</a>
                                </div>
                                <ul class="rest social-text d-flex mt-60">
                                    <li class="mr-30">
                                        <a href="#0" class="hover-this"><span class="hover-anim">Facebook</span></a>
                                    </li>
                                    <li class="mr-30">
                                        <a href="#0" class="hover-this"><span class="hover-anim">Twitter</span></a>
                                    </li>
                                    <li class="mr-30">
                                        <a href="#0" class="hover-this"><span class="hover-anim">LinkedIn</span></a>
                                    </li>
                                    <li>
                                        <a href="#0" class="hover-this"><span
                                                class="hover-anim">Instagram</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-1 valign">
                            <div class="full-width">
                                <div class="sec-head mb-50">
                                    <h3 class="text-u ls1">Send a <span class="fw-200">message</span></h3>
                                </div>
                                <form id="contact-form" method="post" action="https://ui-themez.smartinnovates.net/items/infolio/Infolio/contact.php">

                                    <div class="messages"></div>

                                    <div class="controls row">

                                        <div class="col-lg-6">
                                            <div class="form-group mb-30">
                                                <input id="form_name" type="text" name="name" placeholder="Name"
                                                       required="required">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group mb-30">
                                                <input id="form_email" type="email" name="email" placeholder="Email"
                                                       required="required">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group mb-30">
                                                <input id="form_subject" type="text" name="subject"
                                                       placeholder="Subject">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                    <textarea id="form_message" name="message" placeholder="Message"
                                                              rows="4" required="required"></textarea>
                                            </div>
                                            <div class="mt-30">
                                                <button type="submit" class="butn butn-full butn-bord radius-30">
                                                    <span class="text">Let's Talk</span>
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ==================== End Contact ==================== -->

        </main>

        <!-- ==================== Start Footer ==================== -->
        <?php include('footer.php') ?>
        <!-- ==================== End Footer ==================== -->

    </div>

</div>
<?php include('js.php') ?>
</body>
</html>