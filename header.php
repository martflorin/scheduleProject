
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Timetable</title>
    <link rel="stylesheet" href="/src/assets/css/main.css">
    <link rel="stylesheet" href="/src/assets/css/w3.css">
</head>
<body class="w3-light-grey w3-content" style="max-width:1600px">
<header>
        <div class="w3-container w3-center">
            <h1>Timetable</h1>
            <?php
            if(isset($_SESSION['isLogged'])){
            if($_SESSION['isLogged']=="true"){ ?>
            <form action="api/logout.inc.php" method="POST">
            <input type="submit" value="logout">
            </form>
            <?php
            }
        }else {
            ?>
        <a href="login.php">Login</a>
            <?php
        }
            ?>

        </div>
        <hr style="width:100%; border:1px solid #202F55">
</header>