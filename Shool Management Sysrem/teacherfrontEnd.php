<!DOCTYPE html>
<html>
<head>
  <title>Teacher</title>
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

				<h3><?php  
					session_start();
					echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspWelcome<br>&nbsp&nbsp&nbsp&nbsp'.$_SESSION['email'];
				?></h3>
  				<a href="viewstudents.php">view students profile</a>
				<a href="addQuestions.php">add assigments</a>
				<a href="">add grades</a> 
                <a href="">add video or link</a>
				<a href="viewAnswers.php">view Answers</a>
				<a href='logout.php'>LogOut</a>	
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