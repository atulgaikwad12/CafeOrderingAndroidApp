<?php
    require_once("conn.php");
    
    $order_id = $_POST['order_id'];
    
    $product_name = $_POST['productname'];
    $price = $_POST['price'];
    $subtotal = $_POST['subtotal'];
    $quantity = $_POST['quantity'];
    $image_url = $_POST['img_url'];
    //$number_of_items = $_POST['number'];
    
    
    $query = "INSERT INTO cartline(order_id, product_name, price, subtotal, quantity, image_url) VALUES ('$order_id', '$product_name','$price', '$subtotal','$quantity','$image_url')";
    
    $res = $conn -> query($query);
    
    if($conn->error){
    	echo "error : ".$conn->error;
    }


?>