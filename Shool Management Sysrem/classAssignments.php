<?php
class Assignment{
public function addQuestion($name, $question){
    include 'dB.php';
    mysqli_query($conn, "INSERT INTO addQuestions (name, question) VALUES ('$_SESSION[name]', '$question')");
    echo '<script>alert("Done, Question Added successfully")</script>';
    header("refresh: 0.1");    
    return;
  }
public function   
}

?>