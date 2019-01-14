
<html>
<title>Dashboard</title>
<head></head>

<body>
<div id="navcontainer">
    <ul id="navlist"><li><a href="dashboard.php">Home</a></li>
        <li><a href="Lists.php">Pages</a></li>
        <li><a href="Lists.php">Posts</a></li>
        <li><a href="Media.php">Media</a></li>
        <li><a href="Comments.php">Comments</a></li>
    </ul>
</div>

<style>

    #navlist {
        padding-left: 0px;
    }
    #navlist li
    {
        display: inline;
        list-style-type: none;
        padding-right: 20px;
        display: block;
        height: 50px;
        text-align: center;
        text-decoration: none;

    }

    #navlist li:hover{
        background-color: darkgrey;
    }

    #navlist li a{
        color: white;
    }



    #navcontainer {
        width: 170px;
        background-color: darkcyan;
        height: 100%;
        padding-top: 30px;
    }
    body{
        background-color: antiquewhite;
        margin: 0;
    }
</style>

<?php ?>

</body>
</html>