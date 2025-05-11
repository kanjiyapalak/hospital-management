
<?php
include "header.php";


if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
    
    require_once "config.php";

    
    $sql = "SELECT * FROM appointment WHERE id = ?";

    if ($stmt = mysqli_prepare($link, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);

        // Set parameters
        $param_id = trim($_GET["id"]);

        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($result) == 1) {
                /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                // Retrieve individual field value
                $name = $row["name1"];
                $address = $row["age1"];
                
                $salary = $row["contact1"];
               
                $salary = $row["address1"];
            } else {
                // URL doesn't contain valid id parameter. Redirect to error page
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
?>

<h1>&nbsp;View Record</h1>
&nbsp;
&nbsp;
<p>Name:&nbsp;&nbsp;<?php echo $row["name1"]; ?></p>

&nbsp;
<p>Department:&nbsp;&nbsp;<?php echo $row["age1"]; ?></p>



&nbsp;
<p>contact:&nbsp;&nbsp;<?php echo $row["contact1"]; ?></p>


&nbsp;
<p>address:&nbsp;&nbsp;<?php echo $row["address1"]; ?></p>
<p>&nbsp;&nbsp;<a href="detail.php">Back</a></p>
<?php
include "footer.php";
?>
