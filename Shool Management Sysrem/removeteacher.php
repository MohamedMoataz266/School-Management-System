<?php include "personal.php";?>
<!DOCTYPE html>
<html>
<head>
  <title>Removing a teacher</title>
  <style>
        <?php include "Styles/removeteacher.css";?>
    </style>
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
</head>
<body>
  <form action='' method='POST'>  
  <?php include "dB.php"; ?>
  <div class="sa">
    <h1>Teachers</h1>
  
   <p style="visibility:hidden;"><b>ID</b></p>
  <?php
  $result = mysqli_query($conn, "SELECT * FROM personnelAffairs WHERE job='Teacher'");

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
        <p style="visibility:hidden;"><?= $id ?></p>
       <?php
        echo "Name: " .$name. "<br>"; 
         echo "Code: " .$code. "<br>"; 
         echo "Name in Arabic: " .$arabicName. "<br>"; 
          echo "Religion: " .  $religion. "<br>";
           echo "Nationality: " . $nationality. "<br>";  
           echo "Gender: " . $gender. "<br>";
            echo "Birth Date: " . $birthDate . "<br>";
             echo "Address: " . $address . "<br>";
             echo "Phone Number: " . $phoneNumber. "<br>";
             echo "Qualification: " .$qualification. "<br>";

             echo "Graduation Year: " .$graduationYear. "<br>";
             echo "Graduation Grade: " .$graduationGrade. "<br>";
              echo "Experienced Years: " .$expYears. "<br>";
               echo "Job: " .$job. "<br>";
                 echo "Specialization: " .$specialization. "<br>";
                     echo "Department: " .$department. "<br>";
                      echo "Contract Date: " .$contractDate. "<br>";
                        echo "Insurance Number: " .$insuranceNumber. "<br>";
                           echo "Insurance Date: " .$insuranceDate. "<br>";
                              echo "Insurance EndDate: " .$insuranceEndDate. "<br>";
                                echo "System Role: " .$systemRole. "<br>";
                                echo "System Role: " .$educationSystem. "<br>";
                                 echo "Notes: " .$notes. "<br>";
                              

/*

Full texts  
ID
name
code
arabicName
religion
nationality
gender
birthDate
nationalNumber
foreginerNumber
address
phoneNumber
qualification
graduationYear
graduationGrade
expYears
job
specialization
department
contractDate
insuranceNumber
insuranceDate
insuranceEndDate
systemRole
educationSystem
notes
*/

         ?>
        
        Select Teacher: <input type='checkbox' name='delete[]' value='<?= $id ?>' >
  
  
     <?php
   }
  ?>    

<div class ="r">
<br><br><input type= 'submit' name='sub' value="Delete">
</div>
  </div>
</form>
</body>
</html>
<?php
  if(isset($_POST['sub'])){
    if(isset($_POST['delete'])){
      foreach($_POST['delete'] as $dele){
        mysqli_query($conn, "DELETE FROM personnelAffaires WHERE ID = '" .$dele. "'");
     }
   }  
      else{
         echo "Error, please select the teacher you want to remove";
        }
        header("refresh: 0.1");  
  }  
?>

