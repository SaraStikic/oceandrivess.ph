<?php
    include 'dbh.class.php';
    //include 'classes/test.class.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cenovnik</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<style>
body
 {
    background: linear-gradient(rgba(0,0,0,0.5),#a9c0bd),url(imgs/glavna.jpg);
  background-size: cover;
  background-size: center;
  height:100vh;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  padding-bottom: 100px;
  font-size:20px;
  text-align: center;
  margin: 15px 300px 5px 200px;
}

</style>
<body>

    <h1> Cena časova</h1>
   
<?php

$con = new Connection();
$con->open();
$con->query("SELECT * FROM cenovnik");
$con->close();

?>

 

</body>
</html>


