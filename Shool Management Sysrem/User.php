<?php
class User{
    //Comment o
    private $firstName;
    private $secondName;
    private $thirdName;
    private $fourthName;
    private $nationalNumber;
    private $birthDate;
    private $gender;
    private $type;

public function setData($firstName, $secondName, $thirdName, $fourthName, $nationalNumber, $birthDate, $gender, $type){
    $this->firstName = $firstName;
    $this->secondName = $secondName;
    $this->thirdName = $thirdName;
    $this->fourthName = $fourthName;
    $this->nationalNumber = $nationalNumber;
    $this->birthDate = $birthDate;
    $this->gender = $gender;
    $this->type = $type;
}
public function getFirstName(){
    return $this->firstName;
}
public function getSecondName(){
    return $this->secondName;
}
public function getThirdName(){
    return $this->thirdName;
}
public function getFourthName(){
    return $this->fourthName;
}
public function getNationalNumber(){
    return $this->nationalNumber;
}
public function getBirthDate(){
    return $this->birthDate;
}
public function getGender(){
    return $this->gender;
}
public function getType(){
    return $this->type;
}

public function getFullName(){
    return ($this->firstName.$this->secondName.$this->thirdName.$this->fourthName);
  }

protected function validationDataStudent(){
    $flag = true;
    if($this->firstName == '' || 
       $this->secondName == '' || 
       $this->thirdName == '' || 
       $this->fourthName == '' ||
       $this->gender == ''||
       $this->birthDate == '' ||
       $this->type == ''){
       return $flag;
    }
    else if (strlen($this->nationalNumber) >= 15 || strlen($this->nationalNumber) <= 13){
        return $flag;
    }
    include "dB.php";   
    $sql = mysqli_query($conn, "SELECT nationalNumber FROM Students");
    while($row = mysqli_fetch_array($sql)){
        if($row['nationalNumber'] == $this->nationalNumber){
            return $flag;
        }
    }
        $flag = false;
        return $flag;
   }
}
?>