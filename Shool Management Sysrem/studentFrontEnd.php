<html>
<head>
<title>Student Home Page</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src='Js/menu.js'></script>
<style>
	img{
		width: 30%; height: 60%; 
	}
</style>
</head>
<?php include 'homemenu.php'; ?>
<body onload='studentMenu()'>
<?php
session_start();
?>
<h1>Welcome <?php echo $_SESSION['name']; ?></h1>

</body>
</html>