<?php
    include 'classes/dbh.class.php';

    $poruka = '';
if (isset($_POST["unesi"])) {

  include("nastavnikClass.php");
  $nast = new Nast($db);

  if ($nast->rezervacija()) {
    $poruka = 'Uspesna rezervacija';
  } else {
    $poruka = 'Greska pri cuvanju';
  }
}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Spisak nastavnika</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    
</head>
<style>

body {
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

</style>
<body>
<br><br><br><br><br><br><br>
<h2>Izbor Nastavnika</h2>
            <p><?php
              echo ($poruka);
              ?></p>
<div class="form-group">
                  <label for="domacin" class="cols-sm-2 control-label"></label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                      <select id="nastavnik" class="form-control" name="nastavnik" >
                      <tbody>
              <?php
             $conn = new Connection();
             $conn->open();
             $rez=$conn->query("SELECT * FROM nastavnik ");
             $brojac=null;
               foreach ($rez as $nast) {
             ?>
               <option value="<?php echo ($nast['nastavnikid']); ?>"><?php echo ($nast['ime']); ?><?php echo ($nast['prezime']); ?></option>
                                <?php
               
               } 
                 ?> 
               </tbody>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group ">
                  <button type="submit" name="unesi" id="button" class="btn btn-primary btn-lg btn-block login-button">Rezervisi nastavnika</button>
                </div>


</body>
</html>