<?php
session_start();
include('../include/dbconnect.php');
$conn = mysqli_connect("localhost:3308", "root", "", "hms");
?>
<?php
require_once('../include/dbconnect.php');
$select = "select d.doc_id as id,doc_name,doc_spec from doc_specialization ds,doctors d where ds.doc_id=d.doc_id order by d.doc_id";
$data = mysqli_query($conn, $select);
?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="project.css">
    <title>Patient Appointment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="overflow:scroll;overflow-x:hidden;">
    <style>
        .color1111 {
            color: black;

        }

        .card {
            top: 80px;
            width: 1000px;
            height: 470px;
            background-color: beige;
            background-image: linear-gradient(to bottom right, darkcyan, lightblue);
        }

        body {
            background-image: url(../assets/v870-mynt-12.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        #popup-window {
            position: fixed;
            width: 400px;
            height: 600px;
            background: white;
            border: 1px solid black;
            padding: 10px;
            margin: auto;
            top: 0;
            right: 10px;
            bottom: 0;
            z-index: 10;
            display: none;
            overflow: auto;
        }
        
    </style>

    <nav class=" navbar navbar-light " id="grad">
        <a class="navbar-brand d-flex" href="../index.php"> &nbsp;&nbsp;&nbsp;
            <img src="../assets/logo.png" width="45" height="45" class="d-inline-block align-top" alt=""> &nbsp;&nbsp;
            <h1 style="color: red;">Health Care Management System </h1>&nbsp; <img class='galleryImg' src="../assets/heart.png" alt="">
        </a>
        <a href="../index.php"><i class="fa fa-2x fa-cog fa-sign-out" aria-hidden="true"> </i></a>
    </nav>
    
        
    <a href="userlogout.php" class="btn btn-danger mt-2" style="margin-left:10px">SIGN OUT</a>
    <a style="margin-left: 1200px;" class="btn btn-primary mt-2" href="my_app.php">My Appointments</a>


    <a style="margin-left: 1310px;" class="btn btn-warning mt-2" href="#" id="popup-link">DOCTORS DETAILS</a>
    <div id="popup-window" style="background-image:url(../assets/doc-details.jpeg); background-repeat: no-repeat;background-size:cover;">
        <h2 class="text-center text-primary">Doctors Details</h2>
        <hr>

        
       
                
                    <div>
                    <?php
                    while ($row = mysqli_fetch_assoc($data)) {
                        echo "
                            <h6 class='text-light bg-dark'>ID =" . $row['id'] . "</h6>
                            <h6 class='text-light bg-dark'>NAME =" . $row['doc_name'] . "</h6>
                            <h6 class='text-light bg-dark'>SPECIALIZATION =" . $row['doc_spec'] . "</h6>
                            <hr>";
                    }

                    ?>
                    </div>
                    
        <button id="close-button" class="btn btn-danger">Close</button>
    </div>
    <section class="card"style='width:800px; height:580px'>
        <div class="container ">
            <div>
                <form>
                    <br>
                    <h2 class="text-center " style="color:bisque;">Make an Appointment</h2> 
                    
                    <a href="" class="btn btn-danger mt-2" style="margin-left:10px">ID:</a>
                    <?php
                        $result = mysqli_query($conn ,"SELECT * FROM user_log u,users us where `gmail`='".$_SESSION['userid']."' and u.aadhar=us.aadhar");
                      while($row=mysqli_fetch_assoc($result)){
                       
                         echo $row["u_id"]; 
                    }
                    ?>
                    <a href="" class="btn btn-danger mt-2" style="margin-left:10px">Name:</a>
                    <?php
                        $result = mysqli_query($conn ,"SELECT * FROM user_log u,users us where `gmail`='".$_SESSION['userid']."' and u.aadhar=us.aadhar");
                      while($row=mysqli_fetch_assoc($result)){
                        echo $row['fname'];
                         
                    }
                    ?>
                    </div>
                    
                    
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <input  class="form-control" type="number" name="pid" placeholder="Patients ID" required>
                            <br><br>
                            <select class="form-control" name="" id="Select" required>
                                <option class="color1111" value="<?php $row['doc_name'] ?>" selected>Doctors Name</option>
                                <?php
                                include_once "connection.php";

                                $query = "SELECT * FROM doctors"; 
                                $result = $conn->query($query);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {

                                ?>
                                        <option value="<?php echo $row['id'] ?>"> <?php echo $row['doc_name'] ?></option>
                                        
                                <?php
                                    }
                                }
                                 ?>
                            </select>
                     <br><br>
                     <input type="date" class="form-control" name="date">
                        </div>
                        <div class="col-md-6">
                            <input class="form-control" type="number" name="pno" placeholder="Mobile Number" required>
                            <br><br>
                            <input class="form-control" type="text" name="did" placeholder="Enter Doctors ID" required>
                            <br><br>
                            <input type="time" class="form-control" name="time" placeholder="9:00-18:00" min="09:00:00" max="18:00:00" required>
                        </div>
                    </div>
                    <br><br>
                    <textarea class="form-control" id="comment" name="comment" rows="2" placeholder="Please describe the reason For Appointment" required></textarea>

            </div>
            <!-- <div class="button mt-5 ">
                <a href="#" class="btn btn-success mt-4 ml-5">Make an Appointment</a>
            </div> -->
            <input  type="submit" name="submit" class="btn btn-success text-center mt-4"  value="SUBMIT">
            </form>
            </div>
        </div>
        </div>
    </section>
    <br><br><br><br>

    <?php
    if (isset($_REQUEST['submit'])) {
        $pid = $_REQUEST['pid'];
        $pno = $_REQUEST['pno'];
        $did = $_REQUEST['did'];
        $reason= $_REQUEST['comment'];
        $date=$_REQUEST['date'];
        $time=$_REQUEST['time'];

        $sql = "INSERT INTO `appointment`(`u_id`,`phone`,`doc_id`, `reason`, `app_date`, `app_time`)VALUES ('$pid','$pno','$did','$reason','$date','$time')";

        // echo $sql;
        // exit();

        if (mysqli_query($conn, $sql)) {
            echo "<script> alert('data added succesfully')
        window.location.href='appoint.php'</script>";
        } else {
            echo "<script> alert('data not inserted')
        window.location.href='appoint.php'</script>";
        }
    }


    ?>
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        // Get the elements by their ID
        var popupLink = document.getElementById("popup-link");
        var popupWindow = document.getElementById("popup-window");
        var closeButton = document.getElementById("close-button");
        // Show the pop-up window when the link is clicked
        popupLink.addEventListener("click", function(event) {
          event.preventDefault();
          popupWindow.style.display = "block";
        });
        // Hide the pop-up window when the close button is clicked
        closeButton.addEventListener("click", function() {
          popupWindow.style.display = "none";
        });
      </script> 
</body>

</html>