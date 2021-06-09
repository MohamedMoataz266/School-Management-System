<!DOCTYPE html>
<html>
<head>
  <title>Student</title>
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
					echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Welcome <br>&nbsp&nbsp&nbsp&nbsp'.$_SESSION['name'];
				?></h3>
  				<a href="assignments.php">Assignments</a>
				<a href="">View grades</a> 
                <a href="viewvideocourse.php">See Videos</a>
				<a href="studentMessageFrontEnd.php">Send Message</a>
				<a href="viewMessageStudent.php">View Messages</a>
				<?php
				  include 'Chatting.php';
				  $no = new Chatting();
				  if($no->getNumberOfMessages() > 0){
				   echo '<strong>&nbsp&nbsp&nbsp&nbsp' .$no->getNumberOfMessages(). '</strong>';
				}  
				   else{
					 echo '';   
				   }
				?>
				</a>
				<a href='logout.php'>Log out</a>	
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