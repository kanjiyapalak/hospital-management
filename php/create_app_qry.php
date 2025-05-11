<?php
 require_once "config.php"; 
 
if (isset($_POST['submit'])) {
    // Create request
    // Define variables
        $id = $_POST['pid'];
        $dt= $_POST['dt'];
        $desc = $_POST['txtdesc'];
        echo $dt;
        
        $sql = "INSERT INTO appointment_detail ( p_id, app_date, description) VALUES (? ,?,?)";
        
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "iss", $param_id, $param_dt, $param_desc);
    
            // Set parameters
            $param_id = $id;
            $param_dt = $dt;
            $param_desc = $desc;
                if (mysqli_stmt_execute($stmt)) {
                // Records created successfully. Redirect to reading page
                header("location: home.php");
                echo "Hello";
                // exit();
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
         }
    }
    ?>
    