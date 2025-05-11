<?php
 require_once "config.php"; 
 
if (isset($_POST['submit'])) {
    // Create request
    // Define variables
        $name2 = $_POST['uname'];
        $age2= $_POST['age'];
        $contact2 = $_POST['contact'];
        $address2 = $_POST['address'];
    
        
        $sql = "INSERT INTO appointment (name1 ,age1,contact1,address1) VALUES (? ,?,?,? )";
        
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "siss", $param_name, $param_age, $param_contect, $param_address);
    
            // Set parameters
            $param_name = $name2;
            $param_age = $age2;
            $param_contect = $contact2;
             $param_address = $address2;
            
    
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Records created successfully. Redirect to reading page
                header("location: home.php");
                // exit();
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
    }
    ?>
    