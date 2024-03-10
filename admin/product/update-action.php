<?php
if (isset($_POST['submitt'])) {
    include 'config.php';
    $pid = $_POST['id'];
    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_image = $_FILES['Pimage'];

    $image_loc = $_FILES['Pimage']['tmp_name'];
    $image_name = $_FILES['Pimage']['name'];
    $img_des = "data/" . $image_name;
    move_uploaded_file($image_loc, "data/" . $image_name);

    $product_category = $_POST['Pages'];

    //insertproduct
    mysqli_query($con, "UPDATE `tblproduct` SET `PName`='$product_name',
    `PPrice`='$product_price',`PImage`='$img_des',`PCategory`='$product_category' WHERE PId=$pid");

    header("location:index.php");


}
?>

