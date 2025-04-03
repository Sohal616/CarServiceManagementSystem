<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        #contact::before {
            transform: scale(1);
        }
    </style>
    <meta charset="UTF-8">
    <?php include('header.php'); ?>


    <!--contact-->
    <section class="contact" id="contact">
        <img src="images/pexels-alex-andrews-271121-821754.jpg" class="img-fluid" alt="">
        <div class="container">
            <h1>contact us</h1>
            <p>We're here to help and answer any questions you might have.</p>

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


    <!--contact form-->
    <section class="contact_form" id="contact_form">
        <div class="container">
            <div class="row gy-4">

                <div class="col-lg-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d108145.60518880324!2d-79.7954965358775!3d43.72792803806862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b15eaa5d05abf%3A0x352d31667cc38677!2sBrampton%2C%20ON%2C%20Canada!5e1!3m2!1sen!2sin!4v1743058295796!5m2!1sen!2sin"
                        width="500" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="col-lg-6">
                    <div class="item" id="item">
                        <h3>CONTACT US FOR ANY QUESTIONS</h3>
                        <h2>Get In Touch</h2>

                        <form action="contact.php" method="post" class="php-email-form mt-5"
                            data-aos="fade-up" data-aos-delay="500">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="fname" id="fname" class="form-control"
                                        placeholder="First Name" required="">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="lname" id="lname" class="form-control"
                                        placeholder="Last Name" required="">
                                </div>

                                <div class="col-md-12">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" id="message" rows="7" placeholder="Message"
                                        required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">


                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php

    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "carproject";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if form data is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO contact_us (fname, lname, email, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $fname, $lname, $email, $message);

        // Execute and check
        if ($stmt->execute()) {
            echo "Data inserted successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }

    $conn->close();
    ?>









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
    <?php include('footer.php') ?>

    </body>

</html>