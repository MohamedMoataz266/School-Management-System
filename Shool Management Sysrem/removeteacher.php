<?php include "personal.php";?>
<!DOCTYPE html>
<html>
<head>
  <title>teacher</title>
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
    <h1>teachers</h1>
  
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
$notes= $row['notes'];
       


        ?>
       
        <br><br>
        <p style="visibility:hidden;"><?= $id ?></p>
       <?php
        echo "name: " .$name. "<br>"; 
         echo "code: " .$code. "<br>"; 
         echo "arabicName: " .$arabicName. "<br>"; 
          echo "religion: " .  $religion. "<br>";
           echo "nationality: " . $nationality. "<br>";  
           echo "gender: " . $gender. "<br>";
            echo "birthDate: " . $birthDate . "<br>";
             echo "address: " . $address . "<br>";
             echo "phoneNumber " . $phoneNumber. "<br>";
             echo "qualification " .$qualification. "<br>";


             echo " graduationYear" .$graduationYear. "<br>";
             echo "graduationGrade " .$graduationGrade. "<br>";
              echo "expYears " .$expYears. "<br>";
               echo "job " .$job. "<br>";
                 echo "specialization " .$specialization. "<br>";
                     echo "department" .$department. "<br>";
                      echo "contractDate" .$contractDate. "<br>";
                        echo "insuranceNumber" .$insuranceNumber. "<br>";
                           echo "insuranceDate" .$insuranceDate. "<br>";
                              echo "insuranceEndDate" .$insuranceEndDate. "<br>";
                                echo "systemRole" .$systemRole. "<br>";
                                 echo "notes" .$notes. "<br>";
                              
                              



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
         echo "ERROR U SHOULD SELECT USER TO DELETE IT";
        }
        header("refresh: 0.1");  
  }  
?>

