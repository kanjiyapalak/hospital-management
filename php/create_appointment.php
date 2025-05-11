
<?php
include "header.php";
?>


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
        <br><br><br><br><br>
        <div class="page">
       <div class="h"> <h1>Schedule an appointment</h1></div><br><br><br><br><br>

        <div class="info">
            <form action="create_app_qry.php" method="POST">
            <label for="id"><b>Enter id:</b></label>
          <input type="text" placeholder="Enter id" name="pid"required><br>
          
          <label for="date"><b>Date:</b></label>
           <input type="date" name="dt" ><br>

          <lable for="condition"><b>Description:</b></lablel>
          <input type="text" name="txtdesc">
          <br>

           <button type="submit"  name="submit">Submit</button>
        </form>
        </div>
    </div>
    <?php
include "footer.php";
?>