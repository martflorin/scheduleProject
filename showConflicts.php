<?php
session_start();
require "header.php";

?>

<?php
if(isset($_SESSION['constrangeriHard'])){?>
<h2>Conflicte hard:</h2>
<?php
for($i=0;$i<count($_SESSION['constrangeriHard']);$i++){ ?>
    <h3><?php echo $_SESSION['constrangeriHard'][$i];?> </h3>
<?php
}
}


if(isset($_SESSION['constrangeriSoft'])){?>
<h2>Conflicte soft:</h2>
<?php
for($i=0;$i<count($_SESSION['constrangeriSoft']);$i++){?>
    <h3><?php echo $_SESSION['constrangeriSoft'][$i];?> </h3>
<?php
}
}
?>
</body>
</html>