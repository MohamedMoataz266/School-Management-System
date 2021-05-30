<head>
<style>
  <?php 
  include "Styles/addteacher.css";
  ob_start();
  include "personal.php";
  ?>
</style>
</head>
<body>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Add Teacher</h3>
                       
                        <form class="requires-validation" novalidate>

                            <div class="col-md-12">
                               <input class="form-control" type="text" name="name" placeholder="Full Name (till fourth name)" required>
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                               <div class="col-md-12">
                               <input class="form-control" type="text" name="code" placeholder="Code" required>
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                               <div class="col-md-12">
                               <input class="form-control" type="text" name="nameInArabic" placeholder="Name in Arabic" required>
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                               <div class="col-md-12">
                               <input class="form-control" type="text" name="religion" placeholder="Religion" required>
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                               <div class="col-md-12">
                               <input class="form-control" type="text" name="nationality" placeholder="Nationality" required>
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                               <div class="col-md-12 mt-3">
	                            <label class="mb-3 mr-1" for="gender">Gender: </label>

	                            <input type="radio" class="btn-check" name="gender" id="male" autocomplete="off" required>
	                            <label class="btn btn-sm btn-outline-secondary" for="male">Male</label>

	                            <input type="radio" class="btn-check" name="gender" id="female" autocomplete="off" required>
	                            <label class="btn btn-sm btn-outline-secondary" for="female">Female</label>

                               <!-- <div class="valid-feedback">You selected a gender!</div> -->
                               <br>
                            	</div>
                               <br>
                               <div class="col-md-12">
                               <input class="form-control" type="date" name="dob" placeholder="Date of Birth" required>
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                               <br>
                               <div class="col-md-12">
                               <input class="form-control" type="text" name="nationalNumber" placeholder="National Number" required>
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                                <div class="col-md-12">
                               <input class="form-control" type="text" name="foreignerNumber" placeholder="Foreigner Number" required>
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>

                               <div class="col-md-12">
                               <input class="form-control" type="text" name="address" placeholder="Address" required>
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                               <div class="col-md-12">
                                <input class="form-control" type="text" name="phoneNumber" placeholder="Phone Number" required>
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>

                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="gradyear" placeholder="Graduation Year" required>
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="gradgrade" placeholder="Graduation Grade" required>
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="expyears" placeholder="Experienced Years" required>
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="specialization" placeholder="Specialization" required>
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="department" placeholder="Department" required>
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="indate" placeholder="Insurrance Date" required>
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="inNum" placeholder="Insurrance number" required>
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="inenddate" placeholder="Insurrance End Date" required>
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="qual" placeholder="Qualifications" required>
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="contrDate" placeholder="Contract Date" required>
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>
                                 
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="systemrole" placeholder="System Role" required>
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="notes" placeholder="Notes" required>
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>

                           <br>
                           
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
if(isset($_POST['sub'])){
    mysqli_query($conn, "INSERT INTO personnelAffairs (name, code, 
                                            arabicName, religion, 
                                            nationality, gender, 
                                            birthDate, nationalNumber, 
                                            foreginerNumber, address, 
                                            phoneNumber, qualification, 
                                            graduationYear, graduationGrade, 
                                            expYears, job, specialization,
                                            department, contractDate, insuranceNumber,
                                            insuranceDate, insuranceEndDate, systemRole,
                                            notes)
    VALUES 
    ('$_POST[name]', '$_POST[code]', 
    '$_POST[nameInArabic]', '$_POST[religion]', 
    '$_POST[nationality]', '$_POST[gender]', 
    '$_POST[dob]', '$_POST[nationalNumber]', '$_POST[foreignerNumber]', 
    '$_POST[address]', '$_POST[phoneNumber]', 
    '$_POST[qual]', '$_POST[gradyear]', '$_POST[gradgrade]'
    '$_POST[expyears]', 'Teacher', '$_POST[specialization]', 
    '$_POST[department]', '$_POST[contrDate]', '$_POST[inNum]',
    '$_POST[indate]', '$_POST[inenddate]', '$_POST[systemrole]', '$_POST[notes]')");
    echo '<script>alert("Done, Data Inserted")</script>';
}
?>