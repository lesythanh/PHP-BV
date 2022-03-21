<?php 
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'sales';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(! $conn){
    die('not connect database:' . mysqli_error());
}
$sql = 'SELECT * FROM sales';
$retval = mysqli_query($conn, $sql);


?>