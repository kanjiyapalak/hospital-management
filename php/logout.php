<?php 
session_start();
session_destroy();
  setcookie("uname","",time()-123);
  header("Location:login.php");
  ?>