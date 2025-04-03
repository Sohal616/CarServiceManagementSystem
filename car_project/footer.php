<!--footer-->
<footer class="footer" id="footer">
    <div class="container text-white">
        <div class="row gy-4">
            <div class="col-lg-3 col-md-4 footer_about">
                <a href="#" id="logo" class="logo d-flex align-items-center">
                    <img src="images/WHITE-COLOR-LOGO.png" class="img-fluid" alt="logo">
                </a>
                <div class="footer_contact pt-3">
                    <p>37 Sherwood Cres</p>
                    <p> Bellbird Park QLD 4300, brampton</p>
                    <p class="mt-3"><strong>Phone:</strong> <span>+1 (289) 821-6862</span></p>
                    <p><strong>Email:</strong> <span>info@example.com</span></p>
                </div>
                <div class="social_links d-flex mt-4">
                    <a href="https://x.com/?lang=en"><i id="tweet" class="fa-brands fa-x-twitter"></i></a>
                    <a href="https://www.facebook.com/"><i id="face_b" class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/accounts/login/?hl=en"><i id="insta_g"
                            class="fa-brands fa-instagram"></i></a>
                    <a href="https://in.linkedin.com/"><i id="link_d" class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><i class="fa-solid fa-chevron-right"></i> <a href="index.php">Home</a></li>
                    <li><i class="fa-solid fa-chevron-right"></i> <a href="about.php">About us</a></li>
                    <li><i class="fa-solid fa-chevron-right"></i> <a href="services.php">services</a></li>
                    <li><i class="fa-solid fa-chevron-right"></i> <a href="select.php">select</a></li>
                    <li><i class="fa-solid fa-chevron-right"></i> <a href="contact.php">contact us</a></li>

                </ul>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>service</h4>
                <ul>
                    <li><i class="fa-solid fa-chevron-right"></i> <a href="services.php">Periodic Maintenance</a>
                    </li>
                    <li><i class="fa-solid fa-chevron-right"></i> <a href="services.php">Dent & Paint</a></li>
                    <li><i class="fa-solid fa-chevron-right"></i> <a href="services.php">Accidental Repair</a></li>
                    <li><i class="fa-solid fa-chevron-right"></i> <a href="services.php">Brakes</a></li>
                    <li><i class="fa-solid fa-chevron-right"></i> <a href="services.php">suspension</a></li>
                    <li><i class="fa-solid fa-chevron-right"></i> <a href="services.php">detailing</a></li>
                    <li><i class="fa-solid fa-chevron-right"></i> <a href="services.php">washing</a></li>
                </ul>
            </div>

            <div class="col-lg-5 col-md-12 footer-newsletter">
                <p>AutoMechanica’s mission is to enable premium quality care for your luxury car service at
                    affordable pricing.</p>
                <p> We ensure real-time updates for complete car care needs with a fair and
                    transparent pricing mechanism.</p>
                <p>
                    we’re dedicated to keeping your car in top shape with reliable, efficient, and affordable
                    services. Whether you need regular maintenance, emergency repairs, or expert advice, our skilled
                    team has got you covered.
                </p>
                <a href="contact.php" class="btn">contact us</a>
            </div>
        </div>
    </div>
    <hr>
    <div class="container copyright text-center text-white mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">car services</strong> <span>All Rights
                Reserved</span>
        </p>
    </div>
</footer>



<!--modal-->
<div class="modal" id="staticBackdro">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h1 class="modal-title head">Service Appointment</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="index.php" method="post">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="fname" name="fname" required placeholder="first name">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="lname" name="lname" required placeholder="last name">
                    </div>
                    <div class="mb-3">
                        <input type="tel" class="form-control" id="number" name="number" required
                            placeholder="contact number">
                    </div>
                    <div class="mb-3">
                        <select class="form-select" id="car_type" name="car_type">
                            <option selected disabled id="car">select car type</option>
                            <option value="sedan">Sedan</option>
                            <option value="suv">SUV</option>
                            <option value="hatchback">Hatchback</option>
                            <option value="coupe">Coupe</option>
                            <option value="electric">electric</option>
                            <option value="pickup">sport</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <input type="date" class="form-control" name="date" id="date">
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn" id="close" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn" id="submit">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<!--modal-->


<?php


// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $number = $_POST['number'];
    $car_type = $_POST['car_type'];
    $date = $_POST['date'];


    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO appointment  (`first_name`, `last_name`, `contact_number`, `car_type`, `appointment_date`)  VALUES (?, ?, ?, ?,?)");
    $stmt->bind_param("sssss", $fname, $lname, $number, $car_type, $date);

    // Execute and check
    if ($stmt->execute()) {
        echo "";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();

?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>