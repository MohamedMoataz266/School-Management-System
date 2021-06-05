<?php
class User{
    private $firstName;
    private $secondName;
    private $thirdName;
    private $fourthName;
    private $nationalNumber;
    private $birthDate;
    private $gender;
    private $type;

private function setData($firstName, $secondName, $thirdName, $fourthName, $nationalNumber, $birthDate, $gender, $type){
    $this->firstName = $firstName;
    $this->secondName = $secondName;
    $this->thirdName = $thirdName;
    $this->fourthName = $fourthName;
    $this->nationalNumber = $nationalNumber;
    $this->birthDate = $birthDate;
    $this->gender = $gender;
    $this->type = $type;
}

public function addUser($fN, $sN, $tN, $foN, $nN, $bD, $g, $t){
    include 'dB.php';
    $this->setData($fN, $sN, $tN, $foN, $nN, $bD, $g, $t);
    if($this->validationDataStudent()){
        echo '<script>alert("Error, Data Is Repeated")</script>';
        return;
    }
    else{
    mysqli_query($conn, "INSERT INTO Registration (firstName, secondName, thirdName, forthName, email, nationalNumber, birthDate, gender, user)
    VALUES
    ('$this->firstName', '$this->secondName', '$this->thirdName', '$this->fourthName', '".$this->getEmail()."', '$this->nationalNumber', '$this->birthDate', '$this->gender', '$this->type')");
    echo '<script>alert("Done, Data Saved Successfully You Can Logged In Now")</script>';
    header('Location:logIn.php');  
  }
}
public function logIn($email, $pass){
    include "dB.php";
    if($email == '' || $pass == ''){
        echo '<script>alert("Error, Fill All Requirements")</script>';
        return;
    }
    
    else{
        session_start();  
        $sql = mysqli_query($conn, "SELECT email, nationalNumber, user FROM Registration WHERE email='$email' 
        AND nationalNumber='$pass'");
        if($row = mysqli_fetch_assoc($sql)){
            if($row['email'] == $email){
            $_SESSION['email'] = $email;

            if($row['user'] == 1){
                header('Location: studentFrontEnd.php');
            }
           else if ($row['user'] == 2){
            header('Location: teacherfrontEnd.php');
        }
           else if ($row['user'] == 3){
            header('Location: studentAffairesFrontEnd.php');
           }  
           else if ($row['user'] == 4){
            // personnel menu
        }
         }
        }
          else{
            echo '<script>alert("Error, Data Is Not Correct")</script>';
            return;
         
          }
          
        }
}

private function getEmail(){
    return ($this->firstName.$this->secondName.$this->thirdName.$this->fourthName.'@amounegypt.com');
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
    $sql = mysqli_query($conn, "SELECT nationalNumber, email FROM Registration");
    while($row = mysqli_fetch_array($sql)){
        if($row['nationalNumber'] == $this->nationalNumber){
            return $flag;
        }
        if($row['email'] == $this->getEmail()){
            return $flag;
        }
    }
        $flag = false;
        return $flag;
   }
}
?>