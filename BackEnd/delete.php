<?php 
require_once("conn.php");
$orderid= $_GET['order_id'];

$sql = "DELETE FROM orderline WHERE order_id ='".$orderid."'";

if ($conn->query($sql) === TRUE) {
    
    $dsql = "DELETE FROM cartline WHERE order_id ='".$orderid."'";
    if ($conn->query($dsql) === TRUE) {
    echo '<script language="javascript">';
    echo 'alert("Order Deleted successfully")';
    echo '</script>';
   echo "<script>window.location = 'cafeteria-admin.php';</script>";
    }
    
    else {
    echo '<script language="javascript">';
    echo 'alert("Error in Deleting Order")';
    echo '</script>';
   }
} else {
   // echo "Error deleting record: " . $conn->error;
   echo '<script language="javascript">';
    echo 'alert("Error in Deleting Order")';
    echo '</script>';
}



?>

<html>
    <head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    <body>
        <!--
        <div class="container">
            <div class="row">
                <div col-4 style="margin-top:30%; margin-left : 45%;">
                    <a href="cafeteria-admin.php" class="btn btn-primary btn-lg">BACK</a>
                </div>
            </div>
        </div>
        -->
    <body>
</html>


