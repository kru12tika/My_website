<?php
$conn = mysqli_connect("localhost", "root", "", "farm2home");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>