<?php
    include_once('../config/config.php');
    $name     = $_POST['name'];
    $unit     = $_POST['unit'];
    $hsn     = $_POST['hsn'];
    $sgst     = $_POST['sgst'];
    $cgst     = $_POST['cgst'];
    $igst     = $_POST['igst'];
    $weight   = $_POST['weight'];
    $id       = $_POST['materialID'];

    $response = array();
    //Customer Details Insert
    // $insertMaterialDetails = mysqli_query($con,"insert into material_master(name,unit,rate,sgst,cgst,igst,weight)values('$name','$unit','$rate','$sgst','$cgst','$igst','$weight')");

    $updateMaterialDetails = mysqli_query($con,"update material_master set name='$name',unit='$unit',hsn='$hsn',sgst='$sgst',cgst='$cgst',igst='$igst',weight='$weight' where id ='$id'");
    if($updateMaterialDetails)
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