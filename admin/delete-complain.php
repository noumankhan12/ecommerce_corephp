<?php

$id = $_GET['ID'];
$con = mysqli_connect('localhost', 'root', '', 'ecommerce');
mysqli_query($con, "DELETE FROM `complain` WHERE Id=$id");

header("location:complains.php?msg=D");

?>