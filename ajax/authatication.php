<?php
    error_reporting(E_ALL ^ E_NOTICE);
    session_start();
    include_once('../config/config.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $response = array();
    $checkData = mysqli_query($con,"select * from login where username = '$username' and password='$password'");
    $row       = mysqli_num_rows($checkData);
    if($row > 0)
    {
        session_start();
        $_SESSION['USERNAME'] = $username;
        $response = array(
            'result' => 'success'
        );
    }
    else
    {
        $response = array(
            'result' => 'fail'
        );
    }

    echo json_encode($response);
?>