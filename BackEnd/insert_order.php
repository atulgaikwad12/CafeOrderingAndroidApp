<?php

require_once("conn.php");


$order_id = $_POST['id'];
$transaction_id = $_POST['transaction_id'];
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$timeslot = $_POST['timeslot'];
$grand_total = $_POST['grand'];
$order_time_stamp = $_POST['timestamp'];
$number_of_items = $_POST['number'];


$query = "INSERT INTO orderline(order_id, transaction_id, name, mobile, email, timeslot, grand_total, order_time_stamp, number_of_items) VALUES ('$order_id','$transaction_id', '$name','$mobile', '$email', '$timeslot','$grand_total','$order_time_stamp', '$number_of_items')";

$res = $conn -> query($query);

if($conn->error){
	echo "error : ".$conn->error;
}

?>