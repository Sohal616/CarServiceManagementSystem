<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <div class="container">
        <form action="demo.php" method="post" class="php-email-form mt-5"
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
</body>

</html>