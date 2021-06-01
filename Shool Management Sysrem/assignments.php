<?php 
 include "dB.php";
include "studentFrontEnd.php";
?>
<style>
  <?php include "Styles/assignments.css"?>
</style>
<form method="POST" action="">
<div class="wrapper">
<div class="main_container">
<div class="item">  

  <div class ="box">
    <div class="in">
    <?php
      $res = mysqli_query($conn, "SELECT email FROM Answers");
      $resq = mysqli_query($conn, "SELECT question FROM addQuestions");
      $noQ=0;
     while($row=mysqli_fetch_array($resq)){
         $noQ++;
      }
      $noA=0;
      while($row=mysqli_fetch_array($res)){
        if($row['email'] == $_SESSION['email']){
            $noA++;
        }
      }

      if($noA == $noQ){
        echo "<h1> There Are Not New Question</h1>";
        die();
      }
      else{
        mysqli_query($conn, "DELETE FROM Answers WHERE email='".$_SESSION['email']."'");
      }
      $sql = mysqli_query($conn, "SELECT question FROM addQuestions");
      while($row=mysqli_fetch_array($sql)){
      ?>
        <input type="text" name="ques[]" value='<?php echo $row['question'] ?>' readonly>
        <input type="text" name="answer[]" placeholder="Enter Answer Here"><br>
        
        <?php
      }  
    ?>
    <input type="submit" name="sub" value="Submit Your Answer">
  </div>
</div>
</div>
</div>
</div>


</form>


<?php 
  include 'classAssignments.php';
   if(isset($_POST['sub'])){
     $assignment = new Assignment();
      foreach($_POST['answer'] as $a){
        if($a == ''){
        echo '<script>alert("Error, Answer all questions")</script>';
        return;
      }
    }
    foreach($_POST['answer'] as $a){
       $assignment->addAnswer($_SESSION['email'], $a);
      } 
}  


?>