<!DOCTYPE html>
<html>
  <?php include "teacherfrontEnd.php"?>
<head>
  <title>View Answers</title>
<style>
  <?php include "Styles/viewAnswers.css"?>
</style>
</head>
<body>
  <div class="register">
<form method="POST" action="">
<?php include "dB.php";
     
echo "<div class= 'boxone'>";
echo "<h1>Questions</h1>";

   $sql = mysqli_query($conn, "SELECT question FROM addQuestions");
   $res = mysqli_query($conn, "SELECT * FROM Answers");
   $no=0;
   while($row=mysqli_fetch_array($sql)){
      $no++;
    ?>
    
    <input type="text" name="ques[]" value='<?php echo $no.'- '. $row['question'] ?>' readonly><br>


    <?php
   }
   echo "</div>";
   echo "<br>";
  
$ne=0;
echo "<div class='boxtwo'>";
echo"<h2>Answers</h2>";
  while($rows=mysqli_fetch_array($res)){
     $ne++;
     if($ne > $no){
     $ne = 1;
   }
    
    ?>
    
<br><br>

    <input type="email" name="email[]" value='<?php echo $rows['name'] ?>' readonly>

    <input type="text" name="ans[]" value='<?php echo $ne.'- ' .$rows['answer'] ?>' readonly>
    <br>

     

    <?php

   }
   
?>
 
</div>
</form>
</div>
</body>
</html>