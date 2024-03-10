<?php

$id = $_GET['ID'];
$con = mysqli_connect('localhost', 'root', '', 'ecommerce');
mysqli_query($con, "DELETE FROM `user` WHERE Id=$id");

header('Location:complain.php?msg=C');

?>