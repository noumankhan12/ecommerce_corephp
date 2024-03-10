<?php
$con = mysqli_connect('localhost', 'root', '', 'ecommerce');
if (isset($_POST['submit'])) {

    $username = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];

    $dub_email = mysqli_query($con,"SELECT * FROM `user` WHERE Email='$email'");
    if(mysqli_num_rows($dub_email)){
        echo "
        <script>alert('email already exist')
        window.location.href='register.php';
        </script>
        ";
    }

    $dub_name = mysqli_query($con,"SELECT * FROM `user` WHERE UserName='$username'");
    if(mysqli_num_rows($dub_name)){
        echo "
        <script>alert('username already exist already exist')
        window.location.href='register.php';
        </script>
        ";
    } else {

        mysqli_query($con, "INSERT INTO `user`(`UserName`, `Email`, `Number`, `Password`) VALUES ('$username','$email','$number','$password')");
        echo "
        <script>alert('Succesfully registered')
        window.location.href='login.php';
        </script>
        ";
    }

}

?>