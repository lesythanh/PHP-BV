<?php 
include 'connect.php';
session_start();
if(isset($_POST['id'])){
    $id = $_POST['id'];

	if(isset($_SESSION['cart'])) {
		foreach($_SESSION['cart'] as $key => $product){
			if($id == $product['id']){
                if($_SESSION['cart'][$key]["quantity"]){
                    unset($_SESSION['cart'][$key]);
                 }
			}
        }
	}	
}

?>