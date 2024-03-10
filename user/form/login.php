
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="h.css">
    </head>

<body class="bg-image">




    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5 m-auto bg-white shadow font-monospace border border-info">
                <p class="text-success text-center fs-3 fw-bold my-3">User Login</p>
                <?php
if (isset($_GET["msg"])) {
					$msg=($_GET["msg"]);
				
					if ($msg=="AS") {
						echo "<p class='text-danger text-center fs-3 fw-bold my-3'>Account has been suspended contact admin for more information</p>";
					}
                    if ($msg=="AA") {
						echo "<p class='text-danger text-center fs-3 fw-bold my-3'>Incorrect email or password</p>";
					}
					
				}
				?>

                <form action="login-action.php" method="POST">
                    <div class="mb-3">

                        <label for="">UserName:</label>
                        <input type="name" name="name" placeholder="Enter UserEmail" class="form-control">
                     
                        <label for="">Password:</label>
                        <input type="password" name="password"  placeholder="Enter Password" class="form-control">

                    </div>
                    <div class="mb-3">
                        <button name="submitt" class="w-100 bg-success fs-4 text-white">LOGIN</button>

                    </div>
                    <div class="mb-3">
                        <button class="w-100 bg-success fs-4 text-white"><a href="register.php" class="text-decoration-none text-white">REGISTER</a></button>

                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>