<?php
include "User.php";

class Student extends User{
    private $nationality;
    private $religion;
    private $placeOfBirth;
    private $motherName;
    private $address;
    private $phoneNumber;
    private $fatherJob;
    private $registrationNumber;
    private $class;

    public function getAgeInOctober(){
    $bD = parent::getBirthDate();
    $token = strtok($bD, "/");
    $bN = array(); 
    $i=0;
    while ($token !== false){
        $bN[] = $token;
        $token = strtok("/");
}
if($bN[0] > 1){
    $bN[0] = ($bN[0] - 1) + 30;
}
else if($bN[0] == 1){
    $bN[0] = date('d');
}
if($bN[1] > 10){
    $bN[1] = $bN[1] - 10;
}
else if($bN[1] < 10){
    $bN[1] = 10 - $bN[1];
}
if($bN[2] > date('Y')){
    $bN[2] = $bN[2] - date('Y');
}
else if($bN[2] < date('Y')){
    $bN[2] = date('Y') - $bN[2];
}
return $bN[2].' Year '. $bN[1]. ' Month '.$bN[0]. ' Day ';
}

public function getMotherName(){
    return $this->motherName;
}
public function getClass(){
    $this->class;
}

public function getAddress(){
    return $this->address;
}
public function getFatherJob(){
    return $this->fatherJob;
}
public function getNationality(){
        return $this->nationality;
    }
public function getPhoneNumber(){
        return $this->phoneNumber;
    }
public function getReligion(){
        return $this->religion;
    }
public function getPlaceOfBirth(){
        return $this->placeOfBirth;
}
public function getRegistrationNumber(){
    return $this->registrationNumber;
}
private function validate(){
    $flag = true;
  
    if($this->nationality == '' || $this->religion == '' || $this->placeOfBirth == '' || 
       $this->motherName == '' ||  $this->address == ''    || $this->phoneNumber == '' ||
       $this->fatherJob == '' || $this->registrationNumber == '' || $this->class == ''){
        return $flag;
    }
    if (strlen($this->phoneNumber) >= 12 || strlen($this->phoneNumber) <= 10){
        return $flag;
    }
    else{
        $flag = false;
        return $flag;
    }
}
 
public function insertStudent($fiN, $sN, $tN, $fN, $nN, $bD, $g, $n, $r, $p, $m, $a, $ph, $f, $c, $regis){
        parent::setData($fiN, $sN, $tN, $fN, $nN, $bD, $g, '1');
        $this->nationality = $n;
        $this->religion = $r;
        $this->placeOfBirth = $p; 
        $this->motherName = $m;
        $this->address = $a;
        $this->phoneNumber = $ph;
        $this->fatherJob = $f;
        $this->class = $c;
        $this->registrationNumber = $regis;
        if($this->validate()){
            echo '<script>alert("Error, Data Is Not Correct Validate Data")</script>';
            return;
        }
        if(parent::validationData()){
            echo '<script>alert("Error, Data Is Not Correct Validation Data")</script>';
            return;
        }
        else{
        $this->insertDataIntoDataBase();
      }
    }
    private function insertDataIntoDataBase(){
        include "dB.php";
            $fullName = parent::getFullName();
            $nN = parent::getNationalNumber();
            $bD = parent::getBirthDate();
            $g = parent::getGender();
            $rN = $this->getRegistrationNumber();
            $N = $this->getNationality();
            $R = $this->getReligion();
            $pB = $this->getPlaceOfBirth();
            $aO = $this->getAgeInOctober();
            $mN = $this->getMotherName();
            $A = $this->getAddress();
            $pN = $this->getPhoneNumber();
            $fJ = $this->getFatherJob();
            $c = $this->getClass();
            if($this->checkStudent($fullName, $nN)){
                echo '<script>alert("Error, Student Already Inserted Before")</script>';
                return;
            }
       else{
        mysqli_query($conn, "INSERT INTO Students (name, registrationNumber, 
            nationality, religion, 
            placeOfBirth, dateOfBirth, 
            ageInOctober, motherName, 
            address, phoneNumber, 
            fatherJob, gender, 
            nationalNumber, class)
            VALUES 
    ('$fullName', '$rN', '$N', '$R', 
    '$pB', '$bD', '$aO', '$mN', '$A', '$pN', 
    '$fJ', '$g', '$nN', '$c')");
        echo '<script>alert("Done, Student Added Successfully")</script>';
        return;
    }
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
}
?>