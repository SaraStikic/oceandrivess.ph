<?php
    include 'dbh.class.php';
    //include 'classes/test.class.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cenovnik</title>
</head>
<style>
body
 {
  background: linear-gradient(white,gray);
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  padding-bottom: 100px;
  font-size:15px;
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