<?php
 
 class mysql {
     public function Connect(){
        $con=mysqli_connect("178.128.91.86", "user", "test","myDb");
        $con->query("SET NAMES UTF8");
        return $con;       
     }

     public function CloseDb($con){
      $con->close();
     }

     public function SelectStartForm($con,$table){
        $sql="SELECT * FROM $table ORDER BY ID DESC";
        $rs=$con->query($sql); 
      //  $row = $rs->fetch_assoc();
        return $rs;
    }

    public function SelectStartFormWhere1($con,$table,$column,$value){
        $sql="SELECT * FROM $table WHERE $column = '$value'";
        $rs=$con->query($sql); 
      //  $row = $rs->fetch_assoc();
        return $rs;
    }

    public function InsertTitle($con,$value){
      $sql = "INSERT INTO `title` (`ID`, `Name`) VALUES (NULL, '$value')";
      $rs = $con->query($sql);
      return $rs;
    }

    public function DeleteById($con,$table,$column,$value){
      $sql = "DELETE FROM `$table` WHERE `$table`.`$column` = $value";
      $rs = $con->query($sql);
      return $rs;
    }

    public function InsertContentType1($con,$id_title,$name,$filepdf){
      $sql = "INSERT INTO `contenttype1` (`ID`, `title_id`, `name`, `filePDF`) VALUES (NULL, '$id_title', '$name', '$filepdf')";
      $rs = $con->query($sql);
      return $rs;
    }

    public function Edit01($con,$table,$column,$id,$value){
      $sql = "UPDATE $table SET `$column` = '$value' WHERE ID = '$id'";
      $rs = $con->query($sql);
      return $rs;
    }

    public function Edit02($con,$table,$column1,$column2,$id,$value1,$value2){
      $sql = "UPDATE $table SET `$column1` = '$value1',`$column2` = '$value2'  WHERE ID = '$id'";
      $rs = $con->query($sql);
      return $rs;
    }

    public function insertOfSevenColumn($con,$table,$column1,$column2,$column3,$column4,$column5,$column6,$column7,$value1,$value2,$value3,$value4,$value5,$value6,$value7){
      $sql = "INSERT INTO `$table` (`$column1`, `$column2`, `$column3`, `$column4`, `$column5`, `$column6`, `$column7`) VALUES ('$value1', '$value2', '$value3', '$value4', '$value5', '$value6', '$value7') ";
      $query = $con->query($sql);
      return $query;
    }

    public function UpdateSixColumn($con,$table,$column1,$column2,$column3,$column4,$column5,$column6,$value1,$value2,$value3,$value4,$value5,$value6,$where,$id){
      $sql = "UPDATE $table SET $column1 = '$value1', $column2 = '$value2', $column3 = '$value3', $column4 = '$value4', $column5 = '$value5', $column6 = '$value6' WHERE $where = '$id' ";
      $query = $con->query($sql);
      return $query;
    }

    public function ViewByOneColumn($con,$table,$column,$value){
      $sql = "SELECT * FROM $table WHERE $column = '$value'";
      $query = $con->query($sql);
      return $query;
    }

    public function UpdateSevenColumn($con,$table,$column1,$column2,$column3,$column4,$column5,$column6,$column7,$value1,$value2,$value3,$value4,$value5,$value6,$value7,$where,$id){
      $sql = "UPDATE $table SET $column1 = '$value1', $column2 = '$value2', $column3 = '$value3', $column4 = '$value4', $column5 = '$value5', $column6 = '$value6', $column7 = '$value7' WHERE $where = '$id' ";
      $query = $con->query($sql);
      return $query;
    }

 } 


?>