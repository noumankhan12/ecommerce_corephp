<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home_page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8185bbc38a.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    $count = 0;
    session_start();
    if (isset($_SESSION['cart'])){
        $count = count($_SESSION['cart']);
    }
    
    ?>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid font-monospace">
            <a class="navbar-brand pb-2"><img src="logo.png" style="height: 50px;width : 150px "></a>

            <div class="d-flex">
                <a href="index.php" class="text-warning text-decoration-none pe-2"><i class="fas fa-home"></i>Home</a>
                <a href="viewcart.php" class="text-warning text-decoration-none pe-2"><i class="fas fa-shopping-cart"></i>Cart(<?php echo $count ?>)

                    |</a>
                     <?php
                    if (isset($_SESSION['user'])) {
                        echo"
                        <a href='complain.php' class='text-warning text-decoration-none pe-2'><i class='fas fa-home'></i>Complain</a>
                    ";
                    }?>
                <span class="text-warning pe-2">
                    <i class="fas fa-user-shield"></i>Hello,
                    <?php
                    if (isset($_SESSION['user'])) {
                        echo $_SESSION['user'] ;
                        echo "
                        |<a href='form/logout.php' class='text-warning text-decoration-none pe-2'><i
                        class='fas fa-sign-in-alt'></i>Logout</a>";
                    }
                    else {
                        echo"
                        |<a href='form/login.php' class='text-warning text-decoration-none pe-2'><i
                        class='fas fa-sign-in-alt'></i>Login</a>";
                    }
                    ?>
                    
                    <a href="../admin/mystore.php" class="text-warning text-decoration-none pe-2">Admin</a>
                </span>

    </nav>
    </div>
    <div class="bg-danger sticky-top font-monospace">
        <ul class="list-unstyled d-flex justify-content-center">
            <li>
                <a href="laptop.php" class="text-decoration-none text-white fw-bold fs-4 px-5">LAPTOPS</a>
                <a href="bag.php" class="text-decoration-none text-white fw-bold fs-4 px-5">BAGS</a>
                <a href="mobile.php" class="text-decoration-none text-white fw-bold fs-4 px-5">CARS</a>
            </li>
        </ul>
    </div>


</body>

</html>