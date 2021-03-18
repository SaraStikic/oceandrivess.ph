<?php
    include 'classes/dbh.class.php';
    
    //include 'test.class.php'
$orderBy = '';

if (isset($_GET['sort'])) {
  if ($_GET['sort'] == 'rastuce') {
    $orderBy = ' order by n.ime asc';
  }
  if ($_GET['sort'] == 'opadajuce') {
    $orderBy = ' order by n.ime desc';
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
<?php include 'header.php'; ?>
<br>

    <section id ="feature" class="section-padding">
      <div class="container" style="width:300px" align="center">
        <div class="row">
          <div class="header-section text-center">
            <h2>Dostupni nastavnici</h2>
            <p>Sortiraj: 

            <a href="nastavnici.php?sort=rastuce">Rastuce-naziv nastavnika</a>
            |
            <a href="nastavnici.php?sort=opadajuce">Opadajuce-naziv nastavnika</a>
            <p><a href="izaberiNastavnika.php" class="btn btn-primary btn-lg btn-block login-button">Odabir nastavnika <i class="fa fa-plus"></i></a>
          </p>
            <hr class="bottom-line">
            <table class="table table-hover" >
              <thead>
                <tr >
                  <th class="text-center">R.b.</th>
                  <th class="text-center">Ime</th>
                  <th class="text-center"> Prezime</th>
                  </tr>
              </thead>
              <tbody>
              <?php
             $conn = new Connection();
             $conn->open();
             $rez=$conn->query("SELECT * FROM nastavnik n". $orderBy);
             $brojac=null;
               foreach ($rez as $nast) {
             $brojac++;
             ?>
                      <tr>                      
                          <td><?= $brojac ?></td>
                          <td><?php echo $nast["ime"]; ?></td>
                          <td><?php echo $nast["prezime"]; ?></td>
                      </tr>
                      
                      <?php
                     
               } 
                 ?>
                      
                   
                    
                    
               </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
   
    <?php
?> 
<?php include 'footer.php'; ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>


