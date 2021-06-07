<?php



$connect = new PDO("mysql:host=localhost;dbname=School", "root", "");

$output = '';

$query = '';

if(isset($_POST["query"]))
{
 $search = str_replace(",", "|", $_POST["query"]);
 $query = "
 SELECT * FROM Students 
 WHERE name REGEXP '".$search."' 
 OR address REGEXP '".$search."' 
 OR registrationNumber REGEXP '".$search."' 
 ";
}
else
{
 $query = "
 SELECT * FROM Students ORDER BY ID
 ";
}

$statement = $connect->prepare($query);
$statement->execute();

while($row = $statement->fetch(PDO::FETCH_ASSOC))
{
 $data[] = $row;
}

echo json_encode($data);

?>

<?php
  if(isset($_POST['sub'])){
    if(isset($_POST['delete'])){
      foreach($_POST['delete'] as $dele){
        mysqli_query($conn, "DELETE FROM Students WHERE ID = '" .$dele. "'");
     }
   }  
      else{
         echo "ERROR U SHOULD SELECT USER TO DELETE IT";
        }
        header("refresh: 0.1");  
  }  
?>
