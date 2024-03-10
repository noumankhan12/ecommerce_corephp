<?php
$con = mysqli_connect('localhost', 'root', '', 'ecommerce');
session_start();
if (isset($_POST['submitt'])) {

   
    $name = $_POST['name'];
    $detail = $_POST['detail'];

    


        mysqli_query($con, "INSERT INTO `complain`(`topic`, `description`, `complainer`) VALUES ('$name','$detail','$_SESSION[user]')");
        
        header('Location:complain.php?msg=C');
    }


?>