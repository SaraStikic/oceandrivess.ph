<?php

include_once 'dbh.php';
$idu=$_POST['idu'];
$first=mysqli_real_escape_string($conn, $_POST['first']);
$last=mysqli_real_escape_string($conn,$_POST['last']);

 //INSERT
        $sql="INSERT INTO `ucenik` (`ucenikid`, `ime`, `prezime`) VALUES
        ($idu, '$first', '$last');";
        mysqli_query($conn, $sql);

        header("Location: ../index.php?singup=success");