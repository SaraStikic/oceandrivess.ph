<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Validacija forme</title>
<script type="text/javascript" src="provera.js"></script>
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

<form>
<h1>Proveri da li si se već registrovao u bazi</h1>
<br>
<h2>Podaci o učeniku</h2>
<br>
<b>ID učenika</b> 
<input type="text" name="id" id="id" onblur="proveri(document.getElementById('id').value)"><div  id="user"><i>Informacija o validnosti id učenika</i> </div>
<br>
<b>Ime učenika</b> 
<input type="text" name="ime" id="">
<br>
<br>
<b>Prezime učenika</b> 
<input type="text" name="prezime">
<br>
<br>
<input type="submit" value="Registruj" name="submit"> 
<input type="reset" value="Obrisi podatke" namer="reset">
</form>
<?php include 'footer.php'; ?>

</body>
</html>
