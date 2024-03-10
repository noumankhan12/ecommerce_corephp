<?php
  
if ((isset($_POST["id"])) && (isset($_POST["status"]))) {
    
    $status =($_POST["status"]);
    $id = ($_POST["id"]);
    
    if ($status == "A") {
        $newstatus = "S";
    } else {
        $newstatus = "A";
    }

    //connect with database
    $con = mysqli_connect('localhost', 'root', '', 'ecommerce');

    //querry
    $sql = 'UPDATE user SET status=? WHERE Id=?';
    $stmt = $con->prepare($sql);
    if ($stmt === false) {
        trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $con->error, E_USER_ERROR);
    }

    $stmt->bind_param('si', $newstatus, $id);
    $stmt->execute();
    $stmt->close();

    //close with db
    $con->close();
    header("Location:user.php?msg=SUC");
    exit;
}