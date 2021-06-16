<style>
   <?php include "Styles/sp.css" ?>
	</style>

<?php
include "dB.php";
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($conn, $_POST["query"]);
	$query = "
	SELECT * FROM Students 
	WHERE ID LIKE '%".$search."%' ||
        name LIKE '%".$search."%'||
		registrationNumber LIKE '%".$search."%'";
		
}
else
{
	$query = "
	SELECT * FROM Students ORDER BY ID ASC";
}
echo "<div class='register'>";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
		while($row = mysqli_fetch_array($result))
	{
		?>
			
		   <div class="comp">
				<?php echo "name: " .$row["name"] ?></h4>
                <br>
				<?php echo "registration number: " .$row["registrationNumber"] ?>
            <br>
				<a href= "updateS.php?<!?>=<?php echo $row['ID']+255?>" class="li">View</a><br>
				</div>
	<?php
	}
}
else
{
	echo '<h3>Data Not Found</h3>';
}
echo "</div>";
?>