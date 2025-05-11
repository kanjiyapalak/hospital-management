<?php
include "header.php";
?>
<br><br><br><br><br>
<html>
    <head>
        <title>Appointment page</title>

        <style>
            
            .page{
                padding-top:50px ;
                border: black;
                border-style: outset;
                background-color:lightblue;
            }
            h1{
                text-align: center;
                background-color: rgb(247, 104, 52);
                padding: 6px;
                
            }
            .h{
                position:absolute;
                padding-left: 600px;
                padding-top:-20px ;
                align: center;
                
            }
            .info{
                padding: 16px;
                text-align: center;
                
            }
            input[type=text]{
                width: 30%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }
            
            button{
                background-color: #04AA6D;
                color: white;
                padding: 14px 20px;
                margin: 8px 0px;
                border:#51dfab;
                cursor:pointer;
                width:8%;
            }
            button:hover{
                opacity: 0.8;
            }
        </style>
    </head> 

    <body>
        <div class="page">
       <div class="h"> <h1>Schedule an appointment</h1></div><br><br><br><br><br>

        <div class="info">
            <form action="create_page.php" method="POST">
            <label for="uname"><b>Name:</b></label>
          <input type="text" placeholder="Enter Name" name="uname" value="<?php echo $inputs['name'] ?? '' ?>"><br>
          <small><?php echo $errors['name'] ?? '' ?></small>
         
          <label for="age"><b>Age:</b></label>
           <input type="text" placeholder="Enter age:" name="age" value="<?php echo $inputs['age'] ?? '' ?>"><br>
           <small><?php echo $errors['age'] ?? '' ?></small>
          <br>
           <label for="contact"><b>Contact No.:</b></label>
           <input type="text"placeholder="Enter Contact no."name="contact"><br>
           

           <label for="address"><b>Address:</b></label>
           <input type="text" placeholder="Enter your address" name="address">
           
<br>
           <button type="submit"  name="submit">Submit</button>
        </form>
        </div>
    </div>
 <?php
 include "footer.php";
 ?>

