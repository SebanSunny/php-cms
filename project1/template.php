
<html>
<title></title>
<head></head>

<body>


<?php

//require 'index.php';

echo $var_name;

$servername = "localhost";
$username = "root";
$password = "";
$database = "phpdatabase";

// Create connection
$conn = mysqli_connect($servername,$username, $password, $database);

$sql = "SELECT * FROM  pagecontent";


if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>title</th>";
        echo "<th>content</th>";
        echo "<th>pageurl</th>";
        echo "</tr>";
        while($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['title'] . "</td>";
            echo "<td>" . $row['content'] . "</td>";
            echo "<td>" . $row['pageurl'] . "</td>";
            echo "</tr>";

        }
        echo "</table>";
    }

}




?>

</body>

</html>
