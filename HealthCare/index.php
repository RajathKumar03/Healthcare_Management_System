<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="project.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>HOME PAGE</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body style="background-image:url(assets/Home-page.jpg) ; background-size:cover;background-repeat:no-repeat; background-attachment:fixed">

    <style>
        .bottom {
            position: absolute;
            bottom: 45;
        }
        .card:hover {
            transform: scale(1.2);
            opacity: 80%;
            background-color: cadetblue;
            border: 4px solid cadetblue;
            /* background-image: linear-gradient( rgb(149, 219, 254) 0%, rgb(7, 134, 197) 90.1%,lightblue); */
        }

        .card {
            transition: all .5s ease-in-out;
            border: 1px solid;
            background-color: lightgray;
            border: 2px solid cadetblue;
        }

        .card-body {
            background-image: linear-gradient(rgb(149, 219, 254) 0%, rgb(7, 134, 197) 90.1%, lightblue);
            border-top: 1px solid cadetblue;
        }

        
    </style>



    <nav class="navbar navbar-light " id="grad">
        <a class="navbar-brand d-flex" href="index.php"> &nbsp;&nbsp;&nbsp;
            <img src="assets/logo.png" width="45" height="45" class="d-inline-block align-top" alt=""> &nbsp;&nbsp;
            <h1 style="color: red;">Health Care Management System</h1>&nbsp; <img class='galleryImg' src="assets/heart.png" alt="">
        </a>
    </nav>

    <div class="text-center">
        <div class="container-fluid bottom ">
            <div class="row ">
                <div class="col-md-4" data-aos="zoom-in-up" data-aos-duration="2000">
                    <a style="text-decoration:none" href="patient/login.php">
                        <div class="card" style="width: 300px;">
                            <img style="border-radius: 50%; border: 1px solid cadetblue" src="assets/patient.png" height="125px" width="120px">
                            <div class="card-body">
                                <h3 class="text-light">Patient Login</h3>
                                <p class="text-danger">Register and Book Appointment</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4" data-aos="zoom-in-up" data-aos-duration="2000">
                    <a style="text-decoration:none" href="doctors/doc_login.php">
                        <div class="card" style="width: 300px;">
                            <img src="assets/doctor.png" alt="" height="125px" width="120px">
                            <div class="card-body">
                                <h3 class="text-light">Doctors Login</h3>
                                <p class="text-danger">For Doctors only</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4" data-aos="zoom-in-up" data-aos-duration="2000">
                    <a style="text-decoration:none" href="admin/adminlogin.php">
                        <div class="card" style="width: 300px;">
                            <img src="assets/admin.png" alt="" height="125px" width="120px">
                            <div class="card-body">
                                <h3 class="text-light">Admins Login</h3>
                                <p class="text-danger">For Admin only</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>

</html>