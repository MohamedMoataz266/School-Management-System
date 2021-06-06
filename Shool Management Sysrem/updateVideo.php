<?php
include "menuvideo.php";
?>
<html>
<head>
<style>
<?php include "Styles/addvideocourse.css"?>
</style>
</head>
<body>

<div class="form-body">
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <h3>Update Video</h3><br><br>
<form method = "post">
          <div class="col-md-12">
     <label> Instructor Email: </label> <br> <input type = "text" name = "instructorEmail" class="form-control"> <br> <br></div>
     <div class="col-md-12">
     <label> Instructor Name: </label> <br> <input type = "text" name = "instructorName" class="form-control"> <br> <br></div>
     <div class="col-md-12">
     <label> Course: </label> <br> <input type = "text" name = "course" class="form-control"> <br> <br></div>
     <div class="col-md-12">
     <label> Course Name: </label> <br> <input type = "text" name = "courseName" class="form-control"> <br> <br></div>
     <div class="col-md-12">
     <label> Video Name: </label> <br> <input type = "text" name = "videoName" class="form-control"> <br> <br></div>
     <div class="col-md-12">
     <label> Video: </label> <br> <input type = "file" name = "video" class="form-control"> <br> <br></div>
     <br>
     <div class="form-button mt-3">
     <input type = "submit" name = "update" value = "Update" class="btn btn-primary"></div>
 </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>


<?php
 if(isset($_POST['sub']))
{
  include "UpdateV.php";
  $instructorEmail = $_POST['instructorEmail'];
  $instructorName = $_POST['instructorName'];
  $course = $_POST['course'];
  $courseName = $_POST['courseName'];
  $videoName = $_POST['videoName'];
  $video = $_POST['video'];

  $obj = new Database();
  $obj ->saveRecords($instructorEmail,$instructorName,$course,$courseName,$videoName,$video);
}
?>