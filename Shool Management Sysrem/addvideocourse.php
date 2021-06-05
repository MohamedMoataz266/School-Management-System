<?php 

 include "dB.php";
  include "menuvideo.php"; 
 $errors = array();

 $id = "";
 $email= "";
 $instructorname= "";
 $course= "";
 $coursename= "";
 $video= "";
 $videoname="";

 
function getPosts(){
     $posts = array();
     $posts[0] = $_POST['email'];
     $posts[1] = $_POST['instructorname'];
     $posts[2] = $_POST['course'];
     $posts[3] = $_POST['coursename'];
     $posts[4]=$_POST['video'];
     $posts[4]=$_POST['videoname'];
     return $posts;
 }
 // insert
 if(isset($_POST['insert']))
 {
    if (empty($_POST['email']) || 
      empty($_POST['instructorname']) || 
      empty($_POST['course']) || 
      empty($_POST['coursename'])|| 
      empty($_POST['video'])|| 
      empty($_POST['videoname'])){
    array_push($errors, "Please fill in all requirements!");  
      }
    else{
    $sql = "SELECT video, videoname FROM addcoursevideo WHERE video = '".$_POST['video']."'";
 	$result = mysqli_query($conn, $sql);
 	if($result){
 		if($row = $result->fetch_assoc()){
         if($row["video"] == $_POST['video'])
         {
 		die("ERROR");
 	}
 		}
 	}
     $data = getPosts();
     $insertQuery = "INSERT INTO addcoursevideo (`email`, `instructorname`,`course`,`coursename`,`videoname`,`video`) VALUES ('$data[0]', '$data[1]','$data[2]','$data[3]','$data[4]','$_POST[video]')";
     try
  {
     $insertResult = mysqli_query($conn, $insertQuery);
     
     if($insertResult)
     {
         if(mysqli_affected_rows($conn) > 0){
             print "item inserted";
         }else{
             print "item not inserted";
         }
     }
 }catch(Exception $ex){
       print "error insert" .$ex->getMessage();  
     }
 }
}
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
                    <h3>Add video</h3>
                   
                    <form class="requires-validation" novalidate method='POST' action=''>

                        <div class="col-md-12">
                           <input class="form-control" type="text" name="email" placeholder="email" value="<?php print $email; ?>" >
                           
                           </div>
                           <div class="col-md-12">
                           <input class="form-control" type="text" name="instructorname" placeholder="instructorname" value="<?php print $instructorname; ?>">
                           
                           </div>
                           <div class="col-md-12">
                           <input class="form-control" type="text" name="course" placeholder="course" value="<?php print $course; ?>">
                           <!-- <div class="valid-feedback">Username field is valid!</div> -->
                           </div>
                           <div class="col-md-12">
                           <input class="form-control" type="text" name="coursename" placeholder="coursename" value="<?php print $coursename; ?>">
                           <!-- <div class="valid-feedback">Username field is valid!</div> -->
                           </div>
                     

                           <div class="col-md-12">
                           <input class="form-control" type="file" name="video" placeholder="video"value="<?php print $video; ?>">
                           
                           <!-- <div class="valid-feedback">Username field is valid!</div> -->
                           </div>
                           <div class="col-md-12">
                           <input class="form-control" type="text" name="videoname" placeholder="videoname"value="<?php print $videoname; ?>">
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