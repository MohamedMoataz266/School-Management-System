<html>
<head>
<style>
<?php include "Styles/addvideocourse.css";
ob_start();


?>

</style>

<?php include "menuvideo.php"; 
include 'dB.php';

$sql = "SELECT * FROM addcoursevideo WHERE ID='".$_GET['<!?>']."'-255";
 $result = mysqli_query($conn, $sql);

 if($result)
 {
    $row = mysqli_fetch_array($result);
 



?>

</head>
<body>

<div class="form-body">
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <h3>update video</h3>
                   
                    <form class="requires-validation" novalidate method='POST' action=''>
                       <div class="col-md-12">
                           <input class="form-control" type="text" name="course" placeholder="Course Name" value = "<?php echo $row['course']; ?>">
                           <!-- <div class="valid-feedback">Username field is valid!</div> -->
                           </div>
                     

                           <div class="col-md-12">
                           <input class="form-control" type="file" name="video" placeholder="Video" value = "<?php echo $row['video']; ?>" >
                           
                           <!-- <div class="valid-feedback">Username field is valid!</div> -->
                           </div>
                           <div class="col-md-12">
                           <input class="form-control" type="text" name="videoname" placeholder="Video Name" value = "<?php echo $row['videoname']; ?>">
                           <!-- <div class="valid-feedback">Username field is valid!</div> -->
                           </div>
                           
              
                       <br>
                        <div class="form-button mt-3">
                            <input  value="update" type="submit" class="btn btn-primary" name='update'>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
?>
</body>

</html>
<?php
include 'Videos.php';
session_start();
if(isset($_POST['update'])){
    $video = new Videos();
    $ge=$_GET['<!?>']-255;
    $video->setData($_POST['course'], $_POST['videoname'], $_POST['video'] );
    $video->updateVideo($ge,$_POST['course'], $_POST['videoname'], $_POST['video']); 


}

?>