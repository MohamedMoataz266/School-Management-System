<?php include "personal.php"; ?>
<?php include "dB.php"; ?>

<div class ="content"> 
<div class = wrapper> 
<head>
  
<title>send Message</title>
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
   <td><b>name</b></td>
    <td><b>code</b></td>
<td><b>arabicName</b></td>
<td><b>religion</b></td>
<td><b>nationality</b></td>
<td><b>gender</b></td>
<td><b>birthDate</b></td>
<td><b>nationalNumber</b></td>
<td><b>foreginerNumber</b></td>
<td><b>address</b></td>
<td><b>phoneNumber</b></td>
<td><b>qualification</b></td>
<td><b>graduationYear</b></td>
<td><b>graduationGrade</b></td>
<td><b>expYears</b></td>
<td><b>job</b></td>
<td><b>specialization</b></td>
<td><b>department</b></td>
<td><b>contractDate</b></td>
<td><b>insuranceNumber</b></td>
<td><b>insuranceDate</b></td>
<td><b>insuranceEndDate</b></td>
<td><b>systemRole</b></td>
<td><b>notes</b></td>
  

  
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