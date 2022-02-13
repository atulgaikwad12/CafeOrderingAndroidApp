<?php

require_once("conn.php");

//$tablename = 'xyz'; 

$sql =  "SELECT * FROM xyz";
mysqli_set_charset($conn, 'utf8');
$result= mysqli_query($conn,$sql);
 
$json_array = array();

while($row= mysqli_fetch_assoc($result))
    {
      $json_array[allItems][]= $row;
        
    }
    
$sql =  "SELECT * FROM xyz where ptype Like 'Snacks'";
mysqli_set_charset($conn, 'utf8');
$result= mysqli_query($conn,$sql);

while($row= mysqli_fetch_assoc($result))
    {
      $json_array[snacks][]= $row;
        
    }
    
$sql =  "SELECT * FROM xyz where ptype Like 'Cold Drink'";
mysqli_set_charset($conn, 'utf8');
$result= mysqli_query($conn,$sql);
 
while($row= mysqli_fetch_assoc($result))
    {
      $json_array[colddrink][]= $row;
        
    }

$sql =  "SELECT * FROM xyz where ptype Like 'Lunch'";
mysqli_set_charset($conn, 'utf8');
$result= mysqli_query($conn,$sql);

while($row= mysqli_fetch_assoc($result))
    {
      $json_array[lunch][]= $row;
        
    }

$sql =  "SELECT * FROM xyz where ptype Like 'Todays Special'";
mysqli_set_charset($conn, 'utf8');
$result= mysqli_query($conn,$sql);
 
while($row= mysqli_fetch_assoc($result))
    {
      $json_array[ts][]= $row;
        
    }


echo json_encode($json_array);
?>