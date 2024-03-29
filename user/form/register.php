<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="h.css">
    </head>

<body class="bgg-image">

    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5 m-auto bg-white shadow font-monospace border border-info">
                <p class="text-primary text-center fs-3 fw-bold my-3">User Register</p>
                <form action="register-action.php" method="POST">
                    <div class="mb-3">
                        <label for="">UserName:</label>
                        <input type="text" name="name" placeholder="Enter UserName" class="form-control">
                        <label for="">UserEmail:</label>
                        <input type="email" name="email" placeholder="Enter UserEmail" class="form-control">
                        <label for="">PhoneNumber:</label>
                        <input type="number" name="number" placeholder="Enter PhoneNumber" class="form-control">
                        <label for="">Password:</label>
                        <input type="password" name="password" password="password" placeholder="Enter Password" class="form-control">

                    </div>
                    <div class="mb-3">
                        <button name="submit" class="w-100 bg-primary fs-4 text-white">REGISTER</button>

                    </div>
                    <div class="mb-3">
                        <button class="w-100 bg-primary fs-4 text-white"><a href="login.php" class="text-decoration-none text-white">AlREADY REGISTER</a></button>

                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>