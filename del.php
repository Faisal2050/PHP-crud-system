<?php
$con = mysqli_connect('localhost','root','','wapexp');



$id = $_GET['var'];

$del = "DELETE FROM info WHERE id = '$id'";
$res = mysqli_query($con, $del);
header('location:ab.php');

?>