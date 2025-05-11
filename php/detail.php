<?php
include "header.php";
?>
<br><br>
<form>
    Enter Name: <input type=text name=txtname>
    <input type=submit name=s1 value="Search">
</form>
<?php

require_once "config.php";


// Attempt select query execution
if (isset($_GET["s1"]))
{
    $sql = "SELECT * FROM appointment where name1 like '%".$_GET["txtname"]."%'";
}
else
{
    $sql = "SELECT * FROM appointment";
}


if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        echo '<table>';
        echo "<thead>";
        echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>Name</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name1'] . "</td>";
            echo "<td>";
            echo "<a href='detailread.php?id=" . $row['id'] . "'>View Record</a>";
            echo "&nbsp;";
            echo "<a href='detailupdate.php?id=" . $row['id'] . "'>Update Record</a>";
            echo "&nbsp;";
          
            echo "</td>";
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

// Close connection
mysqli_close($link);
?>
<?php
include "footer.php";
?>