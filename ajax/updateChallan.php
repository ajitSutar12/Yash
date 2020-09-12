<?php
    include_once('../config/config.php');
    $receiver     = $_POST['name'];
    $challanID    = $_POST['challanID'];
    $date         = $_POST['date'];
    $matter       = $_POST['matter'];
    $material     = $_POST['material'];
    $materialNote = $_POST['materialNote'];

    $qty          = $_POST['qty'];
    $rate         = $_POST['rate'];
    $amt          = $_POST['amt'];
    $id           = $_POST['id'];
    $condition1   = $_POST['condition1'];
    $condition2   = $_POST['condition2'];
    $condition3   = $_POST['condition3'];
    $condition4   = $_POST['condition4'];
    $condtion5    = $_POST['condtion5'];
    // print_r($id);
    // print_r($material);
 

    $response     = array();
    //InsertNew Invoice Details
    $insertNewInvoiceDetails = false;
    $updateInvoiceDetails    = false;
    foreach($material as $key => $value)    
    {
        $materialNote1 = str_replace("\n", '<br />',  $materialNote[$key]);
        if($id[$key] == '0')
        {
            $insertNewInvoiceDetails = mysqli_query($con,"insert into challan_master(challan_id,challan_date,cust_id,matter,material_id,material_note,rate,qty,delivery,gurrenty,transport,payment,tax)value('$challanID','$date','$receiver','$matter','$material[$key]','$materialNote1','$rate[$key]','$qty[$key]','$condition1','$condition2','$condition3','$condition4','$condtion5')");
        }
        else
        {
            $updateInvoiceDetails  = mysqli_query($con,"update challan_master set challan_date='$date',challan_id='$challanID',material_id='$material[$key]',material_note='$materialNote1',rate='$rate[$key]',cust_id='$receiver',qty='$qty[$key]',delivery='$condition1',gurrenty='$condition2',transport='$condition3',payment='$condition4',tax='$condtion5' where id='$id[$key]'");

        }
    }
    
    if($insertNewInvoiceDetails || $updateInvoiceDetails)
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