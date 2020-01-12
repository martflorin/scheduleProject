
<?php require "header.php";
session_start();
if(isset($_SESSION['isLogged'])){
    header("location:index.php");
}



?>

<form action="api/login.inc.php" method="post">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit" name="login-submit">Login</button>
</form>

</body>
</html>




