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
        echo '<script>alert("Done, Employee has been removed successfully")</script>';
        return;
    }
    else{
        echo '<script>alert("Error, Employee has not been removed")</script>';
        return;
    }
  }  
  public function updateProfession($id,$eN, $c, $aN, $r, $n, $g, $bD, $nN, $fN, $addr, $pN, $q, $gY, $gG, $expY, $j, $spec, $dep, $cDate, $iNo, $iDate, $iEDate, $sR, $eS, $notes){
    include 'dB.php';
    mysqli_query($conn, "UPDATE personnelaffairs SET name ='$ed', 
                                                code='$c', 
                                                 arabicName='$aN',
                                                  religion='$r',
                                                  nationality='$n',
                                                  gender='$g',
                                                  birthDate='$bD',
                                                  nationalNumber='$nN',
                                                  foreginerNumber='$fN',
                                                  address='$addr',
                                                  phoneNumber='$pN',
                                                  qualification='$q',
                                                  graduationYear='$gY',
                                                  graduationGrade='$gG',
                                                  expYears='$expY',
                                                  job='$j',
                                                  specialization='$spec',
                                                  department='$dep',
                                                  contractDate='$cDate',
                                                  insuranceNumber='$iNo',
                                                  insuranceDate='$iDate',
                                                  insuranceEndDate='$iEDate',
                                                  systemRole='$sR',
                                                  educationSystem='$eS',
                                                  notes='$notes'
                                                WHERE email='".$_SESSION['email']."' 
                                                AND ID='".$id."'");
    echo '<script>alert("Done, Video Updates Successfully")</script>';
    return;
}
} 


?>