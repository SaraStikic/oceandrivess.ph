<?php

include_once 'includes/dbh.php';

//DELETE
$id=$_POST['ucenikid'];
$query="DELETE FROM `ucenik` WHERE `ucenikid`=$id";

$data=mysqli_query($conn, $query);
 if($data){
     echo "Obrisano iz baze učenika";
 }else {echo "Nije obrisano iz baze učenika";}

 header("Location: ./index.php?update=success");
