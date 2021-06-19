<?php
class Videos{
private $course;
private $videoName;
private $video;

public function setData($course, $videoName, $video){
    $this->course = $course;
    $this->videoName = $videoName;
    $this->video = $video;
   if($this->validateData()){
    echo '<script>alert("Error, Data Is Not Completed")</script>';
    die();
   }
}
private function validateData(){
    $flag = true;
    if($this->course == '' || $this->videoName == '' || $this->video == ''){
        return $flag;        
    }
    else{
        $flag = false;
        return $flag;
    }
}
public function addVideo($email, $course, $videoName, $video){
    include 'dB.php';
    $sql = mysqli_query($conn, "SELECT * FROM addcoursevideo WHERE email='$email'");
    while($row = mysqli_fetch_array($sql)){
        if($row['email'] == $email && $row['course'] == $this->course && 
           $row['videoname'] == $this->videoName && $row['video'] == $this->video){
               echo '<script>alert("Error, Video Is Repeated")</script>';
               return;
           }
    }
    mysqli_query($conn, "INSERT INTO addcoursevideo (email, course, videoname, video)
    VALUES ('$email', '$this->course', '$this->videoName', '$this->video')");
}
public function removeVideo($id){
    include 'dB.php';
    mysqli_query($conn, "DELETE FROM addcoursevideo WHERE ID='$id'");
    echo '<script>alert("Done, Videos Removed Successfully")</script>';
    return;
}
public function updateVideo($id, $course, $videoName, $video){
    include 'dB.php';
    mysqli_query($conn, "UPDATE addcoursevideo SET course='$course', 
                                                videoname='$videoName', 
                                                video='$video' 
                                                WHERE email='".$_SESSION['email']."' 
                                                AND ID='".$id."'");
    echo '<script>alert("Done, Video Updates Successfully")</script>';
    return;
}
}


?>