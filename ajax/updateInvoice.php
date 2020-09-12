<?php
    include_once('../config/config.php');
    $receiver     = $_POST['receiver'];
    $invoice_no   = $_POST['invoice_no'];
    $invoice_date = $_POST['invoice_date'];
    $challan_no   = $_POST['challan_no'];
    $challan_date = $_POST['challan_date'];
    $order        = $_POST['order'];
    $supplier     = $_POST['supplier'];
    $dispatch     = $_POST['dispatch'];
    $material     = $_POST['material'];
    $materialNote = $_POST['materialNote'];

    $qty          = $_POST['qty'];
    $rate         = $_POST['rate'];
    $amt          = $_POST['amt'];
    $gender       = $_POST['gender'];
    $note         = $_POST['note'];
    $id           = $_POST['id'];
    // print_r($id);
    // print_r($material);
    $note         = str_replace("\n", '<br />',  $note);
 

    $response     = array();
    //InsertNew Invoice Details
    $insertNewInvoiceDetails = false;
    $updateInvoiceDetails    = false;
    foreach($material as $key => $value)
    {
        $materialNote1 = str_replace("\n", '<br />',  $materialNote[$key]);
        if($id[$key] == '0')
        {
            $insertNewInvoiceDetails = mysqli_query($con,"insert into invoice_master(invoice_id,invoice_date,challan_no,challan_date,order_no,supplier,dispatch,material_id,material_note,rate,labour_charges,note,qty,cust_id)value('$invoice_no','$invoice_date','$challan_no','$challan_date','$order','$supplier','$dispatch','$material[$key]','$materialNote1','$rate[$key]','$gender','$note','$qty[$key]','$receiver')");
        }
        else
        {
            $updateInvoiceDetails  = mysqli_query($con,"update invoice_master set invoice_date='$invoice_date',challan_no='$challan_no',challan_date='$challan_date',order_no='$order',supplier='$supplier',dispatch='$dispatch',material_id='$material[$key]',material_note='$materialNote1',rate='$rate[$key]',labour_charges='$gender',note='$note',cust_id='$receiver',qty='$qty[$key]' where id='$id[$key]'");

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