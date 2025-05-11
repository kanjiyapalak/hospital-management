<?php
include "header.php";
require_once "config.php";

// Processing form data when form is submitted
if (isset($_POST["id"]) && !empty($_POST["id"])) {
    // Get hidden input value
    $id = $_POST["id"];

    $input_name = trim($_POST["name"]);
    $name2 = $input_name;

    $input_age = trim($_POST["age"]);
    $age2 = $input_age;


    $input_contact = trim($_POST["contact"]);
    $contact2 = $input_contact;


    $input_address = trim($_POST["address"]);
    $address2 = $input_address;

    $sql = "UPDATE appointment SET name1=?, age1=?,  contact1=?, address1=? WHERE id=?";

    if ($stmt = mysqli_prepare($link, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "sissi", $param_name, $param_age,  $param_contact,  $param_address, $param_id );

        // Set parameters
        $param_name = $name2;
        $param_age = $age2;
     
        $param_contact= $contact2;
       
        $param_address=$address2;
        $param_id = $id;

        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            // Records updated successfully. Redirect to landing page
            header("location: detail.php");
            exit();
        } else {
            echo "Something went wrong. Please try again later.";
        }
    }

    // Close statement
    mysqli_stmt_close($stmt);

    // Close connection
    mysqli_close($link);
} else {
    // Check existence of id parameter before processing further
    if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
        // Get URL parameter
        $id = trim($_GET["id"]);

        // Prepare a select statement
        $sql = "SELECT * FROM appointment WHERE id = ?";
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);

            // Set parameters
            $param_id = $id;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                $result = mysqli_stmt_get_result($stmt);

                if (mysqli_num_rows($result) == 1) {
                    /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                    // Retrieve individual field value
                    $name = $row["name1"];
                    $age = $row["age1"];
                    
                    $contact = $row["contact1"];
                   
                    $address = $row["address1"];
                } else {
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }

            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);

        // Close connection
        mysqli_close($link);
    } else {
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>

<h2>Update Record</h2>
<p>Please edit the input values and submit to update the record.</p>
<form action="<?php echo basename($_SERVER['REQUEST_URI']); ?>" method="post">
    <label>Name</label>
    <input type="text" name="name" value="<?php echo $name; ?>">
    <label>age</label>
    <input type="text" name="age" value="<?php echo $age; ?>">

    <label>contact</label>
    <input type="text" name="contact" value="<?php echo $contact; ?>">

    <label>address</label>
    <input type="text" name="address" value="<?php echo $address; ?>">
    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
    <input type="submit" value="Submit">
    <a href="detail.php">Cancel</a>
</form>
<?php
include "footer.php";
?>