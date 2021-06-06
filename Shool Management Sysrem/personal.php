<!DOCTYPE html>
<html>
<head>
  <title>Personnel</title>
  <style>
<?php include "Styles/t.css"; ?>
</style>
<style>
	body{
		background-image: url('Images/banner_img.png');
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
				<a href="personal.php">Home</a>
  				<a href="AddProfession.php">Add Teacher</a>
				<a href="removeteacher.php">Remove Teacher</a>
				<a href="Viewteachers.php">View Teachers</a> 
				<a href='homepage.php'>Log Out</a>	
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