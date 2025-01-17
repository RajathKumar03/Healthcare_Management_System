<?php
require_once('../include/dbconnect.php');
$select = "select id,username from admin order by id";

$data = mysqli_query($conn, $select); {
  include("../include/dbconnect.php");
  error_reporting(0);
  $id = $_GET['id'];
  $delete = mysqli_query($conn, "DELETE FROM admin where id='$id'");
}

?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../project.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<body>
  <style>
    body {
            background-image: url('../assets/adminbg.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }


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
      background-color: seagreen;
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
      background-color: lightgray
    }
    label{
      color: white;
    }
  </style>

  <nav class=" navbar navbar-light" id="grad">
    <a class="navbar-brand d-flex" href="../index.php"> &nbsp;&nbsp;&nbsp;
      <img src="../assets/logo.png" width="45" height="45" class="d-inline-block align-top" alt=""> &nbsp;&nbsp;
      <h1 style="color: red;">Health Care Management System </h1>&nbsp; <img class='galleryImg' src="../assets/heart.png" alt="">
    </a>
    <a href="../index.php"><i class="fa fa-2x fa-cog fa-sign-out" aria-hidden="true"> </i></a>
  </nav>
  <h2 class="text-center text-primary" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">MANAGE ADMINS</h2>
  <hr>
  <div class="text-center" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
    <form action="../admin/addadmin.php" >
    <label for="">
      <h4>Username : </h4>
    </label>&nbsp;
    <input type="text" name="username" placeholder="Username">&nbsp;<br>
    <label for="">
    <h4>Password : </h4>
    </label>&nbsp;
    <input type="password" name="password" placeholder="Password">&nbsp;<br>
    <input type="submit" class="btn btn-success" value="ADD ADMIN" name="submit">
    </form>

    <?php
    include('../include/dbconnect.php');

    if (isset($_REQUEST['submit'])) {
      $uname = $_REQUEST['username'];
      $pass = $_REQUEST['password'];

      $sql = "INSERT INTO admin(`username`,`password`) VALUES ('$uname','$pass')";

      if (mysqli_query($conn, $sql)) {
        echo "<script> alert('data added succesfully')
    window.location.href='addadmin.php'</script>";
      } else {
        echo "<script> alert('data not inserted')
    window.location.href='addadmin.php'</script>";
      }
    }

    ?>
  </div>





  <hr>
  <div class="container"></div>
  <div>
    <table>
      <thead>
        <tr>
          <th>ADMINS</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($data)) {
          echo "<tr class='hov'>
                            <td>" . $row['username'] . "</td>
                            <td>
                            <a href='addadmin.php?id=" . $row['id'] . "' class='btn btn-danger'>DELETE</a>
                            </td>
                    </tr>";
        }

        ?>
      </tbody>
    </table>
  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>