<?php  include "homemenu.php"; ?>
<head>
<title>Add Student</title>
<style>
  <?php 
  include "Styles/AddStudent.css";
  ob_start();
  ?>
</style>
<?php 
include 'dB.php';

$sql = "SELECT * FROM Students WHERE ID='".$_GET['<!?>']."'-255";
 $result = mysqli_query($conn, $sql);

 if($result)
 {
    $row = mysqli_fetch_array($result);
 



?>
</head>
<body onload='studentAffairsMenu()'>

    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Update Student</h3>
                       
                        <form class="requires-validation" novalidate method='POST' action=''>
                        
                        <label class="mb-3 mr-1" for="insdate">First Name: </label>
                            <div class="col-md-12">
                               <input class="form-control" type="text" name="name" placeholder="First Name" value="<?php echo $row['name']?>">
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                                <br>
                         
                               <label class="mb-3 mr-1" for="insdate">Registration number: </label>
                              <div class="col-md-12">
                               <input class="form-control" type="text" name="regnumber" placeholder="Registration number" value="<?php echo $row['registrationNumber']?>">
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                               <br>
                               <label class="mb-3 mr-1" for="insdate">Nationality: </label>
                               <div class="col-md-12">
                               <input class="form-control" type="text" name="nationality" placeholder="Nationality" value="<?php echo $row['nationality']?>">
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                               <br>
                               <label class="mb-3 mr-1" for="insdate">Religion: </label>
                               <div class="col-md-12">
                               <input class="form-control" type="text" name="religion" placeholder="Religion"value="<?php echo $row['religion']?>">
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                               <br>
                               <label class="mb-3 mr-1" for="insdate">Place of birth: </label>
                               <div class="col-md-12">
                               <input class="form-control" type="text" name="birthplace" placeholder="Birth Place" value="<?php echo $row['placeOfBirth']?>">
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                               <br>
                               <label class="mb-3 mr-1" for="insdate">Date of birth: </label>
                               <div class="col-md-12">
                               <input class="form-control" type="text" name="dateofbirth" placeholder="Date of Birth" value="<?php echo $row['dateOfBirth']?>">
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                               <br>
                               <label class="mb-3 mr-1" for="insdate">Mother name: </label>
                                <div class="col-md-12">
                               <input class="form-control" type="text" name="mothername" placeholder="Mother's name" value="<?php echo $row['motherName']?>">
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                               <br>
                               <label class="mb-3 mr-1" for="insdate">Address: </label>
                               <div class="col-md-12">
                               <input class="form-control" type="text" name="address" placeholder="address" value="<?php echo $row['address']?>">
                               </div>
                               <br>

                               <label class="mb-3 mr-1" for="insdate">National number: </label>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="nationalNumber" placeholder="National number" value="<?php echo $row['nationalNumber']?>">
                                 </div>
                                 <br>
                                 <label class="mb-3 mr-1" for="insdate">Phone number: </label>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="number" placeholder="Phone number"value="<?php echo $row['phoneNumber']?>">
                                 </div>
                                 <br>
                                 <label class="mb-3 mr-1" for="insdate">Father's job: </label>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="fatherJob" placeholder="Father's job" value="<?php echo $row['fatherJob']?>">
                                 </div>
                                 <br>
                                 <label class="mb-3 mr-1" for="insdate">Class: </label>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="clas" placeholder="Class"value="<?php echo $row['class']?>">
                                 </div>
                                 <br>
                           

                           <br>
                           <div class="col-md-12 mt-3">
                            <label class="mb-3 mr-1" for="gender">Gender: </label>

                            <input type="radio" class="btn-check" name="gender" value='Female' id="male" value="<?php echo['gender']?>">
                            <label class="btn btn-sm btn-outline-secondary">Male</label>

                            <input type="radio" class="btn-check" value= 'Male' name="gender" id="female" value="<?php echo['gender']?>">
                            <label class="btn btn-sm btn-outline-secondary">Female</label>

                            
                               <!-- <div class="valid-feedback">You selected a gender!</div> -->
                               <br>
                                
                            </div>

                        
                        
                  

                            <div class="form-button mt-3">
                                <input id="update" type="submit" class="btn btn-primary" name='update'>
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



<?php
include 'dB.php';
include 'studentAffairs.php';
if(isset($_POST['update'])){
    $sA = new studentAffairs();
     $ge=$_GET['<!?>']-255;
    $sA->updateStudent($ge,$_POST['name'],$_POST['regnumber'], $_POST['dateofbirth'], $_POST['nationality'],$_POST['religion'], $_POST['birthplace'], $_POST['mothername'], $_POST['address'], 
         $_POST['number'], $_POST['fatherJob'], $_POST['clas'], $_POST['regnumber'] ,$_POST['gender']);
                    
                    
                  
}
?>