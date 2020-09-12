<?php 
        include_once('../config/config.php');

        $id = $_POST['id'];

        //Delete Row
        $deleteRow = mysqli_query($con,"delete from challan_master where id = '$id'");
        if($deleteRow)
        {
            $response = array(
                'result' => 'success'
            );
        }

        echo json_encode($response);
        

?>