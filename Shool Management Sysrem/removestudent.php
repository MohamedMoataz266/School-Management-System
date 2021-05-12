<?php include "studentAffairesFrontEnd.php";?>
<!DOCTYPE html>
<html>
<head>
  <title>students</title>
  <style>
        <?php include "Styles/deletestudents.css";?>
    </style>
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
</head>
<body>
  <form action='' method='POST'>  
  <?php include "dB.php"; ?>
  <div class="sa">
    <h1>students</h1>
  
   <p style="visibility:hidden;"><b>ID</b></p>
  <?php
  $result = mysqli_query($conn, "SELECT * FROM Students ");

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
        <p style="visibility:hidden;"><?= $id ?></p>
       <?php
        echo "name: " .$name. "<br>"; 
         echo "registrationNumber: " .$registrationno. "<br>"; 
         echo "nationality: " .$nationality. "<br>"; 
          echo "religion: " .  $religion. "<br>";
           echo "placeOfBirth: " . $placeOfBirth. "<br>";  
           echo "dateOfBirth: " . $dateOfBirth. "<br>";
            echo "motherName: " . $mothername . "<br>";
             echo "address: " . $address . "<br>";
             echo "phoneNumber " . $phonenumber. "<br>";
             echo "fatherJob " .$fatherJob. "<br>";
             echo "gender " .$gender. "<br>";
             echo "nationalNumber " .$nationalNumber. "<br>";
              echo "class " .$class. "<br>";







         ?>
        
        Select Student: <input type='checkbox' name='delete[]' value='<?= $id ?>' >
  
  
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
include 'studentAffairs.php';
$sA = new studentAffairs();
  if(isset($_POST['sub'])){
    if(isset($_POST['delete'])){
      foreach($_POST['delete'] as $dele){
        $sA->removeStudent($dele);
      }
  }
  header("Refresh: 0.1");
}  
?>

