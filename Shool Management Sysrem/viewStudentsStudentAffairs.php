<?php  include "studentAffairesFrontEnd.php"; ?>
<?php include "dB.php"; ?>

<div class ="content"> 
<div class = wrapper> 
<head>
  
<title>send Message</title>
<style>
        <?php include "Styles/viewstudents.css";
        ?>
    </style>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
</head>
<br>
<body>
<form method="POST" action="">
<div class="register">
  

<br><br>

<table class="table table-hover">
  <tr>
  
   <td style="visibility:hidden;"><b>ID</b></td>
   <td><b>name</b></td>
    <td><b>registrationNumber</b></td>
    <td><b>nationality</b></td>
    <td><b>religion</b></td>
     <td><b>placeOfBirth</b></td>
    <td><b>dateOfBirth</b></td>
    <td><b>mothername</b></td>
     <td><b>address</b></td>
      <td><b>phonenumber</b></td>
       <td><b>fatherjob</b></td>
        <td><b>gender</b></td>
        <td><b>rationalnumber</b></td>
        <td><b>class</b></td>

  
  </tr>

  <?php
$result = mysqli_query($conn, "SELECT * FROM Students");

// output data of each row
while($row = mysqli_fetch_array($result)){
        $id = $row['ID'];  
        $name = $row['name'];
        $registrationno = $row['registrationNumber'];
        $nationality = $row['nationality'];
        $religion = $row['religion']; 
        $placeOfBirth = $row['placeOfBirth'];  
        $dateOfBirth = $row['dateOfBirth'];
        $mothername=$row['motherName'];
        $address=$row['address'];
        $phonenumber=$row['phoneNumber'];
        $fatherJob=$row['fatherJob'];
        $gender=$row['gender'];
        $nationalNumber=$row['nationalNumber'];
        $class=$row['class'];
  ?>
  <br><br>
  <td style="visibility:hidden;"><?= $id ?></td>
  <td><?=  $name ?></td>
  <td><?=  $registrationno ?></td>
  <td><?=  $nationality ?></td>
 <td><?=  $religion ?></td>
 <td><?= $placeOfBirth  ?></td>
 <td><?=  $dateOfBirth ?></td>
 <td><?=$mothername  ?></td>
 <td><?=   $address ?></td>
 <td><?=$phonenumber  ?></td>
 <td><?=  $fatherJob ?></td>
 <td><?= $gender ?></td>
 <td><?= $nationalNumber  ?></td>
 <td><?=   $class ?></td>

		
  
 
  
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