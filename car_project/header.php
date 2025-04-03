 <?php include('connection.php'); ?>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Car Service Management</title>

 <!--font-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
     integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />

 <!--bootstrap css/js file-->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
     crossorigin="anonymous"></script>

 <!--model link-->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
 <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
 <!-- Main CSS File -->
 <link rel="stylesheet" href="css/style.css">


 </head>

 <body class="index-page">


     <!--header section with navbar-->
     <header class="header fixed-top" id="header">
         <nav class="navbar navbar-expand-lg bg-transparent">
             <div class="container">
                 <a class="navbar-brand" href="index.php">
                     <img class="header_logo text-white" src="images/car-service-management-logo.png" alt="logo">
                 </a>
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                     data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                     aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                         <li class="nav-item">
                             <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" id="about" href="about.php">about us</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" id="services" href="services.php">services</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" id="select" href="select.php">select</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" id="contact" href="contact.php">contact us</a>
                         </li>
                     </ul>
                 </div>

                 <!--modal-->
                 <div class="model text-center">
                     <button type="button" class="modal_btn" data-bs-toggle="modal" data-bs-target="#staticBackdro">
                         book an Appointment
                     </button>
                 </div>

             </div>
         </nav>
     </header>

     <main class="main">