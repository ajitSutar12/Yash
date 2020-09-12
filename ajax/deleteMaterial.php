<?php
        include_once('../config/config.php');
        $id = $_POST['id'];
        $response = array();
        $deleteMaterialData = mysqli_query($con,"delete from material_master where id = $id");
        // echo "delete from customer_master where id = $id";
        if($deleteMaterialData)
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