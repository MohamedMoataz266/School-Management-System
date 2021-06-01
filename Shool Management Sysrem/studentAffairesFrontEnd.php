<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <style>
<?php include "Styles/sa.css"; ?>
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
  				<h3>
				  <?php  
					session_start();
					echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspWelcome<br>&nbsp&nbsp&nbsp&nbsp'.$_SESSION['email'];
				?>
				</h3>
  	            <a href="studentAffairesFrontEnd.php">Home</a>
				<a href="AddStudent.php">AddStudent</a>
				<a href="removestudent.php">RemoveStudents</a>
				<a href="viewStudentsStudentAffairs.php">ViewStudents</a> 
				<a href='homepage.php'>LogOut</a>	
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