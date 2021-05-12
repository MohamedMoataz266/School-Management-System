<?php

class studentAffairs{
public function addStudent($fiN, $sN, $tN, $fN, $nN, $bD, $g, $n, $r, $p, $m, $a, $ph, $f, $c, $rN){
    include 'Student.php';
     $st = new Student();
     $st->insertStudent($fiN, $sN, $tN, $fN, $nN, $bD, $g, $n, $r, $p, $m, $a, $ph, $f, $c, $rN);
 }
 private function checkStudent($name, $nationalNumber){
    include "dB.php";
    $flag = true;
    $sql = mysqli_query($conn, "SELECT name, nationalNumber FROM Students WHERE name='".$name."' AND nationalNumber= '".$nationalNumber."'");
    if(mysqli_num_rows($sql) > 0){
      return $flag; 
    }
    $flag = false;
    return $flag;
 }
 public function removeStudent($name, $nationalNumber){
    include "dB.php";
    if($this->checkStudent($name, $nationalNumber)){
        mysqli_query($conn, "DELETE FROM Students WHERE nationalNumber='$nationalNumber' AND name='$name'");
        echo '<script>alert("Done, Student Removed Successfully")</script>';
           return;
    }
    else{
        echo '<script>alert("Error, Data Is Not True")</script>';
        return;
    }
}   
}
?>