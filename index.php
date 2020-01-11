<?php 
    session_start();
    if(!isset($_SESSION['isLogged'])){
        header("Location: login.php");
    }
?>
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
    <!-- Header -->
    <header>
        <div class="w3-container w3-center">
            <h1>Timetable</h1>
        </div>
        <hr style="width:100%; border:1px solid #202F55">
    </header>

    <div class="w3-row-padding w3-padding-16 w3-center">
        <form action="#" class="w3-light-green">
            <label for="sala">Nume sala</label>
            <input type="sala" name="sala" id="sala">

            <label>Tip activitate</label>
            <label for="curs">Curs</label>
            <input type="radio" name="curs" id="curs" value="curs">
            <label for="seminar">Seminar</label>
            <input type="radio" name="seminar" id="seminar" value="seminar">

            <label for="zile">Zile</label>
            <div class="multiselect">
                <button>1</button>
                <button>1</button>
                <button>1</button>
                <button>1</button>
                <button>1</button>
            </div>

            <label for="interval">Interval orar</label>
            <div class="multiselect">
                <button>2</button>
                <button>2</button>
                <button>2</button>
                <button>2</button>
                <button>2</button>
                <button>2</button>
            </div>
            <button>Adauga sala</button>
        </form>
    </div>

    <!-- Scripts-->
    <script src="/src/assets/js/main.js"></script>
</body>
</html>