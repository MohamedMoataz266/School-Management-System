<html>
<head>
<title>Student Home Page</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src='Js/menu.js'></script>
<style>
	img{
		width: 30%; height: 60%; 
	}
h2
{
	color: #A8DDFD;
}
strong
{
	color: #A8DDFD;
}
	body{
      margin: 0;
      padding: 0;
      background-color:#05243A; 
      background-size: cover;
      color: white;
    }
.register
{
	 width:150px;
  height:150px;
  background:black;
  color:white;
  top:70%;
  left: 50%;
  position: absolute;
  transform: translate(-50%,-80%);
  text-align: center;
  padding: 70px 30px;
}
</style>
</head>
<?php include 'homemenu.php'; ?>
<body onload='studentMenu()'>
	<div class="register">
<?php
session_start();
?>
<h1>Welcome </h1>
<h2>Student</h2>
<strong><?php echo $_SESSION['name']; ?></strong>
</div>
</body>
</html>