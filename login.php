<?php include 'includes/header.php'; ?>

<link rel="stylesheet" href="css/front-pages.css">

<div class="login-page">

    <div class="container">
        <div class="row">

            <div class="col-lg-6 d-none d-lg-block">
                <div class="login-content">
                    <div class="carousel">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="slide-text">
                                    <div class="slide-title">
                                        Reach People
                                    </div>
                                    <div class="slide-desc">
                                        Targeted Communication, Emailing & Newsletter, Direct Message, SMS
                                    </div>
                                </div>
                                <div class="img-overlay"></div>
                                <img src="img/login-slide-1.jpg">
                            </div>
                            <div class="item">
                                <div class="slide-text">
                                    <div class="slide-title">
                                        Reach People
                                    </div>
                                    <div class="slide-desc">
                                        Targeted Communication, Emailing & Newsletter, Direct Message, SMS
                                    </div>
                                </div>
                                <div class="img-overlay"></div>
                                <img src="img/login-slide-2.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="desc">
                        <p>Duis vel nunc ut turpis condimentum condimentum. Donec ut tincidunt sapien. Sed consectetur finibus nibh, vel pharetra lectus vulputate at.</p>

                        <p>Duis sed quam sagittis, vulputate turpis ut, auctor augue. Donec cursus erat non neque porta, vitae finibus odio suscipit. Nam vitae tristique diam. Maecenas ex leo, suscipit a leo vel, interdum sollicitudin enim. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>

                        <p>Sed sed sapien a lectus ornare sagittis ut a ex. Ut non fermentum nisi. Phasellus pharetra maximus sem id placerat.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="login-form">

                    <div class="language">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="flag"><img src="img/lang-eng.png"></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item list-items active" href="#">
                                <div class="country-flag"><img src="img/lang-eng.png"></div>
                                <div class="message">
                                    <div class="name">English</div>
                                </div>
                            </a>

                            <a class="dropdown-item list-items" href="#">
                                <div class="country-flag"><img src="img/lang-fra.png"></div>
                                <div class="message">
                                    <div class="name">Francais</div>
                                </div>
                            </a>

                            <a class="dropdown-item list-items" href="#">
                                <div class="country-flag"><img src="img/lang-por.png"></div>
                                <div class="message">
                                    <div class="name">Portugues</div>
                                </div>
                            </a>

                            <a class="dropdown-item list-items" href="#">
                                <div class="country-flag"><img src="img/lang-ita.png"></div>
                                <div class="message">
                                    <div class="name">Italiano</div>
                                </div>
                            </a>

                            <a class="dropdown-item list-items" href="#">
                                <div class="country-flag"><img src="img/lang-rus.png"></div>
                                <div class="message">
                                    <div class="name">Russian</div>
                                </div>
                            </a>

                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-10 col-md-6">
                            <div class="row justify-content-center">
                                <a href="" class="logo">
                                    <img src="img/digitalebox-logo.png">
                                </a>
                            </div>

                            <form>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                    <small id="emailHelp" class="form-text text-error">Error message goes here</small>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary signin-btn">Sign In</button>

                                <div class="form-group">
                                    <div class="form-check" id="forgot-pass">
                                        <label class="form-check-label" for="defaultCheck1">
                                            <a href="forgot-pass.php">Forgot Password</a>
                                        </label>
                                    </div>
                                </div>

                            </form>

                            <div class="social-signin row justify-content-center">
                                <div class="social-link"><a id="tw" href=""><i class="fa fa-twitter"></i></a></div>
                                <div class="social-link"><a id="fb" href=""><i class="fa fa-facebook"></i></a></div>
                                <div class="social-link"><a id="in" href=""><i class="fa fa-linkedin"></i></a></div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="signup-link">
                                    Need a new account? <span><a href="register-promo.php">Sign Up</a></span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

</div>

<?php include 'includes/footer.php'; ?>

<script>
    $(document).ready(function () {

        $('.owl-carousel').owlCarousel({
            items: 1,
            loop:true,
            margin:10,
            nav:true,
            navText:['<i class="fa fa-long-arrow-left"></i>','<i class="fa fa-long-arrow-right"></i>'],
            //autoplay: true,
            //autoplayTimeout: 5000
        })

    });
</script>
