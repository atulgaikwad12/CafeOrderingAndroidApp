<?php

require_once("conn.php");

$order_id= $_GET['order_id']; 

$sql =  "SELECT * FROM cartline WHERE order_id=".$order_id;
mysqli_set_charset($conn, 'utf8');
$result= mysqli_query($conn,$sql);
 
$json_array = array();

while($row= mysqli_fetch_assoc($result))
    {
      $json_array[cart][]= $row;
        
    }



echo json_encode($json_array);
?>