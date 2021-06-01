<title>Log In</title>
<style>
	<?php
include "Styles/logIn.css";
	?>
</style>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="Js/logIn.js"></script>
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

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="sub">
							Login
						</button>
					</div>
                                <br>

					<div class="text-center p-t-136">
						<a class="txt2" href="Registration.php">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

<?php
include 'User.php';
if(isset($_POST['sub'])){
	$student = new User();
	$student->logIn($_POST['email'], $_POST['pass']);
}


?>
