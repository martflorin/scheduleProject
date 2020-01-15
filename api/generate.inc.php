<?php
if(!isset($_POST['generate'])){
    header("location: ../index.php?access without click");
}
require "db.inc.php";
$query = mysqli_query($con, "SELECT id FROM utilizatori WHERE nr_seminarii+nr_cursuri=nr_alegeri AND nr_alegeri<>0");
$num_rows = mysqli_num_rows($query);
$alegeriFacute=array();
$saliIndisponibileHard=array();
$saliIndisponibileSoft=array();
if($num_rows != 0){
    while($row = mysqli_fetch_assoc($query)){
        $databaseid=$row['id'];
        $query1 = mysqli_query($con, "SELECT sala,zi,interval_timp FROM alege WHERE id_profesor='".$databaseid."'");
        $num_rows1 = mysqli_num_rows($query1);
        if($num_rows1 != 0){
            while($row1 = mysqli_fetch_assoc($query1)){
                $user_sala=$row1['sala'];
                $user_interval=$row1['interval_timp'];
                $user_zi=$row1['zi'];
                if(count($alegeriFacute)==0){
                    array_push($alegeriFacute,$user_sala.$user_zi.$user_interval);
                }else{
                    if(in_array($user_sala.$user_zi.$user_interval,$alegeriFacute)){
                        if(!in_array("Doi sau mai multi utilizator opteaza pentru sala ".$user_sala." ".$user_zi." ".$user_interval,$saliIndisponibileHard))
                        array_push($saliIndisponibileHard,"Doi sau mai multi utilizator opteaza pentru sala ".$user_sala." ".$user_zi." ".$user_interval);
                        
                    }
                    else{
                        array_push($alegeriFacute,$user_sala.$user_zi.$user_interval);
                    }
                } 
            }
        }
    }
}
$query2 = mysqli_query($con, "SELECT id FROM utilizatori WHERE nr_seminarii+nr_cursuri<nr_alegeri AND nr_alegeri<>0");
$num_rows2 = mysqli_num_rows($query2);
if($num_rows2 != 0){
    while($row2 = mysqli_fetch_assoc($query2)){
        $databaseid=$row2['id'];
        $query3 = mysqli_query($con, "SELECT sala,zi,interval_timp FROM alege WHERE id_profesor='".$databaseid."'");
        $num_rows3 = mysqli_num_rows($query3);
        if($num_rows3 != 0){
            while($row3 = mysqli_fetch_assoc($query3)){
                $user_sala=$row3['sala'];
                $user_interval=$row3['interval_timp'];
                $user_zi=$row3['zi'];
                if(count($alegeriFacute)==0){
                    array_push($alegeriFacute,$user_sala.$user_zi.$user_interval);
                }else{
                    if(in_array($user_sala.$user_zi.$user_interval,$alegeriFacute)){
                        if(!in_array("Doi sau mai multi utilizator opteaza pentru sala ".$user_sala." ".$user_zi." ".$user_interval,$saliIndisponibileHard) AND !in_array("Doi sau mai multi utilizator opteaza pentru sala ".$user_sala." ".$user_zi." ".$user_interval,$saliIndisponibileSoft))
                        array_push($saliIndisponibileSoft,"Doi sau mai multi utilizator opteaza pentru sala ".$user_sala." ".$user_zi." ".$user_interval);
                        
                    }
                    else{
                        array_push($alegeriFacute,$user_sala.$user_zi.$user_interval);
                    }
                } 
            }
        }
    }
}
session_start();
$_SESSION['constrangeriHard']=$saliIndisponibileHard;
$_SESSION['constrangeriSoft']=$saliIndisponibileSoft;
header("location: ../showConflicts.php");


?>