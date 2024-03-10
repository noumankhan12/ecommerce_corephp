<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8185bbc38a.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include('header.php');
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center bg-light mb-5 rounded">
                <h1 class="text-warning">MyCart</h1>
                <?php
                if (isset($_GET["msg"])) {
                    $msg = ($_GET["msg"]);


                    if ($msg == "OP") {
                        # code...
                        echo "<p class='success'> Order Placed </p>";
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-around">
            <div class="col-sm-12 col-md-6 col-lg-9">
                <table class="table table-bordered text-center">
                    <thead class="bg-danger text-white fs-5 ">
                        <th>Serial No</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                        <th>Total Price</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>

                        <?php

                        $total = 0;
                        $gtotal = 0;
                        $i = 0;

                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $i = $key + 1;

                                $total = $value['productPrice'] * $value['productQuantity'];
                                $gtotal += $value['productPrice'] * $value['productQuantity'];
                                $total = $value['productPrice'] * $value['productQuantity'];
                                echo "
                                <form action=insertcart.php method='POST'>
                                <tr>
                                <td>$i</td>
                                <td><input type='hidden' name='PName' value='$value[productName]' >$value[productName]</td>
                                <td><input type='hidden' name='PPrice' value='$value[productPrice]' >$value[productPrice]</td>
                                <td><input class='text-center' type='number' name='PQuantity' value='$value[productQuantity]' min='1' max='100' ></td>
                                <td>$total</td>
                                
                                <td><button name='update' class='btn btn-success' >UPDATE</button></td>
                                <td><button name='remove' class='btn btn-danger'>DELETE</button></td>
                                
                                <td><input type='hidden' name='item' value='$value[productName]'></td>
                                </tr>
                                </form>
                                ";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                    <h4> Grand Total:</h4>
                    <h5 class="bg-danger text-white">
                        <?php echo number_format($gtotal, 2) ?>
                    </h5>
                    <br>
                    <?php
                    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                        ?>


                        <form action="purchase.php" method="POST">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" name="full_name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" name="phone_no" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" required>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pay_mode" value="COD"
                                    id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Cash On Dilevery
                                </label>
                            </div>
                            <br>
                            <button class="btn btn-success btn-block" name="purchase">Make Purchase</button>
                        </form>

                        <?php
                    }
                    ?>
                </div>
            </div>


        </div>
    </div>



</body>

</html>