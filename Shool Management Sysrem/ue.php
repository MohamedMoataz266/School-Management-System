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
    SELECT * FROM personnelaffairs
    WHERE ID LIKE '%".$search."%' ||
        code LIKE '%".$search."%'||
        name LIKE '%".$search."%'||
        nationalNumber LIKE '%".$search."%'||
        qualification LIKE '%".$search."%'";
        
}
else
{
    $query = "
    SELECT * FROM personnelaffairs ORDER BY ID ASC";
}
echo "<div class='register'>";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
        while($row = mysqli_fetch_array($result))
    {
        ?>
            
           <div class="comp">
                <h4><?php echo "code: " .$row["code"] ?></h4>
                <h4><?php echo "name: " .$row["name"] ?></h4>
                <h4><?php echo "nationalNumber: " .$row["nationalNumber"] ?></h4>
                <h4><?php echo "qualification: " .$row["qualification"] ?></h4>
                <a href= "updatetheemployee.php?<!?>=<?php echo $row['ID']+255?>">View</a><br>
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