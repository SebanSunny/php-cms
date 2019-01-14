
<?php
/**
 * Created by PhpStorm.
 * User: amit
 * Date: 03/04/18
 * Time: 11:45 AM
 */



//require "database.php";

$permalink = $_SERVER['SERVER_NAME'] .$_SERVER['REQUEST_URI'];

$permalink = trim($permalink,  "localhost/php-project/project1.php");

echo "permalink: ". $permalink;
echo '<br>';

session_start();
$_GET['varname'] = $permalink;

$servername = "localhost";
$username = "root";
$password = "";
$database = "phpdatabase";

// Create connection
$conn = mysqli_connect($servername,$username, $password, $database);
$sqlstat = "SELECT * FROM pagecontent WHERE pageurl = '$permalink'";
//$sql = "/php-project".$sql;


$sql = "SELECT * FROM  pagecontent";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);



/*while($row = mysqli_fetch_array($result))
{
    for ($i = 0; $i < count($row); $i++) {
        echo $row[$i] . " ";
        echo '<br>';
    }

}*/

    //if (!mysqli_fetch_array($result)){
    //include("includes/404.inc.php");
    if($result = mysqli_query($conn, $sql)){
            //if(mysqli_num_rows($result) > 0) {
        //echo "mysqli_fetch_array";

        //if(mysqli_num_rows($result) > 0) {

        while($row = mysqli_fetch_assoc($result))
{
    echo '<br>';
   echo "Title: ". $row['title']." ";
   echo '<br>';
   echo "Content:   ". $row['content']." ";

       }   }  /*echo "<table>";
            echo "<tr>";
            echo "<th>title</th>";
            echo "<th>content</th>";
            echo "</tr>";
            while($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['title'] . "</td>";
                echo "<td>" . $row['content'] . "</td>";
                echo "</tr>";

            }
            echo "</table>";
        }
        exit();
    }
    else{
          include("includes/container.php");
          exit();
        }*/


