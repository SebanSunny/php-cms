<html xmlns="http://www.w3.org/1999/html">
<body>

<?php

/**
 * Created by PhpStorm.
 * User: amit
 * Date: 29/03/18
 * Time: 10:49 AM
 */


$title = $_GET["title"];
$content = $_GET["content"];
$pageUrl = $_GET["pageurl"];

echo "<br>";

// Create connection with mysql php

$servername = "localhost";
$username = "root";
$password = "";
$database = "phpdatabase";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Database Connection failed: " . mysqli_connect_error());
}
echo '<br>';


//-------------------------------------------------------------------------------------------------------------------
// Update the Record
$sql_update = "UPDATE pagecontent SET title='$title', content='$content' WHERE pageurl='$pageUrl'";

if(isset($_GET['submit'])) {

    if (mysqli_query($conn, $sql_update)) {
        echo "Table Updated";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

//-------------------------------------------------------------------------------------------------------------------
// Delete the Record
$sql_query="DELETE FROM pagecontent WHERE title='$title'";

if(isset($_GET['delete']) == "Delete")
{
    if (mysqli_query($conn, $sql_query)) {
        echo "Row Deleted";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

}

//-------------------------------------------------------------------------------------------------------------------
// Upload the Video Files




mysqli_close($conn);
?>


<h3><?php echo "Post: " .   $_GET["title"]?></h3>
<h3><?php echo "Cont: " .  $_GET["content"]?></h3>
<h3><?php echo "Url: " .  $_GET["pageurl"]?></h3>

<br>

Go To: <br><br>
<a href="template.php">1. Show Templates</a><br><br>
<a href="formdetails.php">2. Form Details</a><br><br>
<a href="edit-lists.php">3. Updates Lists</a><br><br>
<a href="lists.php">4. Title Lists</a><br><br>

</body>
</html>
