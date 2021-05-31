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
                        <h3>Add Professions</h3>
                       
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
                               <label class="mb-3 mr-1" for="dateofbirth"><b>Birth Date:</b></label>
                               <div class="col-md-12">
                               <input class="form-control" type="date" name="dob" placeholder="Date of Birth in (dd/mm/yy)" required>
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                               <br>
                               <div class="col-md-12">
                               <input class="form-control" type="text" name="nationalNumber" placeholder="National ID" required>
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                                <div class="col-md-12">
                               <input class="form-control" type="text" name="foreignerNumber" placeholder="Foreigner ID" required>
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>

                               <div class="col-md-12">
                               <input class="form-control" type="text" name="address" placeholder="Address" required>
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                               <div class="col-md-12">
                                <input class="form-control" type="text" name="phoneNumber" placeholder="Telephone" required>
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="qual" placeholder="Qualification" required>
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="gradyear" placeholder="Graduation Year" required>
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>
                                 <div class="col-md-12">
                                <select class="form-control" type="text" name="gradgrade" placeholder="Graduation Grade" required>
                                  <option value='Grade'>Role</option>
                                  <option value='Pass'>Pass</option>
                                  <option value='Good'>Good</option>
                                  <option value='Very Good'>Very Good</option>
                                  <option value='Excellent'>Excellent</option>
                                  </select>
                                 </div>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="expyears" placeholder="Experienced Years" required>
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="job" placeholder="Job" required>
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
                                 <label class="mb-3 mr-1" for="contractdate">Contract Date: </label>
                                 <div class="col-md-12">
                                <input class="form-control" type="date" name="contrDate" placeholder="Contract Date" required>
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="inNum" placeholder="Insurrance number" required>
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>
                                 <label class="mb-3 mr-1" for="insdate">Insurance Date: </label>
                                 <div class="col-md-12">
                                <input class="form-control" type="date" name="indate" placeholder="Insurrance Date" required>
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>
                                 <label class="mb-3 mr-1" for="insdate">Insurance End Date: </label>
                                 <div class="col-md-12">
                                <input class="form-control" type="date" name="inenddate" placeholder="Insurrance End Date" required>
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>
                                 
                                 <div class="col-md-12">
                                <select class="form-control" type="text" name="systemrole" placeholder="System Role" required>
                                  <option value='Select Role'>Role</option>
                                  <option value='directorgeneral'>Director General</option>
                                  <option value='schoolheadmaster'>School Headmaster</option>
                                  <option value='websitemanager'>Website Manager</option>
                                  <option value='studentaffairs'>Student Affairs</option>
                                  <option value='expenses'>Expenses collection official</option>
                                  <option value='floordirector'>Floor Director</option>
                                  <option value='personnelaffairs'>Personnel Affairs</option>
                                  <option value='secretary'>Secretary</option>
                                  <option value='accountingoffice'>Accounting</option>
                                  <option value='safe'>School's Safe</option>
                                  <option value='storage'>Storage Worker</option>
                                  <option value='busmatron'>Bus Matron</option>
                                  <option value='busesmanager'>Buses Manager</option>
                                  <option value='worker'>Worker</option>
                                  <option value='security'>Security</option>
                                  <option value='control'>Control</option>
                                  <option value='teacher'>Teacher</option>
                                  <option value='clinicdoctor'>Clinic Doctor</option>
                                  <option value='receptionist'>Receptionist</option>
                                  </select>
                                </div>
                                <div class="col-md-12">
                                <select class="form-control" type="text" name="educationSystem" placeholder="Education System" required>
                                  <option value='alleducation'>All</option>
                                  <option value='default'>Default</option>
                                  </select>
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
                                            insuranceDate, insuranceEndDate, systemRole, educationSystem,
                                            notes)
    VALUES 
    ('$_POST[name]', '$_POST[code]', 
    '$_POST[nameInArabic]', '$_POST[religion]', 
    '$_POST[nationality]', '$_POST[gender]', 
    '$_POST[dob]', '$_POST[nationalNumber]', '$_POST[foreignerNumber]', 
    '$_POST[address]', '$_POST[phoneNumber]', 
    '$_POST[qual]', '$_POST[gradyear]', '$_POST[gradgrade]'
    '$_POST[expyears]', '$POST[job]', '$_POST[specialization]', 
    '$_POST[department]', '$_POST[contrDate]', '$_POST[inNum]',
    '$_POST[indate]', '$_POST[inenddate]', '$_POST[systemrole]','$POST[educationSystem]', '$_POST[notes]')");
    echo '<script>alert("Done, Data Inserted")</script>';
}
?>