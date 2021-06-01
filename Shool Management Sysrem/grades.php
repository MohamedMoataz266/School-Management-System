<?php
class Grades{
    public function addGrade($teacherEmail, $studentEmail, $subject ,$grade){
        include 'dB.php';
        if($grade == '' || $subject == ''){
            echo '<script>alert("Error, Fill All Requirements")</script>';
            return;
        }
        else{
         mysqli_query($conn, "INSERT INTO Grades (teacher, student, subject, grade) VALUES
          ('$_SESSION['email']', '$studentEmail', $subject, $grade)");
        echo '<script>alert("Done, Grade Added Successfully")</script>';
        return;
       }
    }
    public function editGrade($teacherEmail, $studentEmail, $subject ,$grade){
        include 'dB.php';
        if($grade == '' || $subject == ''){
            echo '<script>alert("Error, Fill All Requirements")</script>';
            return;
        }
        else{
         mysqli_query($conn, "UPDATE Grades SET teacher= '$_SESSION['email']', 
                                                student= '$studentEmail', 
                                                subject= '$subject',
                                                grade= '$grade')");
        echo '<script>alert("Done, Grade Updated Successfully")</script>';
        return;
       }
    }
    
} 


?>