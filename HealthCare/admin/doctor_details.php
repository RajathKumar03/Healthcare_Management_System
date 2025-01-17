<?php
require_once('../include/dbconnect.php');
$select = "select d.doc_id,doc_name,address,fees,d_phone,d_email from doctors d,doctor_log dl where d.doc_id=dl.doc_id order by doc_id";

$data = mysqli_query($conn, $select); {
    include("../include/dbconnect.php");
    error_reporting(0);
    $id = $_GET['doc_id'];
    $delete = mysqli_query($conn, "DELETE FROM doctors where doc_id='$id'");
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../project.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

    <style>
        table,
        th,
        tr,
        td {
            margin-left: auto;
            margin-right: auto;
            padding: auto;
            border: 2px solid gray;
            text-align: center;
            column-width: 200px;
            height: 50px;
        }

        thead {
            background-color: cadetblue;
            color: black;
        }

        tbody {
            background-color: white;
            color: darkslategrey;
        }

        thead:hover {
            background-color: cyan;
        }

        .hov:hover {
            background-color: greenyellow;
        }

        #sidebarMenu {
            width: 220px;
            background-color: rgb(100, 192, 238);
            height: 900px;
            border-right: 1px solid gray;
            position: fixed;
        }

        h6 {
            color: mistyrose;
            transition: ease-in-out;
        }

        h6:hover {
            color: aquamarine;
            transform: scale(1.1);
        }

        body {
            background-image: url(../assets/empty-hallway-background.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        nav {
            opacity: 85%;
        }

        h6:hover {
            color: aquamarine
        }
    </style>
    <nav class=" navbar navbar-light " id="grad">
        <a class="navbar-brand d-flex" href="../index.php"> &nbsp;&nbsp;&nbsp;
            <img src="../assets/logo.png" width="45" height="45" class="d-inline-block align-top" alt=""> &nbsp;&nbsp;
            <h1 style="color: red;">Health Care Management System </h1>&nbsp; <img class='galleryImg' src="../assets/heart.png" alt="">
        </a>
        <a href="../index.php"> <i class="fa fa-2x fa-cog fa-sign-out" aria-hidden="true"> </i></a>
    </nav>
    <div class="row">
        <div class="col-md-2">
            <nav id="sidebarMenu" class="text-center">
                <div class="position-sticky">
                    <div>
                        <br>
                        <a href="../admin/admin_page.html" style="text-decoration: none;">
                            <h6>Dashboard</h6>
                        </a>
                        <hr>
                        <a href="../admin/patient_details.php" style="text-decoration: none;">
                            <i></i>
                            <h6>Patients Details</h6>
                        </a>
                        <hr>
                        <a href="../admin/doctor_details.php" style="text-decoration: none;">
                            <h6 style="color: blueviolet;">Doctors Details</h6>
                        </a>
                        <hr>
                        <a href="../admin/doc_specdetails.php" style="text-decoration: none;">
                            <h6>Doctor Specializations</h6>
                        </a>
                        <hr>
                        <a href="../admin/appoint_detail.php" style="text-decoration: none;">
                            <h6>Appointments</h6>
                        </a>
                        <hr>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-md-10" data-aos="fade-up" data-aos-duration="2000" style="overflow: auto;">
            <table class=" mt-4">
                <br>
                <h2 class="text-center view text-primary">DOCTORS DETAILS</h2>
                <hr>
                <?php
                include_once '../include/dbconnect.php';
                $count = mysqli_query($conn, "SELECT COUNT(doc_id) as count FROM doctors");
                $result = mysqli_fetch_assoc($count);
                ?>
                <h3 style="color:darkred;">Total Number of Doctors : &nbsp;<?php echo $result['count']; ?> </h3>
                <thead>
                    <tr class="table table-secondary">
                        <th>ID</th>
                        <th>Doctors Name</th>
                        <th>Address</th>
                        <th>Consultation Fee</th>
                        <th>Contact No</th>
                        <th>Email</th>
                        <th>Operation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($data)) {
                        echo "<tr class='hov'>
                        
                        
                        
                            <td>" . $row['doc_id'] . "</td>
                            <td>" . $row['doc_name'] . "</td>
                            <td>" . $row['address'] . "</td>
                            <td>" . $row['fees'] . "</td>
                            <td>" . $row['d_phone'] . "</td>
                            <td>" . $row['d_email'] . "</td>
                            <td>
                            <a href='doctor_details.php?doc_id=" . $row['doc_id'] . "' class='btn btn-danger'>DELETE</a>
                            </td>
                    </tr>";
                    }

                    ?>

                </tbody>
            </table>
        </div>
    </div>
    <!--  -->







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>