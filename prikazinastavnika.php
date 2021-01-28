<?php
if (!isset ($_GET["nastavnikid"])){
echo "Parametar ID nije prosleđen!";
} else {
$pomocna=$_GET["nastavnikid"];
//uspostavljanje konekcije
include "konekcija.php";
//citanje podataka o nastavniku
$sql="SELECT * FROM nastavnik WHERE nastavnikid='".$pomocna."'";

$rezultat = $mysqli->query($sql);
//ispis naziva kolona u tabeli
echo "<table border='1'>
<tr>
<th>NastavnikID</th>
<th>Ime</th>
<th>Prezime</th>
</tr>";

while($red = $rezultat->fetch_object()){
 echo "<tr>";
 echo "<td>" . $red->nastavnikid . "</td>";
 echo "<td>" . $red->imen . "</td>";
 echo "<td>" . $red->prezimen . "</td>";

 echo "</tr>";
 }
echo "</table>";

$mysqli->close();
}
?>
