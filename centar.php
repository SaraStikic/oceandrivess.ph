<?php
include_once 'includes/dbh.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h4>Potrebna ti je pomoć oko matematike? <br>
<i>Prijavi se u formi ispod:</i></h4>
<form action="includes/signup.inc.php" method="POST">
<input type="text", name="idu", placeholder="IDUcenika">
<br>
<input type="text", name="first", placeholder="Ime">
<br>
<input type="text", name="last", placeholder="Prezime">
<br>
<button type="submit", name="submit">Prijavi se</button>

</form>
<tt><h6>Radujemo se našem druženju</h6></tt>

</body>
</html>