<?php
class studentAffairs{
    private $firstName;
    private $secondName;
    private $thirdName;
    private $fourthName;
    private $registrationNumber;
    private $nationality;
    private $religion;
    private $placeOfBirth;
    private $dateOfBirth;
    private $dateFromOctober; // lsa 3ayz at2aakd mnha 
    private $motherName;
    private $address;
    private $phoneNumber;
    private $fatherJob;
    private $gender;
    private $nationalNumber;
    private $class;
    
    

    public function validationData(){
        $flag = true;
        if($this->firstName == '' || 
           $this->secondName == '' || 
           $this->thirdName == '' || 
           $this->fourthName == '' ||
           $this->registrationNumber == '' ||
           $this->nationality == ''||
           $this->religion == '' ||
           $this->placeOfBirth == ''||
           $this->dateOfBirth == ''||
           $this->dateFromOctober == '' ||
           $this->motherName == ''||
           $this->address == ''||
           $this->fatherJob == ''||
           $this->gender == ''){
           return $flag;
        }
        else if (strlen($this->nationalNumber) >= 15 || 
                 strlen($this->nationalNumber) <= 13 ||
                 strlen($this->phoneNumber) >= 13    ||
                 strlen($this->phoneNumber) <= 10){
            return $flag;
        }
        include "dB.php";   
        $sql = mysqli_query($conn, "SELECT nationalNumber FROM Registration");
        while($row = mysqli_fetch_array($sql)){
            if($row['nationalNumber'] == $this->nationalNumber){
                return $flag;
            }
        }
            $flag = false;
            return $flag;
    }

public function setFirstName($firstName){
    $this->firstName = $firstName;
}
public function setSecondName($secondName){
    $this->secondName = $secondName;
}
public function setThirdName($thirdName){
    $this->thirdName = $thirdName;
}
public function setFourthName($fourthName){
    $this->fourthName = $fourthName;
}
public function getName(){
    return ($this->firstName.$this->secondName.$this->thirdName.$this->fourthName);
}

//full name return
    
    public function setRegistrationNumber($registrationNumber){
        $this->registrationNumber = $registrationNumber;
    }

    public function getRegistrationNumber(){
        return $this->registrationNumber;
    }

    public function setNationality($nationality){
        $this->nationality = $nationality;
    }

    public function getNationality(){
        return $this->nationality;
    }

    public function setReligion($religion){
        $this->religion = $religion;
    }

    public function getReligion(){
        return $this->religion;
    }

    public function setPlaceOfBirth($placeOfBirth){
        $this->placeOfBirth = $placeOfBirth;
    }

    public function getPlaceOfBirth(){
        return $this->placeOfBirth;
    }

    public function setDateOfBirth($dateOfBirth){
        $this->dateOfBirth = $dateOfBirth;
    }
    public function getDateOfBirth(){
        return $this->dateOfBirth;
    }
    public function getAgeInOctober(){

        $token = strtok($this->dateOfBirth, "/");
        $bN = array(); 
        while ($token !== false){
            $bN[] = $token;
            $token = strtok("/");
        }
    if($bN[0] > 1){
        $bN[0] = $bN[0] - 1 + 30;
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
            return $bN;
        }


    public function setMotherName($motherName){
        $this->motherName = $motherName;
    }

    public function getMotherName(){
        return $this->motherName;
    }

    public function setAddress($address){
        $this->address = $address;
    }

    public function getAddress(){
        return $this->address;
    }

    public function setPhoneNumber($phoneNumber){
        $this->phoneNumber = $phoneNumber;
    }
    public function getPhoneNumber(){
        return $this->phoneNumber;
    }

    public function setFatherJob($fatherJob){
        $this->fatherJob = $fatherJob;
    }
    public function getFatherJob(){
        return $this->fatherJob;
    }

    public function setGender($gender){
        $this->gender = $gender;
    }
    public function getGender(){
        return $this->gender;
    }

    public function setNationalNumber($nationalNumber){
        $this->nationalNumber = $nationalNumber;
    }

    public function getNationalNumber(){
        return $this->nationalNumber;
    }

    public function setClass($class){
        $this->class = $class;
    }

    public function getClass(){
        return $this->class;
    }

}
?>
