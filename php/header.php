<?php
    if ((!(isset($_COOKIE["uname"]))) )
    {
         header("Location: login.php");
    }
?>
<html>
<head>
<title>Brenner Children&#39;s | Pediatric Hospital in Winston-Salem, NC | Atrium Health Wake Forest Baptist: Brenner Children&#39;s</title>
<style>
:root{
    --navbar-height:59px;
}
 
#navbar{
    display:flex;
    align-items:center;
}
#navbar
{
    /* position:relative; */
    background-color:rgb(30, 167, 225);
    height:60px;
    /* width:96%; */
}
#navbar ul
{
    display:flex;
    font-family: 'Baloo Bhai', cursive;
    padding-right: 30px;
}
#navbar::before{
    content:"" ;
    position:absolute;
    padding-right: 30px;
    margin: auto;
    height: 100%;
    /* width: 90%; */
    z-index: -1;
    opacity:0.4;
}
#navbar ul li{
    list-style:none;
    font-size:1rem;
    text-align:center;
}
#navbar ul li a{
    color:rgb(255, 255, 255);
    padding:3px 22px;
    border-radius: 20px;
    text-decoration: none;
}
#navbar ul li a:hover{
    color:rgb(0, 0, 0);
    background-color: rgb(255, 253, 255);
}
.slider-infos{
font-size:67px;
color:white;
font-family:serif;
font-style: italic;
font-align:center;
padding-top: 50px;
  padding-right: 10px;
  padding-bottom: 0px;
  padding-left: 60px;
width: 50%;
}
.logo{
padding-up:50px;
}
.button {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin:6px;
  cursor: pointer;
}
.slider-button-holder{
position:relative;
left:60px;
top:-50px;
display: block;
  margin-left: 90px;
  margin-right: auto;
  margin-bottom:80px;
}
.page{
position:relative;
top:-50px;
}
</style>
</head>
<body>
<header class="main-header solid-bg">
<div >
                        <a href="/locations/hospitals/brenner-childrens" class="navbar-brand" title="Atrium Health Levine Children&#39;s">
                            <img src="https://cdn.atriumhealth.org/-/media/wakeforest/clinical/images/logos-and-signatures/lch-400x100px-tv6.png?rev=7d9aa007410c429fad1924c6cb63aebf" alt="Atrium Health Levine Children&#39;s" class="logo">
                        </a>
                </div>
<nav id="navbar">
 <ul id="primary-nav-desk" class="primary-nav is-fixed desk-view">
                                    <li><a href="create.php">register detail</a></li>
                                    <li><a href="detail.php">see detail</a></li>
                                    <li><a href="create_appointment.php" >Appointment</a></li>
                                    <li><a href="p_history.php">Patient History</a></li>
                                    
                                </ul>
</nav>
