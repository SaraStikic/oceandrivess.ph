<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="pronadji.js"></script>
</head>
<style>
body {
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
<?php include 'header.php'; ?>
<?php
include "konekcija.php";
$sql="SELECT * FROM nastavnik ORDER BY imen ASC";
$rezultat = $mysqli->query($sql);
?>
<form> 
<b>Izaberi nastavnika:</b>
<select name="nastavnik" onchange="PrikaziNastavnika(this.value)">
<?php
while($red = $rezultat->fetch_object()){
?>
<option value="<?php echo $red->nastavnikid;?>"><?php echo $red->imen;?></option>
<?php
}
?>
</select>
</form>
<p><div id="popuni"><b>Podaci o selektovanom nastavniku će biti prikazani ovde. Stranica se ne učitava ponovo.</b></div></p>
<?php
$mysqli->close();
?>
<?php include 'footer.php'; ?>
</body>
</html>
