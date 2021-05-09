<head>
<style>
  <?php 
  include "Styles/AddStudent.css";
  include "studentaffaires.php";
  ?>
</style>
</head>
<body>


    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Add Student</h3>
                       
                        <form class="requires-validation" novalidate>

                            <div class="col-md-12">
                               <input class="form-control" type="text" name="fn" placeholder="Firstname" required>
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                               <input class="form-control" type="text" name="sn" placeholder="second name" required>
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                               <input class="form-control" type="text" name="tn" placeholder="third name" required>
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                               <input class="form-control" type="text" name="fn" placeholder="forth name" required>
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                               <div class="col-md-12">
                               <input class="form-control" type="text" name="regnumber" placeholder="Registration number" required>
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                               <div class="col-md-12">
                               <input class="form-control" type="text" name="nationality" placeholder="nationality" required>
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                               <div class="col-md-12">
                               <input class="form-control" type="text" name="religion" placeholder="Religion" required>
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                               <div class="col-md-12">
                               <input class="form-control" type="text" name="birthplace" placeholder="place of birth" required>
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                               <br>
                               <div class="col-md-12">
                               <input class="form-control" type="date" name="dateofbirth" placeholder="dateofbirth" required>
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                               <br>
                               <div class="col-md-12">
                               <input class="form-control" type="date" name="ageoctober" placeholder="Age in October" required>
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>
                                <div class="col-md-12">
                               <input class="form-control" type="text" name="mothername" placeholder="mother's name" required>
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>

                               <div class="col-md-12">
                               <input class="form-control" type="text" name="address" placeholder="address" required>
                               <!-- <div class="valid-feedback">Username field is valid!</div> -->
                               </div>



                            <div class="col-md-12">
                                <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>

                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="number" placeholder="phone number" required>
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>

                                 <div class="col-md-12">
                                <input class="form-control" type="text" name="father" placeholder="father's job" required>
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 </div>

                           <div class="col-md-12">
                                <select class="form-select mt-3" required>
                                      <option selected disabled value="">class</option>
                                      <option value="jweb">---</option>
                                      <option value="sweb">---</option>
                                      <option value="pmanager">---</option>
                               </select>
                                <!-- <div class="valid-feedback">You selected a position! </div> -->
                                
                            </div>

                           

                           <br>
                           <div class="col-md-12 mt-3">
                            <label class="mb-3 mr-1" for="gender">Gender: </label>

                            <input type="radio" class="btn-check" name="gender" id="male" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="male">Male</label>

                            <input type="radio" class="btn-check" name="gender" id="female" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="female">Female</label>

                            
                               <!-- <div class="valid-feedback">You selected a gender!</div> -->
                               <br>
                                
                            </div>

                        
                        
                  

                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
