<?php 
include 'connect.php';
session_start();
if(isset($_POST['id'])){
    $quantity = $_POST['value'];
    $id = $_POST['id'];

	if(isset($_SESSION['cart'])) {
		foreach($_SESSION['cart'] as $key => $product){
			if($id == $product['id']){
				$_SESSION['cart'][$key]["quantity"] = $quantity;

                if($_SESSION['cart'][$key]["quantity"] < 1){
                    unset($_SESSION['cart'][$key]);
                 }
			}
        }
	}	
}

?>