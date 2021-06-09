<?php
  try{
    $conn = mysqli_connect("localhost", "root", "", "School");
  }catch(Exception $ex){
      echo "Error, Failed to connect to database";
    }
?>