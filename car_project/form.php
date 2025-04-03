<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Car Service Appointment</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f0f2f5;
        }

        .container {
            margin-top: 5rem;
        }
    </style>
</head>

<body>
    <div class="container text-center">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Launch Car Service Appointment
        </button>
    </div>

    <!-- Modal with static backdrop -->
    <div class="modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Car Service Appointment</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="fullName" placeholder="Enter your full name">
                        </div>
                        <div class="mb-3">
                            <label for="contactNumber" class="form-label">Contact Number</label>
                            <input type="tel" class="form-control" id="contactNumber"
                                placeholder="Enter your contact number">
                        </div>
                        <div class="mb-3">
                            <label for="carModel" class="form-label">Car Model</label>
                            <input type="text" class="form-control" id="carModel" placeholder="Enter your car model">
                        </div>
                        <div class="mb-3">
                            <label for="appointmentDate" class="form-label">Preferred Appointment Date</label>
                            <input type="date" class="form-control" id="appointmentDate">
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html> <!-- <div class="modal" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1"
aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

        <div class="modal-header">
            <h1 class="modal-title head" id="staticBackdropLabel">Service Appointment</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>

        <div class="modal-body">
            <form>
                <div class="mb-3">
                    <input type="text" class="form-control" id="first_name" required
                        placeholder="first name">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="last_name" required
                        placeholder="last name">
                </div>
                <div class="mb-3">
                    <input type="tel" class="form-control" id="contactNumber" required
                        placeholder="contact number">
                </div>
                <div class="mb-3">
                    <select class="form-select" id="carCategory">
                        <option selected disabled id="car">select car type</option>
                        <option value="sedan">Sedan</option>
                        <option value="suv">SUV</option>
                        <option value="hatchback">Hatchback</option>
                        <option value="coupe">Coupe</option>
                        <option value="convertible">Convertible</option>
                        <option value="minivan">Minivan</option>
                        <option value="pickup">Pickup Truck</option>
                        <option value="pickup">sport</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="mb-3">
                    <input type="date" class="form-control" id="Date">
                </div>
            </form>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn">Submit</button>
        </div>

    </div>
</div>
</div>




  <div class=" text-center">
                    <button type="button" class="modal_btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        book an Appointment
                    </button>
                </div>