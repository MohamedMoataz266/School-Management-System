<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <style>
<?php include "Styles/sa.css"; ?>
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
					echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Welcome <br>&nbsp&nbsp&nbsp&nbsp'.$_SESSION['name'];
				
			?>
				</h3>
  	            <a href="studentAffairesFrontEnd.php">Home</a>
				<a href="AddStudent.php">Add Student</a>
				<a href="removestudent.php">Remove Student</a>
				<a href="viewStudentsStudentAffairs.php">View Students</a> 
				<a href='homepage.php'>Log out</a>	
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