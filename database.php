<html xmlns="http://www.w3.org/1999/html">
<body>

<?php

/**
 * Created by PhpStorm.
 * User: amit
 * Date: 29/03/18
 * Time: 10:49 AM
 */

//$title = $_GET["title"];
//$content = $_GET["cont"];

error_reporting(E_ALL);
ini_set('display_errors', 1);

$title = $_GET["title"];
$content = $_GET["content"];
$postUrl = $_GET["pageurl"];


//$pageUrl = $_SERVER['QUERY_STRING'];
//$pageUrl = $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']);
//$pageUrl = $_SERVER['SERVER_NAME'] .dirname($_SERVER['PHP_SELF']). $_SERVER['QUERY_STRING'];
$pageUrl = $_SERVER['SERVER_NAME'] .$_SERVER['REQUEST_URI'];



// Create connection with mysql php

$servername = "localhost";
$username = "root";
$password = "";
$database = "phpdatabase";

// Create connection
$conn = mysqli_connect($servername,$username, $password, $database);

// Check connection
if (!$conn) {
    die("Database Connection failed: " . mysqli_connect_error());
}
echo " Database Connected";
echo '<br>';

// SQL to create table an insert data

//$sql = "CREATE TABLE pagecontent (title VARCHAR(30),content VARCHAR(30))";

//$sql = "ALTER TABLE pagecontent ADD content VARCHAR( 255 ) after title";
//$sql = "ALTER TABLE pagecontent COLUMN page_id INT auto_increment";
//$sql = "ALTER TABLE pagecontent ADD page_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY";
//$sql = "ALTER TABLE pagecontent MODIFY title VARCHAR ( 255 ) AFTER page_id";
//$sql = "ALTER TABLE pagecontent DROP pageurl";

$sql = "INSERT INTO pagecontent (title, content,pageurl) VALUES ('$title','$content','$postUrl')";



if (mysqli_query($conn, $sql)) {
    echo "pagecontent Table created";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);

?>


<h3><?php echo "Post: " .   $_GET["title"]?></h3>
<h3><?php echo "Cont: " .  $_GET["content"]?></h3>
<h3><?php echo "URL: ". $postUrl ?></h3>
<p><?php echo  $_SERVER['REQUEST_URI']?></p>
<p><?php echo  $pageUrl?></p>

<br>

<a href="template.php">Show Details</a>




</body>

</html>
