<?php
include "menuvideo.php";

class Database
{
	var $host = "localhost";
	var $user = "root";
	var $pass = "";
	var $db = "School";
	public function connect()
	{
		$con = mysqli_connect($this->host,$this->user,$this->pass,$this->db);
		return $con;
	}
	public function saveRecords($IE,$IN,$C,$CN,$VN,$V)
	{
		$conn = $this->connect();
		mysqli_query($conn, "update addcoursevideo set(email,instructorname,course,coursename,videoname,video) values('$IE','$IN','$C','$CN','$VN','$V')") or die(mysqli_error($conn));
		echo "<div style = 'padding:20px; background-color:yellow;'>
		Data Updated Successfully</div>";
	}
}
?>