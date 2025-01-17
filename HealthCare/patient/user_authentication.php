<?php
session_start();
require_once('../include/dbconnect.php');

if(isset($_POST['submit']))
{

    if(empty($_POST['user']) || empty($_POST['pass']))
    {
        header("location: index.php");

    }
    else{
        $query="select * from user_log ul,users u where u.aadhar=ul.aadhar and gmail='".$_POST['user']."' and password='".$_POST['pass']."'";
        $result=mysqli_query($conn,$query);
        if(mysqli_fetch_assoc($result))
        {
            
            $id=$_POST["user"];
            $_SESSION["userid"]=$id;
           
            header("location:appoint.php");
        }
        else{
            echo "<script language=\"JavaScript\">\n";

            echo "alert('Username or Password was incorrect!');\n";

            echo "window.location='login.php'";

            echo "</script>";
        }
    }
}

?>