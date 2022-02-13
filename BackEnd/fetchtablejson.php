<?php

require_once("conn.php");

//$tablename = 'xyz'; 

$sql =  "SELECT * FROM orderline";
mysqli_set_charset($conn, 'utf8');
$result= mysqli_query($conn,$sql);
 
$json_array = array();

while($row= mysqli_fetch_assoc($result))
    {
      $json_array[orders][]= $row;
        
    }



echo json_encode($json_array);
?>