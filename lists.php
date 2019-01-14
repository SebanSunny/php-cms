
<html>
<title>Lists Post-Pages</title>
<head>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>

<!--<button onclick="myFunction()">".$row['title']."</button>-->
<!--<button id="myBtn">Redirect</button>-->
<script>


</script>

<div id="lists">
    Post-Pages: <a href="formdetails.php"><button type="submit"><h3>Add New</h3></button></a>
</div>

<style>

    #lists a button{
        color: red;
        cursor: pointer;
</style>

<?php

//$permalink = trim($permalink,  'localhost/php-project/.php');

$servername = "localhost";
$username = "root";
$password = "";
$database = "phpdatabase";

// Create connection
$conn = mysqli_connect($servername,$username, $password, $database);
$sqlstat = "SELECT * FROM pagecontent";

$result = mysqli_query($conn, $sqlstat);

$row = mysqli_fetch_array($result);

if($result = mysqli_query($conn, $sqlstat)){
    while($row = mysqli_fetch_assoc($result))
    {
        //echo '<br>';
        //echo "Title: ".$row['title'];
        echo "<h3><a href='edit-lists.php' id=\"showMore\"> ".$row['title']."</a></h3>";
    }
}

?>
<br>

Go To: <br><br>
<a href="template.php">1. Show Templates</a><br><br>
<a href="formdetails.php">2. Form Details</a><br><br>
<a href="edit-lists.php">3. Updates Lists</a><br><br>

</body>
</html>