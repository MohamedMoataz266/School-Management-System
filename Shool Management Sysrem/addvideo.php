<html>
<head>
<style>
img
    {
      width: 30%;
height: 60%;


    }
<?php include "Styles/addvideocourse.css";
ob_start();


?>

</style>

<?php include "menuvideo.php"; ?>
</head>
<body>

<div class="form-body">
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <h3>Add video</h3>
                   
                    <form class="requires-validation" novalidate method='POST' action=''>
                       <div class="col-md-12">
                           <input class="form-control" type="text" name="course" placeholder="Course Name" >
                           <!-- <div class="valid-feedback">Username field is valid!</div> -->
                           </div>
                     

                           <div class="col-md-12">
                           <input class="form-control" type="file" name="video" placeholder="Video">
                           
                           <!-- <div class="valid-feedback">Username field is valid!</div> -->
                           </div>
                           <div class="col-md-12">
                           <input class="form-control" type="text" name="videoname" placeholder="Video Name">
                           <!-- <div class="valid-feedback">Username field is valid!</div> -->
                           </div>
                           
              
                       <br>
                        <div class="form-button mt-3">
                            <input  value="add" type="submit" class="btn btn-primary" name='insert'>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
<?php

include 'Videos.php';
session_start();
if(isset($_POST['insert'])){
    $video = new Videos();
    $video->setData($_POST['course'], $_POST['videoname'], $_POST['video'] );
    $video->addVideo($_SESSION['email'],$_POST['course'], $_POST['videoname'], $_POST['video']); 
}

?>