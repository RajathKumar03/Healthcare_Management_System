<?php
session_start();
include_once '../include/dbconnect.php';

$result = mysqli_query($conn ,"SELECT * FROM doctors d ,doc_specialization ds, doctor_log dl where d.doc_id='".$_SESSION['user']."' and ds.doc_id='".$_SESSION['user']."' and dl.doc_id='".$_SESSION['user']."'");
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
      text-align:left;
      border:black;
    }
    table{
      border: 2px solid black;
    }
    th {
      width: 300px;
      height: 60px;
      background-color: cadetblue;
      text-transform:uppercase;
      color: whitesmoke;
      border:black;
    }

    th:hover {
      background-color: rgb(20, 219, 226);
    }
    td:hover{
      background-color:  rgb(198, 187, 187);
    }

    td {
      height: 50px;
      width: 300px;
      background-color: whitesmoke;
    }
    body{
      background-image:url('../assets/medicine-blue-background-flat-lay.jpg');
      background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
    }
  </style>

  <table >
  <!-- <thead>
    
  <tr>
    <th>Doctors id</th>
    <th>Doctor name</th>
    <th>Doctor specialization</th>
    <th>Qualifications</th>
    <th>Experience</th>
    <th>contact number</th>
    <th>Doctors email</th>
    <th>Address</th>
    <th>profile creation date and time</th>
  </tr>
  </thead> -->
  <h1 style="background-color:lightblue; height:60px" class="text-danger text-center">My Profile</h1>
  <hr>
  <br>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <th >&nbsp;&nbsp;Doctors id</th><td>&nbsp;&nbsp;<?php echo $row["doc_id"]; ?></td>
</tr>
<tr>
  <th>&nbsp;&nbsp;Doctor name</th><td>&nbsp;&nbsp;<?php echo $row["doc_name"]; ?></td>
</tr>
<tr>
  <th>&nbsp;&nbsp;Doctor specialization</th><td>&nbsp;&nbsp;<?php echo $row["doc_spec"]; ?></td>
</tr>
<tr>
<th>&nbsp;&nbsp;Qualifications</th><td>&nbsp;&nbsp;<?php echo $row["qualification"]; ?></td>
</tr>
  <tr>
    <th>&nbsp;&nbsp;Experience</th><td>&nbsp;&nbsp;<?php echo $row["experiencce"]; ?></td>
  </tr> 
  <tr>
    <th>&nbsp;&nbsp;Contact number</th><td>&nbsp;&nbsp;<?php echo $row["d_phone"]; ?></td>
  </tr>
  <tr>
  <th>&nbsp;&nbsp;Doctors email</th><td>&nbsp;&nbsp;<?php echo $row["d_email"]; ?></td>
  </tr>
  <tr>
  <th>&nbsp;&nbsp;Address</th><td>&nbsp;&nbsp;<?php echo $row["address"]; ?></td>
  </tr>
  <tr>
  <th>&nbsp;&nbsp;profile creation date and time</th><td>&nbsp;&nbsp;<?php echo $row["creation_date_time"]; ?></td>
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