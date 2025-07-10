 <?php
session_start();
$index=$_POST['id'];
unset($_SESSION['cart'][$index]);
?>

