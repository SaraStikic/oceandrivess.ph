<?php include_once 'includes/dbh.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Časovi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <style>body {
  
  background: linear-gradient(rgba(0,0,0,0.5),#a9c0bd),url(imgs/glavna.jpg);
  background-size: cover;
  background-size: center;
  height:200vh;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  padding-bottom: 100px;
  font-size:20px;
  text-align: center;
  margin: 15px 300px 5px 200px;
}
#prijavaForma {
  background: linear-gradient(rgba(0,0,0,0.5),#a9c0bd),url(imgs/glavna.jpg);
  background-size: cover;
    background-size: center;
    height:100vh;
    width:400px;
    margin-top: 30px;
    padding:10px;
    background: #e6e6e6;
    float:left;
    border-radius: 10px;
    
    
}
</style>
<?php include 'header.php'; ?>


<h1>Časovi</h1>
<a href="classes/cenovnik.php">
  <button>Cenovnik</button>
</a>
<p>U našoj školi imaš mogućnost da biraš da li želiš online ili časove uživo.</p>
<hr>
<h2>Online časovi</h2>
<p>Online časovi su dostupni svima i na njima se radi teoriska osnova kako se rukuje 
foto-opremom i na koji način fotoaparat radi.</p>
<img src="imgs/slika2.JPG" alt="" width="600" height="400">
<hr>
<h2>Časovi uživo</h2>
<p>Časovi uživo,To su kursevi koji za cilj imaju obučavanje pojedinaca i timova da foto-aparat koriste
 kao alat za pravljenje tačno onakvih fotografija kakve žele i kakve su im potrebne.
Grupni kursevi sprovode se u grupama od najviše deset polaznika,
u terminima koji variraju od kursa do kursa.
Broj polaznika po grupi je ograničen zato što svakome želimo da posvetimo pažnju.
Individualni kursevi uvek su – baš kao i timske radionice,
u potpunosti skrojeni prema potrebama naših polaznika. </p>
<hr>

<div id="prijavaFoma">
  <h4>Želiš da budeš deo našeg tima? <br>
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
</div>
<!-- ************-->
<form action="izmeni.php"  method="POST">
<input type="text" name="ucenikid" placeholder="Unesi ID"/> <br>
<input type="text" name="ime" placeholder="Unesi Ime"/><br>
<input type="text" name="prezime" placeholder="Unesi Prezime"/><br>
<button type="submit", name="update">Izmeni unete podatke</button>
<!--<input type="submit" name="update" value="Izmeni unete podatke"/>-->
</form>
<?php
/*
$sqll="SELECT * FROM ucenik;";
$resultt= mysqli_query($conn, $sqll);
$resulttCheck= mysqli_num_rows($resultt);

if($resulttCheck > 0){
  while($row=mysqli_fetch_assoc($resultt)){
    
    echo "
    <tr>
    <td>".$row['ucenikid']." </td>
     <td>".$row['ime']." </td>
     <td>".$row['prezime']." </td>
     <td> <a href='izbrisi.php?rn=$row[ucenikid]'> Delete</td>;
      </tr>
      ";
  }
}*/?>
<form action="izbrisi.php"  method="POST">
<input type="text" name="ucenikid" placeholder="Unesi ID" required/> <br>
<!--<input type="text" name="ime" placeholder="Unesi Ime"/><br>
<input type="text" name="prezime" placeholder="Unesi Prezime"/><br>-->
<!--<button type="submit", name="delete">Izbriši učenika</button>-->
<input type="submit" name="delete" value="Izbriši učenika"/>
</form>



<?php include 'footer.php'; ?>
</body>
</html>

