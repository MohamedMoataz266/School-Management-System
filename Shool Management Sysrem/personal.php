<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src='Js/menu.js'></script>
<style>
	

	<?php require_once "Styles/personal.css"?>
</style>
<?php include 'homemenu.php'; ?>
<body onload='personnelMenu()'>
<div class = "register">
<?php
session_start();
?>
<h1>Welcome </h1>
<h2>Employee</h2>
<strong><?php echo $_SESSION['name']; ?></strong>
</div>
</body>