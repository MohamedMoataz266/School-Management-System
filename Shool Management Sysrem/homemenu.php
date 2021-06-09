<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <style>
<?php include "Styles/homemenu.css"; ?>
</style>
<style>
	body{
		background-image: url('Images/banner_img.png');;
	}
	</style>
</head>

<body> 
<div class="content">	
 <div id="mainbox" onclick="openFunction()"><div class="session">&#9776;
 					
					</div>
					</div>
  <div id="menu" class="sidemenu">
  				
                <a href="homepage.php">Home</a>
  	            <a href="logIn.php">Log In</a>
				<a href="Registration.php">Sign Up</a>
				<a href="normalLogIn.php">Already a user?</a>
				
				
			</nav>
   <a href="#" class="closebtn" onclick="closeFunction()">&times;</a>
 </div>
</div>
<script type="text/javascript">
 function openFunction(){
  document.getElementById("menu").style.width="300px";
  document.getElementById("mainbox").style.marginLeft="300px";
 }
function closeFunction(){
 document.getElementById("menu").style.width="0px";
 document.getElementById("mainbox").style.marginLeft="0px";

}
</script>

</body>
</html>