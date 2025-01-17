<html lang="en">
<?php include_once('../include/dbconnect.php') ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../project.css">
    <!-- <link rel="stylesheet" href="../style1.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <style>
        body {
            background-image: url(../assets/3383078.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            min-height: 0%;
        }

        .card {
            opacity: 70%;
            width: 450px;
            height: 320px;
            align-items: center;
            text-align: center;
            border: 4px solid paleturquoise;
        }

        .card:hover {
            transform: scale(1.1);
            transition: ease-in-out;
            transition-duration: .1s;
            opacity: 100%;
        }

        label {
            color: antiquewhite;
            font-size: larger;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
    </style>
    <script>
        // function check(form) {

        //     if ((form.userid.value == "admin" && form.pwd.value == "HMS@123") || (form.userid.value == "admin1" && form.pwd.value == "12345")) {
        //         return true;
        //     } else {
        //         alert("Incorrect Username or Password")
        //         return false;
        //     }
        // }
    </script>
    <?php
    include('../include/dbconnect.php');

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['pwd'];

        $sql = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");
        $no = mysqli_num_rows($sql);
        if ($no > 0) {
            $data = mysqli_fetch_assoc($sql);
            if ($data['password'] == $password) {
                echo "<script> alert('Login Successfull')
                window.location.href='admin_page.html'</script>";

            } else {
                echo "<script> alert('Incorrect Password')
                    window.location.href='adminlogin.php'</script>";
            }
        }
        else{
            echo "<script> alert('Username not found')
                    window.location.href='adminlogin.php'</script>";
        }
        $conn->close();
    }

    ?>


    <nav class=" navbar navbar-light container-fluid" id="grad">
        <a class="navbar-brand d-flex" href="../index.php"> &nbsp;&nbsp;&nbsp;
            <img src="../assets/logo.png" width="45" height="45" class="d-inline-block align-top" alt=""> &nbsp;&nbsp;
            <h1 style="color: red;">Health Care Management System </h1>&nbsp; <img class='galleryImg' src="../assets/heart.png" alt="">
        </a>
        <a href="../index.php"><i class="fa fa-2x fa-cog fa-sign-out" aria-hidden="true"> </i></a>
    </nav>
    <br><br><br><br>

    <br><br><br><br>
    <div class="card mt-5" style="background-color: transparent;" data-aos="flip-right" data-aos-duration="2000">
        <h1 class="mt-3" style="color: rgb(57, 57, 239);"> <img style="border-radius: 50%;" src="../assets/icons8-male-user.gif" alt="">&nbsp; Admin Login
        </h1>
        <hr>

        <form action="" method="POST">
            <label for="userid">Username:</label>&nbsp;&nbsp;
            <input type="text" id="name" name="username" placeholder="Enter your Username" required>
            <br><br>
            <label for="password">Password:</label>&nbsp;&nbsp;
            <input type="password" id="password" name="pwd" placeholder="Enter your Password" required>
            <br><br>

            <div class="mt-4">
                <input type="submit" value="Login" name="submit" class="btn btn-success">
            </div>
        </form>

    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>