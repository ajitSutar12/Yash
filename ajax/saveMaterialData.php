<?php
    include_once('../config/config.php');
    $name     = $_POST['name'];
    $unit     = $_POST['unit'];
    $hsn      = $_POST['hsn'];
    $sgst     = $_POST['sgst'];
    $cgst     = $_POST['cgst'];
    $igst     = $_POST['igst'];
    $weight   = $_POST['weight'];

    $response = array();
    //Customer Details Insert
    $insertMaterialDetails = mysqli_query($con,"insert into material_master(name,unit,hsn,sgst,cgst,igst,weight)values('$name','$unit','$hsn','$sgst','$cgst','$igst','$weight')");

    if($insertMaterialDetails)
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