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
 OR religion REGEXP '".$search."' 
 OR registrationNumber REGEXP '".$search."'
 OR class REGEXP '".$search."' 
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
