<?php
    include_once('../config/config.php');
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $mobile   = $_POST['mobile'];
    $phone    = $_POST['phone'];
    $address  = $_POST['address'];
    $gst      = $_POST['gst'];
    $pan      = $_POST['pan'];
    $id       = $_POST['custID'];

    $response = array();
    //Customer Details Insert
    // $insertCustomerDetails = mysqli_query($con,"insert into customer_master(name,email,mobile,phone,address,gst,pan)values('$name','$email','$mobile','$phone','$address','$gst','$pan')");
    $updateCustomerDetails = mysqli_query($con,"update customer_master set name='$name',email='$email',mobile='$mobile',phone='$phone',address='$address',gst='$gst',pan='$pan' where id = $id");

    if($updateCustomerDetails)
    {
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