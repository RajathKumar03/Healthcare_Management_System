<?php
session_start();
include_once '../include/dbconnect.php';

$result = mysqli_query($conn ,"select * from appointment a,user_log us,users u where gmail='".$_SESSION['userid']."' and u.aadhar=us.aadhar and u.u_id=a.u_id");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 </head>
<body>
<style>
    table,
    th,
    td {
      border: 1px solid;
      margin-left: auto;
      margin-right: auto;
      text-align: center;
    }

    th {
      width: 180px;
      height: 60px;
      background-color: cadetblue;
    }

    thead:hover {
      background-color: rgb(20, 219, 226);
    }
    .onhover{
      background-color: whitesmoke;
    }
    .onhover:hover{
      background-color:  rgb(198, 187, 187);
    }

    td {
      height: 50px;
      width: 180px;
    }
  </style>

  <h2 class="text-danger text-center">My Appointments</h2>
  <hr>

  <table>
  
 <thead>
 <tr>
    <th>Appointment number</th>
    <th>Patient id</th>
    <th>Phone number</th>
    <th>Reason for appointment</th>
    <th>application date</th>
    <th>application time</th>
  </tr>
 </thead>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr class="onhover">
    <td><?php echo $row["app_no"]; ?></td>
    <td><?php echo $row["u_id"]; ?></td>
    <td><?php echo $row["phone"]; ?></td>
    <td><?php echo $row["reason"]; ?></td>
    
    <td><?php echo $row["app_date"]; ?></td>
    <td><?php echo $row["app_time"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php

// else{
//     echo "No result found";
// }
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 </body>
</html>