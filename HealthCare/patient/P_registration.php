<?php
include('../include/dbconnect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Registration</title>
    <link rel="stylesheet" href="../project.css">
    </link>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <style>
        body {
            background-image: url(../assets/background_reg.png);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            padding: auto;
            text-decoration: solid;
            scroll-margin-block-end: 0;
            scroll-margin-block-start: 0;
            scroll-behavior: smooth;
        }

        .card {
            margin-left: auto;
            margin-right: auto;
            background-image: radial-gradient(lightcyan, beige);
        }

        .card-header {
            background-image: lightcyan;
            opacity: 50;
            color: steelblue;
        }
    </style>

    <nav class="navbar navbar-light " id="grad">
        <a class="navbar-brand d-flex" href="../index.php"> &nbsp;&nbsp;&nbsp;
            <img src="../assets/logo.png" width="45" height="45" class="d-inline-block align-top" alt=""> &nbsp;&nbsp;
            <h1 style="color: red;">Health Care Management System </h1>&nbsp; <img class='galleryImg' src="../assets/heart.png" alt="">
        </a>
        <a href="../index.php"><i class="fa fa-2x fa-cog fa-sign-out" aria-hidden="true"></i></a>
    </nav>


    <form>

        <br><br>
        <div class="container mt-3">
            <div class="row">
                <div class="card col-md-8">
                    <div class="card-header">
                        <h1 class="text-center">HMS | Registration Form</h1>
                    </div>
                    <div class="card-body">
                        <form action="submit_registration.php">
                            <div class="mt-4">
                                <h4>Enter your personal details below</h4>
                                <hr>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter your first name" required>
                                </div>
                                <div class="form-group mt-4">
                                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter your last name" required>
                                </div>
                                <div class="form-group mt-4">
                                    <textarea class="form-control" id="address" name="address" rows="2" placeholder="Address" required></textarea>
                                </div>
                                <div class="form-group mt-4">
                                    <label for="dob">Date of Birth:</label>
                                    <input type="date" class="form-control" id="dob" name="dob" required>
                                </div>
                                <div class="form-group mt-4">
                                    <label for="aadhar">Aadhar no:</label>
                                    <input type="number" class="form-control" id="aadhar" name="aadhar" placeholder="Enter your Aadhar Number" minlength="12" maxlength="12" required>
                                </div>
                                <div class="form-group">
                                    <br>
                                    <label>Gender:</label>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="male" name="gender" value="Male" required>
                                        <label class="form-check-label" for="male">Male</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="female" name="gender" required value="Female">
                                        <label class="form-check-label" for="female">Female</label>
                                    </div>
                                    <br>
                                </div>
                            </div>

                            <div class="mt-2">
                                <h4>Enter your account details below</h4>
                                <hr>
                            </div>
                            <input type="email" placeholder="Enter your email" name="gmail" id="gmail" required minlength="10">
                            <br>
                            <input class="mt-3" type="password" placeholder="Password" id="password" name="password" rows="1" required minlength="6">
                            <br>
                            <input class="mt-3" type="password" id="confirm_password" name="confirm_password" rows="1" required placeholder="Confirm Password" minlength="6"></input>
                            <hr>
                            <div class="text-center">
                                <p>Already have an account? <a href="../patient/login.php">Login here</a></p>
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn btn-primary" value="Submit" name="submit">
                            </div>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
            <br><br><br>
        </div>
    </form>


    <script>
        var password = document.getElementById("password"),
            confirm_password = document.getElementById("confirm_password");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>


    <?php
    // include('include/dbconnect.php');
    //session_start();

    //taking all values from the form data(input)

    // print_r($_REQUEST);
    if (isset($_REQUEST['submit'])) {
        $firstname = $_REQUEST['firstName'];
        $lastname = $_REQUEST['lastName'];
        $address = $_REQUEST['address'];
        $dob = $_REQUEST['dob'];
        $gender = $_REQUEST['gender'];
        $gmail = $_REQUEST['gmail'];
        $password = $_REQUEST['password'];
        $aadhar = $_REQUEST['aadhar'];
        $sql = "INSERT INTO users(`fname`, `lname`, `address`, `dob`, `gender`, `aadhar`) VALUES ('$firstname','$lastname','$address','$dob','$gender','$aadhar')";
        $sql1 = "INSERT INTO `user_log`(`aadhar`, `gmail`, `password`) VALUES ('$aadhar','$gmail','$password')";

        // echo $sql;
        // exit();

        if (mysqli_query($conn, $sql)) {
            if (mysqli_query($conn, $sql1)) {
                echo "<script> alert('data added succesfully')
                    window.location.href='P_registration.php'</script>";
            } else {
                echo "<script> alert('data not inserted')
                    window.location.href='P_registration.php'</script>";
            }
        } else {
            echo "<script> alert('data not inserted')
                    window.location.href='P_registration.php'</script>";
        }
    }


    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</html>