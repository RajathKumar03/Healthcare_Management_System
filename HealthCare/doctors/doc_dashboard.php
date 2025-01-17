<?php 
session_start();
include_once '../include/dbconnect.php';
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Doctor Page - Hospital Management System</title>
    <style>
        /* CSS styles for cards */
        .card {
            width: 300px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px;
            padding: 20px;
            display: inline-block;
            vertical-align: top;
        }
        .card h2 {
            margin-top: 0;
        }
        .card p {
            margin-bottom: 0;
        }
         /* CSS styles for navigation bar */
         body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            
            
        }
        .bottom {
            position: absolute;
            bottom: 45;
        }
        .card:hover {
            transform: scale(1.2);
            opacity: 80%;
        }

        .card {
            transition: all .5s ease-in-out;
            border: 1px solid;
        }

        h3 {
            color: beige;
        }
        .navbar {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 200px; /* Adjust the width as needed */
            background-color: #f1f1f1;
        }
        .navbar li {
            text-align: center;
            padding: 10px 0;
            border-bottom: 1px solid black;
        }
        .navbar li:last-child {
            border-bottom: none;
        }
        .navbar li a {
            text-decoration: none;
            color: #333;
            display: block;
        }
        .navbar li a:hover {
            background-color: antiquewhite;
        }
        .fa-custom-size {
            font-size: 100px; /* Adjust the size as needed */
        }
        body {
  background-image: url(doctor-medical-background-24834402.webp);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}

    </style>
</head>
<body>
    <p style="background-image: 'doctor-medical-background-24834402.webp';"></p>
    <ul class="navbar">
        <li style="background-color: white; color: blue; font-size:25px">
    <?php
    $result = mysqli_query($conn ,"SELECT doc_name FROM `doctors` where `doc_id`='".$_SESSION['user']."'");
    
    
    while($row=mysqli_fetch_assoc($result)){
        echo $_SESSION['user'];
         echo $row["doc_name"]; 
    }

    ?>
    </li>
        
        <li><i class="fas fa-home"></i><a href="#">Dashboard</a></li>
        <li><i class="fas fa-solid fa-notes-medical"></i><a href="app_history.php">Appointment history</a></li>
        <!-- <li><i class="fas fa-user"></i><a href="app_history.php">Patients</a></li> -->
        <li><i class="fas fa-sign-out"></i><a href="logout.php">Sign Out</a></li>
    </ul>

<!-- Doctor Page Content -->
<div style="margin-left: 250px;">
<div class="card" style="text-align: center;">
    <i class="fa-solid fa-user-doctor fa-custom-size"></i>

    <h2 style="text-align: center;">My Profile</h2>
    <br><br>
    <a href="doc_details.php" style="font-size: x-large;">Doctors profile</a>
</div>

<div class="card" style="text-align: center;">
    <i class="fa-solid fa-link fa-custom-size"></i>
    <h2>Appointments</h2>
    <br><br>
    <a href="app_history.php" style="font-size: x-large;">View appointment history</a>
</div>
</div>
</body>
</html>
