
<html>
<title>login page</title>
<head></head>

<body>
<?php
/**
 * Created by PhpStorm.
 * User: amit
 * Date: 29/03/18
 * Time: 10:41 AM
 */

echo "<h1>Welcome to Login Page</h1>"

?>
<br>
<br>
<div class="login-form">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <br>
    <a href="dashboard.php"><button type="submit">Login</button></a>

  </div>
<style>
    body {
        text-align: center;
        background-color: cadetblue;
    }

    h1 {
        margin-top: 25%;
    }

</style>



</body>
</html>