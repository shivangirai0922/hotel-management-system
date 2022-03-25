<?php ob_start(); ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rai's Hotel</title>

        <?php include_once('includes/header.php'); ?>
        
    </head>
    <body class="bg-white">
        <?php include_once('includes/navbar-home.php'); ?>

        <!-- hero -->
        <div class="w-100" id="banner">
            <div id="banner-carousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#banner-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#banner-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#banner-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item h-100 active" data-bs-interval="2000" style="background: url(./assets/img/carousel-1.jpg);">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item h-100" data-bs-interval="2000" style="background: url(./assets/img/carousel-2.jpg);">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item h-100" data-bs-interval="2000" style="background: url(./assets/img/carousel-3.jpg);">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#banner-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#banner-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- hero -->

        <!-- about -->
        <section class="section py-5" id="about">
            <div class="container py-4">
                <h2 class="section-title w-100 text-center fs-1 fw-bold mb-5"><span>About Us</span></h2>
                <div class="row">
                    <div class="col-sm-4 pb-3">
                        <img class="img-fluid w-100" src="./assets/img/about-us.jpg" />
                    </div>
                    <div class="col-sm-8 pb-3">
                        <p class="section-desc about-us-desc">
                            Lorem ipsum dolor sit amet, non constat deque eo est inter philosophos, cum summum bonum exquiritur, omnis dissensio. Si eum fecisse nisi voluptatis causa, quo modo eum tandem laturum fuisse existimas? Quem enim ardorem studii censetis fuisse in Archimede, qui dum in pulvere quaedam describit attentius, ne patriam quidem captam esse senserit? Ampulla enim sit necne sit, quis non iure optimo irrideatur, si laboret? Octavium, Marci filium, familiarem meum, confici vidi, nec vero semel nec ad breve tempus, sed et saepe et plane diu. 
                        </p>    
                        <p class="section-desc about-us-desc">
                            Nemo enim est, appetendarum. Duo Reges: constructio interrete. Atque etiam valítudinem, vires, sed etiam ipsas propter se expetemus. Ut enim, inquit, gubernator aeque peccat, si palearum navem evertit et si auri, item aeque peccat, qui parentem et qui servum iniuria verberat. Deinde concludebas summum malum esse dolorem, summum bonum voluptatem! Lucius Thorius Balbus fuit, Lanuvinus, quem meminisse tu non potes. Ut etiam contendant et elaborent, si efficere possint, ut aut non appareat corporis vitium aut quam minimum appareat? De maximma autem re eodem modo, divina mente atque natura mundum universum et eius maxima partis administrari.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- about -->

        <!-- features -->
        <section class="section bg bg-dark-blue text-white py-5" id="features">
            <div class="container py-4">
                <h2 class="section-title w-100 text-center fs-1 fw-bold mb-5"><span>Our Features</span></h2>
                <div class="row">
                    <div class="col-sm-4 d-flex justify-content-center align-items-center py-3">
                        <div class="feature-card d-block">
                            <div class="feature-card-img"><img class="img-fluid" src="./assets/img/wallet.png" /></div>
                            <div class="feature-card-title text-dark text-center fs-3 py-3 fw-bold">Affordable Price</div>
                        </div>
                    </div>
                    <div class="col-sm-4 d-flex justify-content-center align-items-center py-3">
                        <div class="feature-card d-block">
                            <div class="feature-card-img"><img class="img-fluid" src="./assets/img/medal.png" /></div>
                            <div class="feature-card-title text-dark text-center fs-3 py-3 fw-bold">Quality of Service</div>
                        </div>
                    </div><div class="col-sm-4 d-flex justify-content-center align-items-center py-3">
                        <div class="feature-card d-block">
                            <div class="feature-card-img"><img class="img-fluid" src="./assets/img/wifi.png" /></div>
                            <div class="feature-card-title text-dark text-center fs-3 py-3 fw-bold">Wifi Coverage</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- features -->

        <!-- rooms -->
        <section class="section py-5" id="rooms">
            <div class="container py-4">
                <h2 class="section-title w-100 text-center fs-1 fw-bold mb-5"><span>Explore Suites</span></h2>
                <div class="row">
                    <div class="col-sm-3 pb-4 d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img src="./assets/img/suites/suites-1.jpg" class="card-img-top" alt="">
                            <div class="card-body text-center">
                                <h5 class="card-title">Deluxe Suite</h5>
                                <p class="card-text fs-4">&#8377; 2000 / night</p>
                                <a href="./book-hotel.php?id=1" class="btn btn-outline-success">Book Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 pb-4 d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img src="./assets/img/suites/suites-3.jpg" class="card-img-top" alt="">
                            <div class="card-body text-center">
                                <h5 class="card-title card-title-alt">Grand Suite</h5>
                                <p class="card-text fs-4">&#8377; 3000 / night</p>
                                <a href="./book-hotel.php?id=2" class="btn btn-outline-danger">Book Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 pb-4 d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img src="./assets/img/suites/suites-2.jpg" class="card-img-top" alt="">
                            <div class="card-body text-center">
                                <h5 class="card-title">Luxury Suite</h5>
                                <p class="card-text fs-4">&#8377; 5000 / night</p>
                                <a href="./book-hotel.php?id=3" class="btn btn-outline-success">Book Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 pb-4 d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img src="./assets/img/suites/restaurant-1.jpg" class="card-img-top" alt="">
                            <div class="card-body text-center">
                                <h5 class="card-title card-title-alt">Restaurant</h5>
                                <p class="card-text fs-4">&#8377; 500 / hour</p>
                                <a href="./book-hotel.php?id=4" class="btn btn-outline-danger">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- rooms -->

        <?php include_once('includes/footer.php'); ?>

    </body>
</html>

<?php ob_end_flush(); ?>