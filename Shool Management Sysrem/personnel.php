<?php

class personnelAffairs{
public function addProfession($eN, $c, $aN, $r, $n, $g, $bD, $nN, $fN, $addr, $pN, $q, $gY, $gG, $expY, $j, $spec, $dep, $cDate, $iNo, $iDate, $iEDate, $sR, $eS, $notes){
    include 'Profession.php';
     $st = new Profession();
     $st->insertProfession($eN, $c, $aN, $r, $n, $g, $bD, $nN, $fN, $addr, $pN, $q, $gY, $gG, $expY, $j, $spec, $dep, $cDate, $iNo, $iDate, $iEDate, $sR, $eS, $notes);
 }
 private function checkProfession($id){
    include "dB.php";
    $flag = true;
    $sql = mysqli_query($conn, "SELECT ID FROM personnelaffairs WHERE ID='".$id."'");
    if(mysqli_num_rows($sql) > 0){
      return $flag; 
    }
    $flag = false;
    return $flag;
 }
 public function removeProfession($id){
    include "dB.php";
    if($this->checkProfession($id)){
        mysqli_query($conn, "DELETE FROM personnelaffairs WHERE ID='$id'");
        echo '<script>alert("Done, Employee Removed Successfully")</script>';
        return;
    }
    else{
        echo '<script>alert("Error, Employee Not Removed")</script>';
        return;
    }
  }   
}
?>