<?php 
include 'connect.php';
session_start();
if(isset($_POST['id'])){
    $quantity = 1;
    $id = $_POST['id'];
    $sql = "SELECT * FROM `product` WHERE `id` = $id";
    $result = $conn->query($sql);
    $data = $result->fetch_assoc();
	$demo = 1;
	// var_dump($_SESSION['cart']);
	if(isset($_SESSION['cart'])) {
		foreach($_SESSION['cart'] as $key => $product){
			if($id == $product['id']){
				$demo = 2;
				$_SESSION['cart'][$key]["quantity"] = $_SESSION['cart'][$key]["quantity"] + 1;
			}
		}
	}
	if($demo == 1) {
		$sale = ['id' => $data['id'], 'title' => $data['title'], 'price' => $data['price'], 'image' => $data['image'] , 'quantity' => $quantity];
		$_SESSION['cart'][] = $sale;
	}
	
}

?>