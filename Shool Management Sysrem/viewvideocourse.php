<?php include "dB.php"; ?>
<?php include "homemenu.php";?>
<div class ="content"> 
<div class = wrapper> 
<head>
<title>View Videos</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src='Js/menu.js'></script>   
</head>
<style>
        <?php include "Styles/deletevideocourse.css";

        ?>
        
    </style>
<br>
<body onload='studentMenu()'>
<form method="POST" action="">
<div class="register">
  

<br><br>
<table class="table table-hover">
  <tr>
  
   <td style="visibility:hidden;"><b>ID</b></td>
   <td><b>Email</b></td>
    <td><b>Course</b></td>
    <td><b>Video</b></td>
    
    
  
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
  <td><?= "<a href='watch.php?ID=$id'>$video</a>"?> </td>
  
  
		
  
 
  
</tr>
<?php
}
?>
</table>

</div>

</form>
</body>
</div>
</div>
<?php
  if(isset($_POST['sub'])){
    if(isset($_POST['delete'])){
      foreach($_POST['delete'] as $dele){
        mysqli_query($conn, "DELETE FROM addcoursevideo WHERE ID = '" .$dele. "'");
     }
   }  
      else{
         echo "Error, please select the video you want to delete";
        }
        header("refresh: 0.1");  
  }  
?>