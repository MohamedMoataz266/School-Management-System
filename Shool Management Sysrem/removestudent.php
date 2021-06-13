<?php include "studentAffairesFrontEnd.php";?>
<?php include "dB.php";?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>sa</title>  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-typeahead.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
   body{
    background-color:#05243A;
   }
   <?php  include "Styles/removestudent.css";?>
   </style>
</head>
<br>
<body>
<form method="POST" action="">
<div class="register">
  

<br><br>
<table class="table table-hover">
  <tr>
  
   <td style="visibility:hidden;"><b>ID</b></td>
   <td><b>Name</b></td>
    <td><b>RegistirationNumber</b></td>
    <td><b>religion</b></td>
    <td><b>select</b></td>
    
  
  </tr>

  <?php
$result = mysqli_query($conn, "SELECT * FROM Students");

// output data of each row
while($row = mysqli_fetch_array($result)){
  $id = $row['ID'];  
  $name=$row['name'];
  $registrationNumber=$row['registrationNumber'];
  $religion=$row['religion'];

  ?>
  <br><br>
  <td style="visibility:hidden;"><?= $id ?></td>
  <td><?= $name ?></td>
  <td><?= $registrationNumber?></td>
  <td><?= $religion ?></td>
  <td> <input type='checkbox' name='delete[]' value='<?= $id ?>' ></td>
		
  
 
  
</tr>
<?php
}
?>
</table>
<div class ="r">
<br><br><input type= 'submit' name='sub' value="Delete">
</div>
</div>

</form>
</body>
</div>
</div>



<?php
include 'studentAffairs.php';
$studentAffairs = new studentAffairs();
  if(isset($_POST['sub'])){
    if(isset($_POST['delete'])){
      foreach($_POST['delete'] as $dele){
         $studentAffairs->removeStudent($dele);
      }
   }  
      else{
         echo "ERROR U SHOULD SELECT USER TO DELETE IT";
        }
        header("refresh: 0.1");  
  }  
?>

