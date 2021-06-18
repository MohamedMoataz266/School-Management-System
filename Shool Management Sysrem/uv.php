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
    SELECT * FROM addcoursevideo
    WHERE ID LIKE '%".$search."%' ||
        course LIKE '%".$search."%'||
        videoname LIKE '%".$search."%'";
        
}
else
{
    $query = "
    SELECT * FROM addcoursevideo ORDER BY ID ASC";
}
echo "<div class='register'>";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
        while($row = mysqli_fetch_array($result))
    {
        ?>
            
           <div class="comp">
                <h4><?php echo "Course: " .$row["course"] ?></h4>
                <h4><?php echo "VideoName: " .$row["videoname"] ?></h4>
                <h4><?php echo "Video: " .$row["video"] ?></h4>
                <a href= "updatethevideo.php?<!?>=<?php echo $row['ID']+255?>">View</a><br>
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