<?php 
require_once("conn.php");
$orderid= $_GET['order_id'];


$sql = "SELECT * FROM orderline WHERE order_id ='".$orderid."'";
$result= $conn->query($sql);
$row = $result->fetch_assoc();

if($result==TRUE){
    if ($row['mark']=="unpaid") {
    
           $dsql = "UPDATE orderline SET mark='paid' WHERE order_id ='".$orderid."'";
            if ($conn->query($dsql) === TRUE) {
            echo 'Order marked as Paid successfully';
            }
            
            else 
            echo 'Error in Marking Order As Paid';
    } 
    elseif ($row['mark']=="paid"){
        
        $dsql = "UPDATE orderline SET mark='unpaid' WHERE order_id ='".$orderid."'";
        if ($conn->query($dsql) === TRUE) {
        echo 'Order marked as Unpaid successfully';
        }
        
        else 
        echo 'Error in Marking Order As Unpaid';
    }
    
}
else {
   // echo "Error: " . $conn->error;
    echo 'Cannot Mark Order As Unpaid/ Paid';
}





?>
