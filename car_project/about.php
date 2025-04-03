<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        #about::before {
            transform: scale(1);
        }
    </style>
    <meta charset="UTF-8">
    <?php include('header.php'); ?>



    <!--about section-->
    <section class="about" id="about">
        <img src="images/pexels-cottonbro-4489721.jpg" class="img-fluid" alt="">
        <div class="container">
            <h1>about us</h1>
            <p>Driving excellence in car care with innovative
            </p>
            <p> stress-free service solutions tailored to your needs.
            </p>

            <svg class="hero_waves text-white" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none">
                <defs>
                    <path id="wave-path"
                        d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
                    </path>
                </defs>
                <g class="wave1">
                    <use xlink:href="#wave-path" x="50" y="3"></use>
                </g>
                <g class="wave2">
                    <use xlink:href="#wave-path" x="50" y="0"></use>
                </g>
                <g class="wave3">
                    <use xlink:href="#wave-path" x="50" y="9"></use>
                </g>
            </svg>
        </div>
    </section>


    <!--about customize-->
    <section class="about_customize" id="about_customize">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="img_item">
                        <div class="image">
                            <img src="images/about_c.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="img_2">
                            <img src="images/about_c (2).jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="content">
                        <h2>Customize your ride with our expert services today!</h2>
                        <p>Customer satisfaction is the core of all initiatives at AutoMechanica. Online appointment
                            scheduling with door-step, same day pick-up and drop anywhere in Pune is our constant
                            endeavor to maximize customer convenience. Our commitment stands for reliability and
                            unequalled professionalism to provide dealer quality auto-service at a fair price. </p>
                        <p>AutoMechanica’s mission is to enable premium quality care for your luxury car service at
                            affordable pricing . We ensure real time updates for complete car care needs with a fair
                            and transparent pricing mechanism.</p>
                        <a href="services.php" class="btn">services</a>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <!--about testimonials-->
    <section class="about_testimonials" id="about_testimonials">
        <img src="images/car.jpg" alt="">
        <div class="container">
            <!-- <h2>Our clients say</h2> -->
            <div class="swiper testimonials_about">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">

                        <h3>tejpreet singh</h3>
                        <h5>brampton</h5>
                        <p><span><i class="fa-solid fa-quote-left"></i></span>I can book services, track repairs,
                            and get reminders—all in one place. My car's maintenance has never been this
                            stress-free. The website is easy to use and saves me so much time. I absolutely
                            recommend it to every car owner! <span><i class="fa-solid fa-quote-right"></i></span>
                        </p>
                        <div class="star">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i>
                        </div>
                        <div class="image">
                            <img src="images/users-removebg-preview.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <h3>noah daniels</h3>
                        <h5>ames, IA</h5>
                        <p><span><i class="fa-solid fa-quote-left"></i></span>I love how I can stay on top of my
                            car's health with just a few clicks. The reminders for maintenance are super helpful.
                            Plus, their team is always ready to assist if needed. This website is a
                            lifesaver!<span><i class="fa-solid fa-quote-right"></i></span></p>
                        <div class="star">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i>
                        </div>
                        <div class="image">
                            <img src="images/users-removebg-preview.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <h3>kenneth grant</h3>
                        <h5>phoenix, AZ</h5>
                        <p><span><i class="fa-solid fa-quote-left"></i></span> Managing my car’s servicing has
                            become so convenient with this tool. The intuitive design makes it easy to navigate and
                            schedule appointments. I always stay updated with my car’s condition. Highly recommended
                            for busy car owners!<span><i class="fa-solid fa-quote-right"></i></span></p>
                        <div class="star">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i>
                        </div>
                        <div class="image">
                            <img src="images/users-removebg-preview.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <h3>alexis parker</h3>
                        <h5>hobbs, NM</h5>
                        <p><span><i class="fa-solid fa-quote-left"></i></span>With this service, I know exactly when
                            my car needs attention. It's like having a personal manager for my vehicle. Everything
                            from booking to updates is so efficient. I can’t imagine going back to the old way of
                            managing car maintenance! <span><i class="fa-solid fa-quote-right"></i></span></p>
                        <div class="star">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i>
                        </div>
                        <div class="image">
                            <img src="images/users-removebg-preview.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
    </section>



    <!--about_services-->
    <section class="about_service bg-light" id="about_service">
        <div class="container">
            <h2>about us</h2>
            <p>Our team is dedicated to delivering exceptional quality,</p>
            <p>ensuring timely delivery, and fostering
                lasting partnerships.</p>
            <div class="row gy-4">

                <div class="col-lg-3">
                    <div class="image">
                        <a href="services.php"> <img src="images/dent.jpg" class="img-fluid" alt="">
                            <h5>Dent & Paint</h5>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="image">
                        <a href="services.php"> <img src="images/breaks.jpg" class="img-fluid" alt="">
                            <h5>breaks</h5>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="image">
                        <a href="services.php"> <img src="images/suspension_2.jpg" class="img-fluid" alt="">
                            <h5>suspension</h5>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="image">
                        <a href="services.php"> <img src="images/detailing.jpg" class="img-fluid" alt="">
                            <h5>detailing</h5>
                        </a>
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