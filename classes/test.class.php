<? php

class Test extends Dbh{

     public function getCenovnik(){
        $sql="SELECT * FROM cenovnik";
        $stmt=$this->connect()->query($sql);
        while($row=$stmt->fetch()){
           // echo $row['idc']." ";
            echo $row['trajanje'].' ';
            echo $row['cena'].'<br>';
        }

    }

    public function getCenovnikStmt($trajanje, $cena){
        $sql="SELECT * FROM cenovnik WHERE trajanj=? AND cena=?";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$trajanje, $cena]);
        $names=$stmt->fetchAll();

        foreach(names as name){
            echo $row['idc']." ";
            echo $row['trajanje']." ";
            echo $row['cena']."<br>";
        }

    }

}