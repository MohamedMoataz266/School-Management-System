<?php
include "menuvideo.php";
?>

<style>
  <?php include "Styles/updatevideo.css" ?>
</style>
<?php
include "dB.php";
 
  $sql= "SELECT * FROM addcoursevideo";
  $result = mysqli_query($conn, $sql);
  ?>
  <div class='register'>
    <h1>Updating Video Info</h2>
  <br><br><br><br><br><br>
  <?php
  while($row = mysqli_fetch_array($result)){
    ?>
     <div class='row'>
     <div class='col'>
      <br>
  
 <div class='over'>
 </div>
</div>
    <div class='rate'>
          <h1><a href="updateVideo.php?<!?>=<?php echo $row['ID']+255 ?>">Update Video</a><h1>
          <h1>Instructor email: <?php echo $row['email'] ?></h1>
          <h1>Instructor Name: <?php echo $row['instructorname']?></h1>
          <h1>Course: <?php echo $row['course'] ?></h1>
          <h1>Course Name: <?php $row['coursename']  ?></h1>
          <h1>Video Name: <?php echo $row['videoname'] ?></h1>
        <br>

    </div>
    </div>
<?php
}
?>