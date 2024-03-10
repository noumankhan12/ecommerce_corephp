<?php

if (isset($_POST['submitt'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $con = mysqli_connect('localhost', 'root', '', 'ecommerce');
    $result = mysqli_query($con, "SELECT `Id`, `UserName`, `Email`, `Number`, `Password`,`status` FROM `user` WHERE (UserName='$name' OR Email='$name') AND Password='$password'");
    session_start();
    $row = mysqli_fetch_assoc($result);
    $status = $row['status'];
    if (mysqli_num_rows($result)) {
        if ($status == "A") {

            $_SESSION['user'] = $name;


            echo "
        <script>
        alert('successfully Login');
        window.location.href='../index.php';
        </script>
        ";
        } else {
            
            header('Location:login.php?msg=AS');
				
        }
    } else {
        header('Location:login.php?msg=AA');
    }


}

?>