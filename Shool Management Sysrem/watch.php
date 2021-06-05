<?php
include('dB.php');

if(isset($_GET['ID'])){
    $id=$_GET['ID'];

    $sql="select video from addcoursevideo where id='$id'";
    $res=mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($res);
    $video=$row['video'];
    echo "<h1>you are watching:".$video."</h1>";
    ?>
    <video width="615" height="315" controls>
    <source src="video/<?php echo $video; ?>" type="video/mp4">
    </video>
<?php
}
?>