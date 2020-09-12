<?php
    include_once('../config/config.php');
    $id = $_POST['id'];
    $response = array();
    //Get Customer Details 
    $getCustomerDetails = mysqli_query($con,"select * from customer_master where id = $id");
    $row                = mysqli_fetch_assoc($getCustomerDetails);

    $response = array(
        'address' => $row['address'],
        'GST'=>$row['gst']
    );

    echo json_encode($response);
?>
