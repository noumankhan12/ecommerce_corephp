<?php
session_start();

if (isset($_SESSION['user'])) {



    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    if (isset($_POST['addcart'])) {
        $product_name = $_POST['PName'];
        $product_price = $_POST['PPrice'];
        $product_quantity = $_POST['PQuantity'];

        $check_product = array_column($_SESSION['cart'], 'productName');
        if (in_array($product_name, $check_product)) {
            echo "
        <script>
        alert('product already added');
        window.location.href='viewcart.php';
        </script>
        ";
        } else {


            $_SESSION['cart'][] = array('productName' => $product_name, 'productPrice' => $product_price, 'productQuantity' => $product_quantity);
            header("location:viewcart.php");
        }
    }

    //delete cart

    if (isset($_POST['remove'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['productName'] === $_POST['item']) {
                unset($_SESSION['cart'][$key]);

                $_SESSION['cart'] = array_values($_SESSION['cart']);
                header('location:viewcart.php');
            }
        }
    }

    //update cart

    if (isset($_POST['update'])) {
        $product_name = $_POST['PName'];
        $product_price = $_POST['PPrice'];
        $product_quantity = $_POST['PQuantity'];
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['productName'] === $_POST['item']) {
                $_SESSION['cart'][$key] = array('productName' => $product_name, 'productPrice' => $product_price, 'productQuantity' => $product_quantity);

                header('location:viewcart.php');
            }
        }
    }
} else {
    header("location:form/login.php");
}
?>