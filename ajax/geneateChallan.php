<?php
    include_once('../config/config.php');
    $name         = $_POST['name'];
    $challanID    = $_POST['challanID'];
    $date         = $_POST['date'];
    $matter       = $_POST['matter'];
    $material     = $_POST['material'];
    $materialNote = $_POST['materialNote'];
    $qty          = $_POST['qty'];
    $rate         = $_POST['rate'];
    $amt          = $_POST['amt'];
    $condition1   = $_POST['condition1'];
    $condition2   = $_POST['condition2'];
    $condition3   = $_POST['condition3'];
    $condition4   = $_POST['condition4'];
    $condtion5    = $_POST['condtion5'];    

    foreach($material as $key => $value)
    {
        $insertChallan = mysqli_query($con,"insert into challan_master(challan_id,challan_date,cust_id,matter,material_id,material_note,qty,rate,delivery,gurrenty,transport,payment,tax)values('$challanID','$date','$name','$matter','$material[$key]','$materialNote[$key]','$qty[$key]','$rate[$key]','$condition1','$condition2','$condition3','$condition4','$condtion5')");
    }

    if($insertChallan)
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