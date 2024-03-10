<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complain</title>
    <?php
    include 'header.php';
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8185bbc38a.js" crossorigin="anonymous"></script>
</head>

<body>
<body class="../form/bg-image">




<div class="container">
    <div class="row">
        <div class="col-md-6 mt-5 m-auto bg-white shadow font-monospace border border-info">
            <p class="text-success text-center fs-3 fw-bold my-3">Enter your Complain</p>
            <?php
if (isset($_GET["msg"])) {
                $msg=($_GET["msg"]);
            
                if ($msg=="C") {
                    echo "<p class='text-danger text-center fs-3 fw-bold my-3'>Complain has been registered </p>";
                }
                if ($msg=="AA") {
                    echo "<p class='text-danger text-center fs-3 fw-bold my-3'>Incorrect email or password</p>";
                }
                
            }
            ?>

            <form action="complain-action.php" method="POST">
                <div class="mb-3">

                    <label for="">Complain topic:</label>
                    <input type="name" name="name" placeholder="Enter Your Complain topic" class="form-control">

                    <label for="">Complain  details:</label>
                    <input type="name" name="detail" placeholder="Enter Your Complain details" class="form-control">
                 
                    

                </div>
                <div class="mb-3">
                    <button name="submitt" class="w-100 bg-success fs-4 text-white">Submit your complain </button>

                </div>
            </form>
        </div>
    </div>
</div>

</body>

</html>