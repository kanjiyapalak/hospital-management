<?php
session_start();
include "config.php";

if (isset($_POST["login"])) 
{
    $u = $_POST['uname'];
    $p = $_POST['psw'];

    $q = "SELECT * FROM hospital WHERE BINARY username = '$u' AND pass = '$p' ";
    
    $compare = mysqli_query($link, $q);
//    $rec=mysqli_fetch_assoc($compare);

    if (mysqli_num_rows($compare))
     {
        setcookie("uname",$u);
         $_SESSION["uid"]=123;
        header("Location: home.php");     
    } 
    else
     {
        echo '<script>
        alert("username and pass are incorrect");
        window.location.href="login.php";
        </script>';
    }
}
?>