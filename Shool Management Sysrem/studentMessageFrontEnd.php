<?php include "studentFrontEnd.php"; ?>
<?php include "dB.php"; ?>
<head>
<title>Send Message</title>
 
    <style>
      <?php include "Styles/sendmessage.css";?>
    </style>
</head>
<div class="wrapper">
<div class="main_container">
<div class="item">  
    
<form method="POST" action="">
<div class="register">
  <?php
$result = mysqli_query($conn, "SELECT * FROM Registration WHERE user='2'");

// output data of each row
while($row = mysqli_fetch_array($result)){
  $id = $row['ID'];  
  $e = $row['email'];
  ?>
  <br><br>
  <p style="visibility:hidden;"><?= $id ?></p>
  <?php
         echo "Email: " .$e. "<br>"; 
?>
<a href="sendMessageStudent.php?!?=<?php echo $row["ID"]+255; ?>" class="u">Send Message</a>
<?php
}
?>
</div>
</form>


</div>
</div>
</div>