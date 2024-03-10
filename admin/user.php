<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8185bbc38a.js" crossorigin="anonymous"></script>
</head>

<body>
<?php
				if (isset($_GET["msg"])) {
					$msg=($_GET["msg"]);
				
					if ($msg=="SUC") {
						echo "<p> <strong> NEW STATUS SUCCESSFULLY UPDATED</strong> </p>";
					}
					
				}
				?>

    <?php
    $con = mysqli_connect('localhost', 'root', '', 'ecommerce');
    $record = mysqli_query($con,"SELECT Id,UserName,Email,Number,status FROM user  ORDER BY email");
    $row_count = mysqli_num_rows($record);

    include('mystore.php');
    ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10">
                <table class="table table-secondary table-bordered">
                    <thead class="text-center">
                        <th>Sr no</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>Delete</th>
                        <th colspan='2'>Suspend</th>
                    </thead>


                    <tbody class="text-center text-danger">
                        <?php
                        while ($row = mysqli_fetch_array($record)) {
                            echo "
        <tr>
        <td>$row[Id] </td>
        <td>$row[UserName]</td>
        <td>$row[Email]</td>
        <td>$row[Number]</td>
        <td><a href='delete.php? ID=$row[Id]' class='btn btn-outline-danger'>DELETE</a> </td>
        <td>$row[status]</td>
        <td><form action='switch-status.php' method='post' class='my-form'>
						<div><input type='hidden' value='$row[Id]' name='id'/>
						<input type='hidden' value='$row[status]' name='status'/>
						<input type='submit' class='btn btn-outline-danger' value='Switch Status'/></div></form></td>
        </tr>";
                        }
                        ?>


                    </tbody>
                </table>
            </div>

            <div class="col-md-2 pr-5 text-center">
                <h3 class="text-danger">TOTAL USERS</h3>
                <h1 class="bg-danger text-white">
                    <?php echo $row_count; ?>
                </h1>
            </div>
        </div>
    </div>
</body>

</html>