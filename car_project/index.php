<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .navbar .active::before {
            transform: scale(1);
        }
    </style>
    <meta charset="UTF-8">

    <?php include('header.php'); ?>

    <?php include('hero.php'); ?>


    <!--why_choose_us-->
    <section class="why_choose_us section bg-dark" id="why_choose_us">
        <div class="container">
            <h2>Why Choose Us</h2>
            <p>We Offer Full Service Auto Repair & Maintenance</p>
            <div class="why_choose_image">
                <img src="images/asset 2.png" class="img-fluid" alt="">
                <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-html="true"
                    data-bs-title=" <h6>Brakes</h6> <p>
The brake system consists of different parts that can be fixed individually. A detailed quote is given to you after we perform our systematic brake evaluation.</p>">

                    <i class="fa-solid fa-info"></i>
                </button>

                <button type="button" class="btn_2 btn-secondary" data-bs-toggle="tooltip" data-bs-html="true"
                    data-bs-title=" <h6>Suspension</h6> <p>
The suspension system of your vehicle protects you from bouncing up and down due to the adverse road conditions and bumps. Our professionals can detect problems arising due to suspension like unusual noises.</p>">
                    <i class="fa-solid fa-info"></i>
                </button>

                <button type="button" class="btn_3 btn-secondary" data-bs-toggle="tooltip" data-bs-html="true"
                    data-bs-title=" <h6>Diagnostics</h6> 
                        <p>if your car needs a mobile diagnostic check done at your home or office, let AutoMechanic a come to you</p>">
                    <i class="fa-solid fa-info"></i>
                </button>


                <button type="button" class="btn_4 btn-secondary" data-bs-toggle="tooltip" data-bs-html="true"
                    data-bs-title=" <h6>Dent & Paint</h6> <p>
AutoMechanica specializes in car dent repair and car painting services for a range of models.</p>">
                    <i class="fa-solid fa-info"></i>
                </button>

                <button type="button" class="btn_5 btn-secondary" data-bs-toggle="tooltip" data-bs-html="true"
                    data-bs-title=" <h6>Detailing</h6> <p>
AutoMechanica offers professional car detail services at an affordable price. Our interior cleaning, detailing, and restoration services can help you recapture that new car look and smell.</p>">
                    <i class="fa-solid fa-info"></i>
                </button>
            </div>
        </div>
    </section>


    <!--details section-->
    <?php include('details.php'); ?>



    <!--mechanica advantages-->
    <?php include('mechanica_advantages.php'); ?>



    <!--stats section-->
    <section class="stats section" id="stats">
        <div class="container">
            <h2>we are at</h2>
            <div class="row gy-4">

                <div class="col-lg-4 col-md-4">
                    <div class="stats-item">
                        <div class="image">
                            <img src="images/asset 9.svg" class="img-fluid" alt="">
                        </div>
                        <div class="body">
                            <div class="stat-number" id="clients">0</div>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Satisfied Customers</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-4">
                    <div class="stats-item">
                        <div class="image">
                            <img src="images/asset 10.svg" class="img-fluid" alt="">
                        </div>
                        <div class="body">
                            <div class="stat-number" id="products">0</div>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Customer Jobs</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-4">
                    <div class="stats-item">
                        <div class="image">
                            <img id="eye" src="images/asset 11.svg" class="img-fluid" alt="">
                        </div>
                        <div class="body">
                            <div class="stat-number" id="hours-of-support">0</div>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Years Of Collective Experience</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!--testimonials-->
    <?php include('testimonials.php') ?>




    <!--doorstep-->
    <?php include('doorstep.php') ?>


    <!--FAQs-->
    <?php include('faq.php') ?>




    <!--brands_we_serve-->
    <section class="brands_we_serve section bg-dark" id="brand_we_serve">
        <div class="container">
            <h2>Brands We Serve</h2>
            <div class="swiper brand_serve">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="images/asset 24.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/asset 31.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/asset 25.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/asset 26.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/asset 27.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/asset 28.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/asset 29.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/asset 30.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/asset 32.png" class="img-fluid" alt="">
                    </div>

                </div>
            </div>
        </div>
    </section>

    </main>

    <!--footer-->
    <?php include('footer.php'); ?>

    </body>

</html>