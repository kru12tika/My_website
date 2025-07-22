<?php
include 'db.php';
$name = $_POST['name'];
$address = $_POST['address'];
$veg = $_POST['vegetable'];
$qty = $_POST['quantity'];
mysqli_query($conn, "INSERT INTO orders (name, address, vegetable, quantity) VALUES ('$name', '$address', '$veg', '$qty')");
header("Location: order-success.php");
?>