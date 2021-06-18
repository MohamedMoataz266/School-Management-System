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
  public function updateStudent($id, $na, $nN, $bD,   $g, $n, $r, $p, $m, $a, $ph, $f, $c, $rN){
    include 'dB.php';
   

       mysqli_query($conn, "UPDATE Students SET name='$na',
                                             registrationNumber='$rN',
                                             nationality='$n',
                                             religion='$r',
                                             placeOfBirth='$p',
                                             dateOfBirth='$bD',
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