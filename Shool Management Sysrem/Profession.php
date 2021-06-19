<?php
include "UserTwo.php";

class Profession extends UserTwo{
    private $religion;
    private $nationality;
    private $gender;
    private $birthDate;
    private $nationalNumber;
    private $foreignerNumber;
    private $address;
    private $phoneNumber;
    private $qualification;
    private $graduationYear;
    private $graduationGrade;
    private $experienceYears;
    private $job;
    private $specialization;
    private $department;
    private $contractDate;
    private $insuranceNumber;
    private $insuranceDate;
    private $insuranceEndDate;
    private $systemRole;
    private $educationSystem;
    private $notes;

    
public function getReligion(){
    return $this->religion;
}
public function getNationality(){
    return $this->nationality;
}
public function getGender(){
    return $this->gender;
}
public function getBirthDate(){
    return $this->birthDate;
}
public function getNationalNumber(){
    return $this->nationalNumber;
}
public function getForeignerNumber(){
    return $this->foreignerNumber;
}
public function getAddress(){
    return $this->address;
}
public function getPhoneNumber(){
    return $this->phoneNumber;
}
public function getQualification(){
    return $this->qualification;
}
public function getGraduationYear(){
    return $this->graduationYear;
}
public function getGraduationGrade(){
    return $this->graduationGrade;
}
public function getExperiencedYears(){
    return $this->experienceYears;
}
public function getJob(){
    return $this->job;
}
public function getSpecialization(){
    return $this->specialization;
}
public function getDepartment(){
    return $this->department;
}
public function getContractDate(){
    return $this->contractDate;
}
public function getInsuranceNumber(){
    return $this->insuranceNumber;
}
public function getInsuranceDate(){
    return $this->insuranceDate;
}
public function getInsuranceEndDate(){
    return $this->insuranceEndDate;
}
public function getSystemRole(){
    return $this->systemRole;
}
public function getEducationSystem(){
    return $this->educationSystem;
}
public function getNotes(){
    return $this->notes;
}
private function validate(){
    include 'dB.php';
    $flag = true;
    if($this->religion == '' ||
       $this->nationality == ''||
       $this->gender == '' ||
       $this->birthDate == '' ||
       $this->nationalNumber == '' || 
       $this->foreignerNumber == '' || 
       $this->address == '' || 
       $this->phoneNumber == '' ||
       $this->qualification == ''||
       $this->graduationYear == '' ||
       $this->graduationGrade == '' ||
       $this->experienceYears == '' || 
       $this->job == '' || 
       $this->specialization == '' || 
       $this->department == '' ||
       $this->contractDate == ''||
       $this->insuranceNumber == '' ||
       $this->insuranceDate == '' ||
       $this->insuranceEndDate == '' || 
       $this->systemRole == '' || 
       $this->educationSystem == '' || 
       $this->notes == ''){
        return $flag;
    }
    if (strlen($this->phoneNumber) >= 12 || strlen($this->phoneNumber) <= 10){
        return $flag;
    }
    $sql = mysqli_query($conn, "SELECT name, nationalNumber FROM personnelAffairs WHERE name='".$this->getName()."' OR nationalNumber='".$this->getNationalNumber()."'");
    if(mysqli_num_rows($sql) > 0){
        echo '<script>alert("Error, data entry is not correct")</script>';
        return;
    }
    else{
        $flag = false;
        return $flag;
    }
}
 
public function insertProfession($eN, $c, $aN, $r, $n, $g, $bD, $nN, $fN, $addr, $pN, $q, $gY, $gG, $expY, $j, $spec, $dep, $cDate, $iNo, $iDate, $iEDate, $sR, $eS, $notes){
        parent::setData($eN, $c, $aN, $r, $n, $g, $bD, $nN, $fN, $addr, $pN, $q, $gY, $gG, $expY, $j, $spec, $dep, $cDate, $iNo, $iDate, $iEDate, $sR, $eS, $notes);
        $this->religion = $r;
       $this->nationality = $n;
       $this->gender = $g;
       $this->birthDate = $bD;
       $this->nationalNumber = $nN; 
       $this->foreignerNumber = $fN; 
       $this->address = $addr; 
       $this->phoneNumber = $pN;
       $this->qualification = $q;
       $this->graduationYear = $gY;
       $this->graduationGrade = $gG;
       $this->experienceYears = $expY; 
       $this->job = $j;
       $this->specialization = $spec;
       $this->department = $dep;
       $this->contractDate = $cDate;
       $this->insuranceNumber = $iNo;
       $this->insuranceDate = $iDate;
       $this->insuranceEndDate = $iEDate; 
       $this->systemRole = $sR; 
       $this->educationSystem = $eS; 
       $this->notes = $notes;
        if($this->validate()){
            echo '<script>alert("Error, Data is not true")</script>';
            return;
        }
        if(parent::validationDataProfession()){
            echo '<script>alert("Error, Data is not True")</script>';
            return;
        }
        else{
        $this->insertDataIntoDataBase();
      }
    }
    private function insertDataIntoDataBase(){
        include "dB.php";
            $eN = parent::getName();
            $c = parent::getCode();
            $aN = parent::getArabicName();
            $r = $this->getReligion();
            $n = $this->getNationality();
            $g = $this->getGender();
            $bD = $this->getBirthDate();
            $nN = $this->getNationalNumber();
            $fN = $this->getForeignerNumber();
            $addr = $this->getAddress();
            $pN = $this->getPhoneNumber();
            $q = $this->getQualification();
            $gY = $this->getGraduationYear();
            $gG = $this->getGraduationGrade();
            $expY = $this->getExperiencedYears();
            $j = $this->getJob();
            $spec = $this->getSpecialization();
            $dep = $this->getDepartment();
            $cDate = $this->getContractDate();
            $iNo = $this->getInsuranceNumber();
            $iDate = $this->getInsuranceDate();
            $iEDate = $this->getInsuranceEndDate();
            $sR = $this->getSystemRole();
            $eS = $this->getEducationSystem();
            $notes = $this->getNotes();

            if($this->checkProfession($eN, $nN)){
                echo '<script>alert("Error, someone has used those credentials before")</script>';
                return;
            }
       else{
        mysqli_query($conn, "INSERT INTO personnelAffairs 
            (name, code, 
            arabicName, religion, 
            nationality, gender, 
            birthDate, nationalNumber, 
            foreginerNumber, address, 
            phoneNumber, qualification, 
            graduationYear, graduationGrade, 
            expYears, job, specialization,
            department, contractDate, insuranceNumber,
            insuranceDate, insuranceEndDate,
            systemRole, educationSystem,
            notes)
            VALUES 
    ('$eN', '$c', '$aN', '$r', 
    '$n', '$g', '$bD', '$nN', '$fN', '$addr', 
    '$pN', '$q', '$gY', '$gG', '$expY', '$j',
    '$spec', '$dep', '$cDate', '$iNo', '$iDate', '$iEDate',
    '$sR', '$eS', '$notes')");
        echo '<script>alert("Done, new profession has been added successfully")</script>';
        return;
    }
}
 private function checkProfession($name, $nationalNumber){
    include "dB.php";
    $flag = true;
    $sql = mysqli_query($conn, "SELECT name, nationalNumber FROM personnelAffairs WHERE name='".$name."' AND nationalNumber= '".$nationalNumber."'");
    if(mysqli_num_rows($sql) > 0){
      return $flag; 
    }
    $flag = false;
    return $flag;
 }
}
?>