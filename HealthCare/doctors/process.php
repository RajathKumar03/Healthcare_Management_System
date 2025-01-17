<?php
session_start();
require_once('../include/dbconnect.php');




if(isset($_POST['Login']))
{

    if(empty($_POST['first']) || empty($_POST['password']))
    {
        header("location: doc_login.php?Empty=please fill in the blanks");

    }
    else{
        $query="select * from doctor_log where doc_id='".$_POST['first']."' and password='".$_POST['password']."'";
        $result=mysqli_query($conn,$query);
        if(mysqli_fetch_assoc($result))
        {
            
            $id=$_POST["first"];
            $_SESSION["user"]=$id;
           
            header("location: doc_dashboard.php");
        }
        else{
            echo "<script language=\"JavaScript\">\n";

            echo "alert('Username or Password was incorrect!');\n";

            echo "window.location='doc_login.php'";

            echo "</script>";
        }
    }
}

?>