<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=school", "root", "");

$output = '';

$query = '';

if(isset($_POST["query"]))
{
 $search = str_replace(",", "|", $_POST["query"]);
 $query = "
 SELECT * FROM students 
 WHERE name REGEXP '".$search."' 
 OR address REGEXP '".$search."' 
 OR registrationNumber REGEXP '".$search."' 
 ";
}
else
{
 $query = "
 SELECT * FROM students ORDER BY ID
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
