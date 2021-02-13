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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    
</head>
<body>
<style>body{
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

    <h1> Cenovnik</h1>
    <section id ="feature" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Cena časova</h2>

            <hr class="bottom-line">
            <table class="table table-hover" >
              <thead>
                <tr >
                  <th class="text-center">Redni broj</th>
                  <th class="text-center">Trajanje časa</th>
                  <th class="text-center"> Cena</th>
                  </tr>
              </thead>
              <tbody>
              <?php
              $con = new Connection();
              $con->open();
              $con->query("SELECT * FROM cenovnik");
                foreach ($con as $cena) {
              $brojac++;
              ?>
                       <tr>                      
                           <td><?php echo ($brojac); ?></td>
                           <td><?php echo ($cena["trajanje"]); ?></td>
                           <td><?php echo ($cena["cena"]); ?></td>
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
$con->close(); 

?>



 

</body>
</html>


