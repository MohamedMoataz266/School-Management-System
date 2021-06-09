<?php include "personal.php"; ?>
<?php include "dB.php"; ?>

<div class ="content"> 
<div class = wrapper> 
<head>
  
<title>Send Message</title>
<style>
        <?php include "Styles/viewteachers.css";
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
   <td><b>Name</b></td>
    <td><b>Code</b></td>
<td><b>Name in Arabic</b></td>
<td><b>Religion</b></td>
<td><b>Nationality</b></td>
<td><b>Gender</b></td>
<td><b>BirthDate</b></td>
<td><b>NationalNumber</b></td>
<td><b>Foreginer Number</b></td>
<td><b>Address</b></td>
<td><b>Phone Number</b></td>
<td><b>Qualification</b></td>
<td><b>Graduation Year</b></td>
<td><b>Graduation Grade</b></td>
<td><b>Experienced Years</b></td>
<td><b>Job</b></td>
<td><b>Specialization</b></td>
<td><b>Department</b></td>
<td><b>Contract Date</b></td>
<td><b>Insurance Number</b></td>
<td><b>Insurance Date</b></td>
<td><b>Insurance EndDate</b></td>
<td><b>System Role</b></td>
<td><b>Education System</b></td>
<td><b>Notes</b></td>
  
  </tr>

  <?php
$result = mysqli_query($conn, "SELECT * FROM personnelAffairs");

// output data of each row
while($row = mysqli_fetch_array($result)){
        $id = $row['ID'];  
 $name = $row['name'];
  $code= $row['code'];
 $arabicName= $row['arabicName'];
$religion= $row['religion'];
$nationality= $row['nationality'];
$gender= $row['gender'];
$birthDate= $row['birthDate'];
$nationalNumber= $row['nationalNumber'];
$foreginerNumber= $row['foreginerNumber'];
$address= $row['address'];
$phoneNumber= $row['phoneNumber'];
$qualification= $row['qualification'];
$graduationYear= $row['graduationYear'];
$graduationGrade= $row['graduationGrade'];
$expYears= $row['expYears'];
$job= $row['job'];
$specialization= $row['specialization'];
$department= $row['department'];
$contractDate= $row['contractDate'];
$insuranceNumber= $row['insuranceNumber'];
$insuranceDate= $row['insuranceDate'];
$insuranceEndDate= $row['insuranceEndDate'];
$systemRole= $row['systemRole'];
$educationSystem= $row['educationSystem'];
$notes= $row['notes'];
  ?>
  <br><br>
  <td style="visibility:hidden;"><?= $id ?></td>
  <td><?=  $name ?></td>
  <td><?=  $code ?></td>
  <td><?=  $arabicName ?></td>
 <td><?=  $religion ?></td>
 <td><?= $nationality  ?></td>
 <td><?=  $gender ?></td>
 <td><?= $birthDate  ?></td>
 <td><?=   $nationalNumber ?></td>
 <td><?= $foreginerNumber  ?></td>
 <td><?=  $address ?></td>
 <td><?= $phoneNumber ?></td>
 <td><?= $qualification  ?></td>
 <td><?=   $graduationYear ?></td>
 <td><?=   $graduationGrade ?></td>
 <td><?=   $expYears ?></td>
 <td><?=   $job ?></td>
  <td><?=   $specialization ?></td>
    <td><?= $department   ?></td>
     <td><?=   $contractDate ?></td>
      <td><?=  $insuranceNumber  ?></td>
       <td><?=  $insuranceDate ?></td>
        <td><?=  $insuranceEndDate ?></td>
          <td><?=  $systemRole ?></td>
          <td><?=  $educationSystem ?></td>
          <td><?=  $notes ?></td>


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