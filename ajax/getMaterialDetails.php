<?php
    include_once('../config/config.php');
    $id = $_POST['id'];
    $response = array();
    //Get Customer Details 
    $getCustomerDetails = mysqli_query($con,"select * from material_master where id = $id");
    $row                = mysqli_fetch_assoc($getCustomerDetails);

    $response = array(
        'hsn' => $row['hsn'],
        'unit'=>$row['unit']
    );

    echo json_encode($response);
?>