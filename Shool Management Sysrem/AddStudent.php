<?php include "homemenu.php"; ?>
<head>
<title>Add Student</title>
<style>
  <?php 
  include "Styles/AddStudent.css";
  ob_start();

  ?>
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src='Js/menu.js'></script>
</head>
<body onload='studentAffairsMenu()'>

    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Add Student</h3>
                       
                        <form class="requires-validation" novalidate method='POST' action=''>

                            <div class="col-md-12">
                               <input class="form-control" type="text" name="firstName" placeholder="First Name">
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                               <div class="col-md-12">
                               <input class="form-control" type="text" name="secondName" placeholder="Second Name">
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                               <div class="col-md-12">
                               <input class="form-control" type="text" name="thirdName" placeholder="Third Name">
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                               <div class="col-md-12">
                               <input class="form-control" type="text" name="fourthName" placeholder="Fourth Name">
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                         

                               <div class="col-md-12">
                               <input class="form-control" type="text" name="regnumber" placeholder="Registration number">
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                               <div class="col-md-12">
                               <input class="form-control" type="text" name="nationality" placeholder="Nationality">
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                               <div class="col-md-12">
                               <input class="form-control" type="text" name="religion" placeholder="Religion">
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                               <div class="col-md-12">
                               <input class="form-control" type="text" name="birthplace" placeholder="Birth Place">
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                               <br>
                               <div class="col-md-12">
                               <input class="form-control" type="text" name="dateofbirth" placeholder="Date of Birth">
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                               <br>
                                <div class="col-md-12">
                               <input class="form-control" type="text" name="mothername" placeholder="Mother's name">
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>

                               <div class="col-md-12">
                               <input class="form-control" type="text" name="address" placeholder="address">
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>



                            <div class="col-md-12">
                                <input class="form-control" type="text" name="nationalNumber" placeholder="National number">
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>

                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="number" placeholder="Phone number">
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>

                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="father" placeholder="Father's job">
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>

                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="clas" placeholder="Class">
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>

                           

                           <br>
                           <div class="col-md-12 mt-3">
                            <label class="mb-3 mr-1" for="gender">Gender: </label>

                            <input type="radio" class="btn-check" name="gender" value='Female' id="male">
                            <label class="btn btn-sm btn-outline-secondary">Male</label>

                            <input type="radio" class="btn-check" value= 'Male' name="gender" id="female">
                            <label class="btn btn-sm btn-outline-secondary">Female</label>

                            
                               <!-- <div class="valid-feedback">You selected a gender!</div> -->
                               <br>
                                
                            </div>

                        
                        
                  

                            <div class="form-button mt-3">
                                <input id="submit" type="submit" class="btn btn-primary" name='sub'>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>



<?php
include 'dB.php';
include 'studentAffairs.php';
if(isset($_POST['sub'])){
    $sA = new studentAffairs();
    $sA->addStudent($_POST['firstName'], $_POST['secondName'], $_POST['thirdName'], $_POST['fourthName'],
                    $_POST['nationalNumber'], $_POST['dateofbirth'], $_POST['gender'], $_POST['nationality'],
                    $_POST['religion'], $_POST['birthplace'], $_POST['mothername'], $_POST['address'], 
                    $_POST['number'], $_POST['father'], $_POST['clas'], $_POST['regnumber']);
                    echo $_POST['gender'];
}
?>