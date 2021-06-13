<?php include "dB.php"; 
ob_start();
?>
<?php include "menuvideo.php"; ?>
<div class ="content"> 
<div class = wrapper> 
<head>
  
<title>delete</title>
<style>
        <?php include "Styles/deletevideocourse.css";
        ?>
    </style>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <style>
   body{
    background-color:#05243A;
   }
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
   <td><b>email</b></td>
    <td><b>course</b></td>
    <td><b>video</b></td>
    <td><b>videoname</b></td>
    <td><b>select</b></td>
    
  
  </tr>

  <?php
$result = mysqli_query($conn, "SELECT * FROM addcoursevideo");

// output data of each row
while($row = mysqli_fetch_array($result)){
  $id = $row['ID'];  
  $email=$row['email'];
  $course=$row['course'];
  $video=$row['video'];
$videoname=$row['videoname'];

  ?>
  <br><br>
  <td style="visibility:hidden;"><?= $id ?></td>
  <td><?= $email ?></td>
  <td><?= $course ?></td>
  <td><?= $video ?></td>
  <td><?= $videoname ?></td>
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
include 'Videos.php';
$video= new videos();
  if(isset($_POST['sub'])){
    if(isset($_POST['delete'])){
      foreach($_POST['delete'] as $dele){
        $video->removeVideo($dele);
     }
   }  
      else{
         echo "Error, please select the video you want to delete";
        }
        header("Refresh: 0.1");  
  }  
?>