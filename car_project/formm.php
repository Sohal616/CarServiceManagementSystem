 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 </head>

 <body>
     <nav class="navbar navbar-expand-lg bg-body-tertiary">
         <div class="container-fluid">
             <a class="navbar-brand" href="#">Navbar</a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     <li class="nav-item">
                         <a class="nav-link active" aria-current="page" href="#">Home</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="#">Link</a>
                     </li>
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                             Dropdown
                         </a>
                         <ul class="dropdown-menu">
                             <li><a class="dropdown-item" href="#">Action</a></li>
                             <li><a class="dropdown-item" href="#">Another action</a></li>
                             <li>
                                 <hr class="dropdown-divider">
                             </li>
                             <li><a class="dropdown-item" href="#">Something else here</a></li>
                         </ul>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                     </li>
                 </ul>
                 <form class="d-flex" role="search">
                     <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                     <button class="btn btn-outline-success" type="submit">Search</button>
                 </form>
             </div>
         </div>
     </nav>

     <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $pass = $_POST['pass'];
        }




        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "carproject";

        $conn = mysqli_connect($servername, $username, $password, $database);

        if (!$conn) {
            die("sorry we failed: " . mysqli_connect_error());
        } else {
            echo "";
        }


        $sql = "INSERT INTO `users` (`email`, `password`) VALUES ('$email', '$pass')";
        $result = mysqli_query($conn, $sql);





        if ($result) {
            echo '<div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Well done!</h4>
            <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
            <hr>
            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
          </div>';
        } else {
            echo "no -->" . mysqli_error($conn);
        }
        ?>











     <div class="container mt-5">
         <form action="formm.php" method="post">
             <div class="mb-3">
                 <label for="exampleInputEmail1" class="form-label">Email address</label>
                 <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">

             </div>
             <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Password</label>
                 <input type="password" class="form-control" name="pass" id="pass">
             </div>

             <button type="submit" class="btn btn-primary">Submit</button>
         </form>
     </div>

 </body>

 </html>