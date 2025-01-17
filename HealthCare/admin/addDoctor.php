<?php
include('../include/dbconnect.php');
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../project.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Doctors</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <style>
        body {
            background-image: url('../assets/doc-details.avif');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .card {
            width: 800px;
            height: 880px;
        }
    </style>
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

    <nav class=" navbar navbar-light" id="grad">
        <a class="navbar-brand d-flex" href="../index.php"> &nbsp;&nbsp;&nbsp;
            <img src="../assets/logo.png" width="45" height="45" class=" align-top" alt=""> &nbsp;&nbsp;
            <h1 style="color: red;">Health Care Management System </h1>&nbsp; <img class='galleryImg' src="../assets/heart.png" alt="">
        </a>
        <a href="../index.php"><i class="fa fa-2x fa-cog fa-sign-out" aria-hidden="true"> </i></a>
    </nav>

    <div class="card mt-5" style="background-image: url('../assets/doc_card.avif');background-repeat: no-repeat;background-size:cover;">
        <h2 class="text-center mt-3 text-primary">DOCTORS REGISTRATION</h2>
        <hr>
        <div class="container">
            <form action="" class="ml-2 ">
                <label for="doc_name">Name :</label>&nbsp;
                <input type="text" class="form-control" name="doc_name" required placeholder="Enter your name">
                <input type="text" class="form-control mt-1" name="doc_id" required placeholder="Doctors ID">
                <input type="text" class="form-control mt-1" name="doc_spec" required placeholder="Doctors Specialization">
                <br>
                <label for="address" class="mt-2">Address </label>&nbsp;
                <textarea class="form-control" id="address" name="address" rows="2" placeholder="Address" required>Address</textarea>
                <br>
                <label for="fee">Consultation Fee :</label>
                <input type="number" name="fee" required placeholder="in ₹Rupees">
                <br><br>
                <label>Gender:</label>
                <div class="d-flex">
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="male" name="gender" value="Male" required>
                        <label class="form-check-label" for="male">Male</label> &nbsp;
                    </div>
                    <div class="form-check ">
                        <input type="radio" class="form-check-input" id="female" name="gender" required value="Female">
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                </div><br>
                <label for="phone">Phone Number :</label>
                <input class="mt-2" type="number" name="phone" rows="1" placeholder="Phone Number" required minlength="10" maxlength="10"><br>
                <label for="qual">Qualification   :&nbsp;&nbsp;</label>&nbsp;&nbsp;
                <input class="mt-2 " type="text" name="qual" rows="1" placeholder="Qualification" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="exp">Experience :</label>
                <input class="mt-2" type="text" name="exp" rows="1" placeholder="Experience (in years)" required >
                <hr>
                <input class="form-control" class="mt-2" type="email" name="Email" rows="1" placeholder="Email" required minlength="10">
                <br>
                <input class="form-control" class="mt-3" type="password" placeholder="Password" id="password" name="password" rows="1" required minlength="6">
                <br>
                <input class="form-control" class="mt-3" type="password" id="confirm_password" name="confirm_password" rows="1" required placeholder="Confirm Password" minlength="6"></input>
                <hr>
                <div class="text-center">
                    <input type="submit" class="btn btn-primary" value="Submit" name="submit">
                </div>
            </form>
        </div>
    </div>
    <br><br><br>

    <?php
    if (isset($_REQUEST['submit'])) {
        $dname = $_REQUEST['doc_name'];
        $did = $_REQUEST['doc_id'];
        $dspec = $_REQUEST['doc_spec'];
        $address = $_REQUEST['address'];
        $fee = $_REQUEST['fee'];
        $phone = $_REQUEST['phone'];
        $gender = $_REQUEST['gender'];
        $qual = $_REQUEST['qual'];
        $exp = $_REQUEST['exp'];

        $sql = "INSERT INTO `doctors`(`doc_id`,`doc_name`,`address`,`gender`,`fees`,`d_phone`) VALUES ('$did','$dname','$address','$gender','$fee','$phone')";
        $docid = $_REQUEST['doc_id'];
        $sql1 = "INSERT INTO `doc_specialization`(`doc_id`, `doc_spec`,`qualification`, `experiencce`) VALUES ('$docid','$dspec','$qual','$exp')";
        $doctorid = $_REQUEST['doc_id'];
        $email = $_REQUEST['Email'];
        $password = $_REQUEST['password'];
        $sql2 = "INSERT INTO `doctor_log`(`doc_id`, `d_email`, `password`) VALUES ('$doctorid','$email','$password')";

        // echo $sql;
        // exit();

        if (mysqli_query($conn, $sql)) {
            if (mysqli_query($conn, $sql1)) {
                if (mysqli_query($conn, $sql2)) {
                    echo "<script> alert('data added succesfully')
        window.location.href='addDoctor.php'</script>";
                } else {
                    echo "<script> alert('data not inserted')
        window.location.href='addDoctor.php'</script>";
                }
            }
        }
    }
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>