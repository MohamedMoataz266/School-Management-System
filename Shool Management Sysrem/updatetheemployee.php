<html>
<head>

<?php include "addteacher.css";
ob_start();
?>



<?php include "personal.php"; 
include 'dB.php';

$sql = "SELECT * FROM personnelaffairs WHERE ID='".$_GET['<!?>']."'-255";
 $result = mysqli_query($conn, $sql);

 if($result)
 {
    $row = mysqli_fetch_array($result);
 



?>

</head>
<body>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Add Professions</h3>
                       
                        <form class="requires-validation" novalidate method= 'POST' action ="" >

                            <label class="mb-3 mr-1" for="insdate">Full Name (till fourth name): </label>
                            <div class="col-md-12">
                               <input class="form-control" type="text" name="name" placeholder="Full Name (till fourth name)" value="<?php echo $row['name']; ?>" required>
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>

                               <label class="mb-3 mr-1" for="insdate">Code: </label>
                               <div class="col-md-12">
                               <input class="form-control" type="text" name="code" placeholder="Code" value="<?php echo $row['code']; ?>" required>
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>

                               <label class="mb-3 mr-1" for="insdate">Name in Arabic: </label>
                               <div class="col-md-12">
                               <input class="form-control" type="text" name="nameInArabic" placeholder="Name in Arabic" required value="<?php echo $row['arabicName']; ?>">
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>

                               <label class="mb-3 mr-1" for="insdate">Religion: </label>
                               <div class="col-md-12">
                               <input class="form-control" type="text" name="religion" placeholder="Religion" required value="<?php echo $row['religion']; ?>" >
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                               <div class="col-md-12">

                                <label class="mb-3 mr-1" for="insdate">Nationality: </label> <br>
                               <input class="form-control" type="text" name="nationality" placeholder="Nationality" required value="<?php echo $row['nationality']; ?>">
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                               
                               <div class="col-md-12 mt-3">
                            <label class="mb-3 mr-1" for="gender">Gender: </label>

                            <input type="radio" class="btn-check" name="gender" id="male" autocomplete="off" value="<?php echo $row['gender']; ?>">
                            <label class="btn btn-sm btn-outline-secondary" for="male">Male</label>

                            <input type="radio" class="btn-check" name="gender" id="female" autocomplete="off" value="gender">
                            <label class="btn btn-sm btn-outline-secondary" for="female">Female</label>

                            
                               <!-- <div class="valid-feedback">You selected a gender!</div> -->
                               <br>
                                
                            </div>
                               <br>

                               <label class="mb-3 mr-1" for="dateofbirth">Birth Date:</label>
                               <div class="col-md-12">
                               <input class="form-control" type="date" name="dob" placeholder="Date of Birth in (dd/mm/yy)" value="<?php echo $row['birthDate']; ?>" required>
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                               <br>

                               <label class="mb-3 mr-1" for="insdate">National ID: </label>
                               <div class="col-md-12">
                               <input class="form-control" type="text" name="nationalNumber" placeholder="National ID" value="<?php echo $row['nationalNumber']; ?>" required>
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>

                               <label class="mb-3 mr-1" for="insdate">Foreigner ID: </label>
                                <div class="col-md-12">
                               <input class="form-control" type="text" name="foreignerNumber" placeholder="Foreigner ID" value="<?php echo $row['foreginerNumber']; ?>" required>
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>


                               <label class="mb-3 mr-1" for="insdate">Address: </label>
                               <div class="col-md-12">
                               <input class="form-control" type="text" name="address" placeholder="Address" value="<?php echo $row['address']; ?>" required>
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>

                               <label class="mb-3 mr-1" for="insdate">Phone Number: </label>
                               <div class="col-md-12">
                                <input class="form-control" type="text" name="phoneNumber" placeholder="Telephone" value="<?php echo $row['phoneNumber']; ?>" required>
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>

                                 <label class="mb-3 mr-1" for="insdate">Qualification: </label>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="qual" placeholder="Qualification" value="<?php echo $row['qualification']; ?>" required>
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>

                                 <label class="mb-3 mr-1" for="insdate">Graduation Year: </label>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="gradyear" placeholder="Graduation Year" value ="<?php echo $row['graduationYear'];?>"required>
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>

                                 <label class="mb-3 mr-1" for="insdate">Graduation Grade: </label>
                                 <div class="col-md-12">
                                <select class="form-control" type="text" name="gradgrade" placeholder="Graduation Grade" value="<?php echo $row['graduationGrade']; ?>"required>
                                  <option value='Grade'>Grade</option>
                                  <option value='Pass'>Pass</option>
                                  <option value='Good'>Good</option>
                                  <option value='Very Good'>Very Good</option>
                                  <option value='Excellent'>Excellent</option>
                                  </select>
                                 </div>

                                 <label class="mb-3 mr-1" for="insdate">Experienced Years: </label>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="expyears" placeholder="Experienced Years" value="<?php echo $row['expYears']; ?>" required>
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>

                                 <label class="mb-3 mr-1" for="insdate">Job: </label>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="job" placeholder="Job" value="<?php echo $row['job']; ?>" required>
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>

                                 <label class="mb-3 mr-1" for="insdate">Specialization: </label>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="specialization" placeholder="Specialization" value="<?php echo $row['specialization'];?>" required>
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>

                                 <label class="mb-3 mr-1" for="insdate">Department: </label>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="department" placeholder="Department" value ="<?php echo $row['department'];?>"required>
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>

                                 <label class="mb-3 mr-1" for="contractdate">Contract Date: </label>
                                 <div class="col-md-12">
                                <input class="form-control" type="date" name="contrDate" placeholder="Contract Date" value="<?php echo $row['contractDate'];?>" required>
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>

                                 <label class="mb-3 mr-1" for="insdate">Insurance Number: </label>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="inNum" placeholder="Insurrance number" value="<?php echo $row['insuranceNumber']; ?>"  required>
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>

                                 <label class="mb-3 mr-1" for="insdate">Insurance Date: </label>
                                 <div class="col-md-12">
                                <input class="form-control" type="date" name="indate" placeholder="Insurrance Date" value="<?php echo $row['insuranceDate'];?>" required>
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>
                                 <label class="mb-3 mr-1" for="insdate">Insurance End Date: </label>
                                 <div class="col-md-12">
                                <input class="form-control" type="date" name="inenddate" placeholder="Insurrance End Date"
                                value="<?php echo $row['insuranceEndDate'];?>" required>
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>
                                 <label class="mb-3 mr-1" for="insdate">System Role: </label>
                                 <div class="col-md-12">
                                <select class="form-control" type="text" name="systemrole" placeholder="System Role" value="<?php echo $row['systemRole'];?>" required>
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

                                <label class="mb-3 mr-1" for="insdate">Education System: </label>
                                <div class="col-md-12">
                                <select class="form-control" type="text" name="educationSystem" placeholder="Education System" value="<?php echo $row['educationSystem']; ?>" required>
                                  <option value='education System'>Education System</option>
                                  <option value='alleducation'>All</option>
                                  <option value='default'>Default</option>
                                  </select>
                                </div>

                                <label class="mb-3 mr-1" for="insdate">Notes: </label>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="notes" placeholder="Notes" value="<?php echo $row['notes']?>" required>
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>

                           <br>
                           
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
include 'personnel.php';
if(isset($_POST['update'])){
    $pA = new personnelAffairs();
    $ge=$_GET['<!?>']-255;
    $pA->updateProfession($_POST['name'], $_POST['code'], 
    $_POST['nameInArabic'], $_POST['religion'], 
    $_POST['nationality'], $_POST['gender'], 
    $_POST['dob'], $_POST['nationalNumber'], 
    $_POST['foreignerNumber'], $_POST['address'],
    $_POST['phoneNumber'], $_POST['qual'], 
    $_POST['gradyear'], $_POST['gradgrade'],
    $_POST['expyears'], $_POST['job'], $_POST['specialization'], 
    $_POST['department'], $_POST['contrDate'], $_POST['inNum'],
    $_POST['indate'], $_POST['inenddate'], 
    $_POST['systemrole'],$_POST['educationSystem'], 
    $_POST['notes']);
}
?>