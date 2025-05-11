<?php
include "header.php"
?>
<form>
    <br><br><br><br>
    Enter Id : <input type=text name=txtid>
    <input type=submit name=s1 value="display">
</form>
<?php

require_once "config.php";


// Attempt select query execution
if (isset($_GET["s1"]))
{

    $qry="SELECT * FROM appointment where id =".$_GET["txtid"];
    $rs = mysqli_query($link, $qry);
    $row1 = mysqli_fetch_array($rs);
    echo "Name=".$row1["name1"];
    $sql = "SELECT * FROM appointment_detail where p_id =".$_GET["txtid"];



if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        echo '<table>';
        echo "<thead>";
        echo "<tr>";
        echo "<th>date</th>";
        echo "<th>Description</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['app_date'] . "</td>";
            echo "<td>" . $row['description'] . "</td>";
  
            echo "</tr>";
        }
        
        echo "</tbody>";
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else {
        echo '<em>No records were found.</em>';
    }
} else {
    echo "Oops! Something went wrong. Please try again later.";
}
}

// Close connection
mysqli_close($link);
?>
<?php
include "footer.php"
?>
