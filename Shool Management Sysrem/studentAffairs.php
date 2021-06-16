<?php

class studentAffairs{
public function addStudent($fiN, $sN, $tN, $fN, $nN, $bD, $g, $n, $r, $p, $m, $a, $ph, $f, $c, $rN){
    include 'Student.php';
     $st = new Student();
     $st->insertStudent($fiN, $sN, $tN, $fN, $nN, $bD, $g, $n, $r, $p, $m, $a, $ph, $f, $c, $rN);
 }
 private function checkStudent($id){
    include "dB.php";
    $flag = true;
    $sql = mysqli_query($conn, "SELECT ID FROM Students WHERE ID='".$id."'");
    if(mysqli_num_rows($sql) > 0){
      return $flag; 
    }
    $flag = false;
    return $flag;
 }
 public function removeStudent($id){
    include "dB.php";
    if($this->checkStudent($id)){
        mysqli_query($conn, "DELETE FROM Students WHERE ID='$id'");
        echo '<script>alert("Done, student has been removed successfully")</script>';
        return;
    }
    else{
        echo '<script>alert("Error, student has not been removed")</script>';
        return;
    }
  }
  public function updateStudent($id, $na, $nN, $bD, $aI,  $g, $n, $r, $p, $m, $a, $ph, $f, $c, $rN){
    include 'dB.php';
    echo 'Name: '.$na. '<br>';
    echo 'registrationNumber: '.$rN. '<br>';
    echo 'nationality: '.$n. '<br>';
    echo 'religion: '.$r. '<br>';
    echo 'placeOfBirth: '.$p. '<br>';
    echo 'dateOfBirth: '.$bD. '<br>';
    echo 'ageInOctober: <br>';
    echo 'motherName: '.$m. '<br>';
    echo 'address: '.$a. '<br>';
    echo 'phoneNumber: '.$ph. '<br>';
    echo 'fatherJob: '.$f. '<br>';
    echo 'gender: '.$g. '<br>';
    echo 'nationalNumber: '.$nN. '<br>';
    echo 'class: '.$c. '<br>';
    

       mysqli_query($conn, "UPDATE Students SET name='$na',
                                             registrationNumber='$rN',
                                             nationality='$n',
                                             religion='$r',
                                             placeOfBirth='$p',
                                             dateOfBirth='$bD',
                                             ageInOctober='$aI',
                                             motherName='$m',
                                             address='$a',
                                             phoneNumber='$ph',
                                             fatherJob='$f',
                                             gender='$g',
                                             nationalNumber='$nN',
                                             class='$c' WHERE ID='".$id."'");

    echo '<script>alert("Done, Data Updated Successfully")</script>';
    return;
}   
}
?>