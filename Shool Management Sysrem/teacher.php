<?php
include 'User.php';
class Teacher extends User{
   

    private function insertDataIntoDataBase(){
        include "dB.php";
            $firstName = parent::getFirstName();
            $secondName = parent::getSecondName();
            $thirdName = parent::getThirdName();
            $forthName = parent::getForthName();
            $email = parent::getEmail();
            $pass = parent::getPassword();
            $nN = parent::getNationalNumber();
            $bD = parent::getBirthDate();
            $g = parent::getGender();   
        mysqli_query($conn, "INSERT INTO Registration(firstName, secondName, thirdName, forthName, email, password, nationalNumber, birthDate, gender, user)
        VALUES
        ('$firstName', '$secondName', '$thirdName', '$forthName', '$email', '$pass', '$nN', '$bD', '$g', '2')");
        }

        public function removeTeacherFromSchool($nationalNumber){
            include "dB.php";
            $sql = mysqli_query($conn, "SELECT nationalNumber FROM Registration");
            while($row = mysqli_fetch_array($sql)){
                echo $row['nationalNumber']. '<br>';
                if($row['nationalNumber'] == $nationalNumber){
                    mysqli_query($conn, "DELETE FROM Registration WHERE nationalNumber = '".$row['nationalNumber']."'");
                    break;    
                }
            }
        }

        
}





?>