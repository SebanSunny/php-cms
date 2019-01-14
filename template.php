
<?php
/**
 * Created by PhpStorm.
 * User: amit
 * Date: 03/04/18
 * Time: 11:45 AM
 */


$permalink = $_SERVER['SERVER_NAME'] .$_SERVER['REQUEST_URI'];
$searchlink = 'localhost/php-project/';
$trimlink = str_replace($searchlink, '', $permalink) ;

echo 'pageurl:   ' . $trimlink ;
echo '<br><br>';
//$permalink = trim($permalink,  'localhost/php-project/.php');

$servername = "localhost";
$username = "root";
$password = "";
$database = "phpdatabase";

// Create connection
$conn = mysqli_connect($servername,$username, $password, $database);

// Query the Title and Content by page URL
$sqlstat = "SELECT * FROM pagecontent WHERE pageurl = '$trimlink'";

//$businessCount = mysqli_num_rows($sqlstat);

$result = mysqli_query($conn, $sqlstat);
//$row = mysqli_fetch_array($result);
$row = mysqli_fetch_assoc($result);
if($result = mysqli_query($conn, $sqlstat)){
    while($row = mysqli_fetch_assoc($result))
    {
        //$currenturl = $row['title'];
        //if ($currenturl == $trimlink) {
            echo '<br>';
            echo "Title: " . $row['title'] . " ";
            echo '<br>';
            echo "Content:   " . $row['content'] . " ";
            echo '<br><br>';
        //}
        //else {echo "404 Not Found"; }
    }

}
