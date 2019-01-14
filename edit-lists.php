<html>
<head>
    <title> Post-Page edit form</title>
</head>

<body>

<?php
//session_start();

$servername="localhost";
$username="root";
$password="";
$database = "phpdatabase";


//$Username=$_SESSION['myssession'];

$conn = mysqli_connect($servername, $username, $password, $database);
$sqlstat = "SELECT * FROM pagecontent";
$result = mysqli_query($conn, $sqlstat);

//$row = mysqli_fetch_array($result);

while ($row = mysqli_fetch_array ($result)){

    ?>

    <form id="form1" action="update-record.php" method="get" enctype="multipart/form-data">
        Title
        <input type="text" name="title" value="<?php echo $row ['title']; ?> " size=10>
        Content
        <input type="text" name="content" value="<?php echo $row ['content']; ?> " size=10>
        URL
        <input type="hidden" name="pageurl" value="<?php echo $row ['pageurl']; ?> " size=10>

        <input type="submit" name="submit" value="Update">
        <input type="submit" name="delete" value="Delete">

        Select File:
        <input type="file" name="upd" id="fileToUpload">
        <input type="submit" value="Upload">
<!--
        <input type="submit" value="Uplaod Video" name="upd"/>
        <input type="submit" value="Display Video" name="disp"/>
      -->

    </form>

    <?php

}
?>

<br><br>

Go To: <br><br>
<a href="template.php">1. Show Templates</a><br><br>
<a href="formdetails.php">2. Form Details</a><br><br>
<a href="lists.php">3. Title Lists</a><br><br>



</body>
</html>