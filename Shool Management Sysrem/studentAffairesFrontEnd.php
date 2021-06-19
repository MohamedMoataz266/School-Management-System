<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src='Js/menu.js'></script>
<style>
	img{
		width: 60%;
		height: 60%;
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
<?php include 'homemenu.php'; ?>
<body onload='studentAffairsMenu()'>

<div class="register">
<?php
session_start();
?>
<h1>Welcome </h1>
<h2>Teacher</h2>
<strong><?php echo $_SESSION['name']; ?></strong>
</div>

</body>