<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home_page</title>
    <?php
    include 'header.php';
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8185bbc38a.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">



                <h1 class="text-warning font-monospace text-center my-3">Bags</h1>
                <?php
                $con = mysqli_connect('localhost', 'root', '', 'ecommerce');
                $Record = mysqli_query($con, "select * from tblproduct");
                while ($row = mysqli_fetch_array($Record)) {
                    $check_page = $row['PCategory'];
                    if ($check_page === 'Bag') {

                        echo "

    <div class='col-md-6 col-lg-4 m-auto mb-3'>
    <form action='insertcart.php' method='POST'>
<div class='card m-auto' style='width: 18rem;'>
  <img src='../admin/product/$row[PImage]' class='card-img-top m-auto' style='height: 200px';width : 150px';'>
  <div class='card-body text-center'>
    <h5 class='card-title text-danger fs-4 fw-bold'>$row[PName]</h5>
    <p class='card-text text-warning fs-4 fw-bold'>RS: $row[PPrice]</p>
    <input type='hidden' name='PName' value='$row[PName]'>
    <input type='hidden' name='PPrice' value='$row[PPrice]'>
    <input type='number' name='PQuantity' value='min='1' max='20'' placeholder='Quantity'><br><br>
    <input type='submit' name='addcart' class='btn btn-warning text-white w-100' value='Add To Cart'>


  </div>
</div>
</form>
</div>
";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>