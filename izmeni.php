<?php 

include_once 'includes/dbh.php';
if(isset($_POST['update'])){
  $ucenikid=$_POST['ucenikid'];
//UPDATE
  $query="UPDATE `ucenik` SET ime='$_POST[ime]', prezime='$_POST[prezime]' WHERE ucenikid='$_POST[ucenikid]';";
  $query_run=mysqli_query($conn, $query);

  if(query_run){
     echo '<script type="text/javascript"> alter("Baza imenjena") </script>';
  }else{echo '<script type="text/javascript"> alter("Baza nije imenjena") </script>';}

  }

header("Location: ./index.php?update=success");
