<?php

require "db.inc.php";

$commData = "";
$sql = mysqli_query($con,"SELECT*FROM alege");
while($data = $sql->fetch_assoc())
    $commData .= $data['id'] . ',' . $data['id_profesor'] . ',' . $data['sala'] . ',' . $data['zi'] . ',' . $data['interval_timp'] . ',' . $data['comentariu'] . "\n";

$resp = "data:text/csv;charset=utf-8, ID, ID_PROF, SALA, ZI, INTERVAL, COMENTARIU\n";
$resp .= $commData;

?>