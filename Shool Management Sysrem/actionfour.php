<?php



$connect = new PDO("mysql:host=localhost;dbname=School", "root", "");

$output = '';

$query = '';

if(isset($_POST["query"]))
{
 $search = str_replace(",", "|", $_POST["query"]);
 $query = "
 SELECT * FROM personnelaffairs
 WHERE name REGEXP '".$search."' 
 OR code REGEXP '".$search."' 
 OR nationalNumber REGEXP '".$search."' 
 OR qualification REGEXP '".$search."' 
 ";
}
else
{
 $query = "
 SELECT * FROM personnelAffairs ORDER BY ID
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
