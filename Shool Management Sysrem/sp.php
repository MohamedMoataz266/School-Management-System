<style>
.comp{
background-color: black;
text-align: center;

}

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
        religion LIKE '%".$search."%'||
        registrationNumber LIKE '%".$search."%'||
        class LIKE '%".$search."%'";
        
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
                <h4><?php echo "name: " .$row["name"] ?></h4>
                <h4><?php echo "religion: " .$row["religion"] ?></h4>
                <h4><?php echo "registrationNumber: " .$row["registrationNumber"] ?></h4>
                <h4><?php echo "class: " .$row["class"] ?></h4>
                <a href= "updatethestudent.php?<!?>=<?php echo $row['ID']+255?>">View</a><br>
                </div>
                <br>
    <?php
    }
}
else
{
    echo '<h3>Data Not Found</h3>';
}
echo "</div>";
?>