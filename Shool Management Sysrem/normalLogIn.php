<?php  include 'dB.php'; ?>
<title>Log In</title>
<link href="Styles/normalLogIn.css" rel="stylesheet" id="bootstrap-css">
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="Js/normalLogIn.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="Images/logo.jpg" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="" method="POST">
					<span class="login100-form-title">
						Welcome To Amoun
					</span>

					<div class="wrap-input100 validate-input">
						<select class="sT" name='sT'>
                        <option value='Select Type'>Select Type</option>
                        <option value='Student'>Student</option>
                        <option value='Teacher'>Teacher</option>
                        <option value='Student Affairs Employee'>Student Affairs Employee</option>
                        <option value='Personel Affairs Employee'>Personnel Affairs Employee</option>
                        </select>
                    	<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input">
						<select class="sC" name='sC'>
                        <option value='Select Class'>Select Class</option>
                           <?php
                            $sql = mysqli_query($conn, "SELECT class FROM Students");
                            while($row = mysqli_fetch_array($sql)){
                                ?>
                                <option value='<?php echo $row['class'] ?>'><?php echo $row['class']; ?></option>
                            <?php
                            }
                           ?>
                        </select>
                    	<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
                   
                    <div class="wrap-input100 validate-input">
						<select class="sN" name='sN'>
                        <option value='Select Name'>Select Name</option>
                           <?php
                            $sql = mysqli_query($conn, "SELECT name FROM Students WHERE class='".$_POST['sC']."'");
                            while($row = mysqli_fetch_array($sql)){
                                ?>
                                <option value='<?php echo $row['name'] ?>'><?php echo $row['name']; ?></option>
                            <?php
                            }
                           ?>
                        </select>
                    	<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
                    

                    
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100" type="text" name="nN" placeholder="national Number">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
                    <div class="container-login100-form-btn">
						<button class="login100-form-btn" name="sub">
							Login
						</button>
					</div><br>
            </form>
			</div>
		</div>
	</div>

<?php
include 'dB.php';
if(isset($_POST['sub'])){
}
?>
