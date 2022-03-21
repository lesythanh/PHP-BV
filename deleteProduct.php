<?php 
 include 'connect.php';
    
 //get id tren url
 $id = $_GET['id'];
 
 //Viết câu SQL lấy tất cả dữ liệu trong bảng players
 $sql = "DELETE FROM `product` WHERE `id`='".$id."'";
 // Chạy câu SQL
 if ($result = $conn->query($sql)) {
     echo "<h1>Xóa thành công Click vào <a href='myProduct.php'>đây</a> để về trang danh sách</h1>";
 }else{
     echo "<h1>Có lỗi xảy ra Click vào <a href='myProduct.php'>đây</a> để về trang danh sách</h1>";
 }

?>