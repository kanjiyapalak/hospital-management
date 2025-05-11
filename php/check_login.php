<?php
session_start();
if ((!(isset($_COOKIE["uname"]))) || (!(isset($_SESSION["uid"]))))
    {
         header("Location: login.php");
    }
?>