<?php include_once 'includes/dbh.php'; 

if(isset($_POST ['submit'])){
    $str=$_POST ['imen'];
    $sth=$conn->prepare("SELECT * FROM 'nastavnik' WHERE imen ='$str'");

    $sth->setFetchMode(PDO::FETCH_OBJ);
    $sth->execute();

    if($row=$sth->fetch()){
        ?>

        <br> <br> <br>
        <table>
            <tr>
            <th>Ime</th>
            <th>Prezime</th>
            </tr>
            <tr>
                <th><?php echo $row->Ime; ?>  </th>
                <th><?php echo $row->Prezime; ?>  </th>

            </tr>
        </table>

        <?php
    }
    else{
        echo "Ime ne postoji";
    }

}

