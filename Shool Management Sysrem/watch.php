

<?php 
include 'homemenu.php' ?>

<?php
include('dB.php');

if(isset($_GET['ID'])){
    $id=$_GET['ID'];

    $sql="select video from addcoursevideo where id='$id'";
    $res=mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($res);
    $video=$row['video'];
    echo "<h1>You are watching:".$video."</h1>";
    ?>
    <head>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
<link rel="stylesheet" href="Styles/watch.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src='Js/menu.js'></script>
</head>
<body onload="studentMenu()">
    
    <div class = "watch">
    <video width="615" height="315" controls>
    <source src="video/<?php echo $video; ?>" type="video/mp4">
    </video>
    

    <button onclick="window.location.href='viewvideocourse.php'">
  <i  class="fas fa-backward"></i> Back
</button>

</div>


<?php
}
?>

</body>




