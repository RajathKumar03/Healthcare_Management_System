<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../project.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body style="background-image: url(../assets/login_back.jpg); background-size:cover;background-repeat:no-repeat; background-attachment:fixed">

    <style>
        label,
        h3 {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        .card {
            background-image: linear-gradient(to bottom right, lightblue, beige);
            border: 1px solid green;
        }

        .card:hover {
            background-color: lightblue;
            background-size: contain;
            height: 800px;
        }
    </style>

    <nav class="navbar navbar-light " id="grad">
        <a class="navbar-brand d-flex" href="../index.php"> &nbsp;&nbsp;&nbsp;
            <img src="../assets/logo.png" width="45" height="45" class="d-inline-block align-top" alt=""> &nbsp;&nbsp;
            <h1 style="color: red;">Health Care Management System </h1>
        </a>
        <a href="../index.php"><i class="fa fa-2x fa-cog fa-sign-out" aria-hidden="true"></i></a>
    </nav>


    <br><br><br>
    <div class="container">
        <div class="card text-center" style=" height: 600px; width: 450px;" data-aos="zoom-in-up" data-aos-duration="2000">
            <div class="class-body">
                <div class="row">
                    <div class="">
                        <br>
                        <h2> HMS | Patient Login</h2>
                        <div>
                            <img src="../assets/login.png" alt="" height="150px" width="150px">
                            <form name="f1" action="../patient/user_authentication.php" onsubmit="return validation()" method="POST">
                                <fieldset>
                                    <legend>
                                        <br>
                                        Sign in to your account
                                    </legend>
                                    <p>
                                        Please enter your name and password to log in.<br />

                                    </p>
                                    <div class="form-group">
                                        <label for="">Enter Gmail:</label>
                                        <input type="text" placeholder="Enter Username" id="user" name="user">
                                    </div>
                                    <div class="form-group form-actions mt-2">
                                        <label for=""> Password :&nbsp;</label>
                                        <input type="password" name="pass" placeholder="Password" id="pass">
                                        <br><br>

                                    </div>
                                    <div class="form-actions mt-3">

                                        <button type="submit" class="btn btn-primary" name="submit"> Login<i class="fa fa-arrow-circle-right"></i>
                                        </button>
                                    </div>
                                    <br>
                                    <div>
                                        Don't have an account yet?
                                        <a href="P_registration.php">
                                            Create an account
                                        </a>
                                    </div>
                                </fieldset>
                            </form>
                            <br><br><br>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();

        function validation() {
            var id = document.f1.user.value;
            var ps = document.f1.pass.value;
            if (id.length == "" && ps.length == "") {
                alert("User Name and Password fields are empty");
                return false;
            } else {
                if (id.length == "") {
                    alert("User Name is empty");
                    return false;
                }
                if (ps.length == "") {
                    alert("Password field is empty");
                    return false;
                }
            }
        }
    </script>
</body>

</html>