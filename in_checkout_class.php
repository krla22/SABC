<?php

if(isset($_REQUEST['submit'])){
    $data = '';
    $filename = "orders.json";
    if(is_file($filename)){
        $data = file_get_contents($filename);
    }

    $json_arr = json_decode($data, true);

    $json_arr = array(['sensniaQuantity' => $_REQUEST['sensniaQuantity'], 'ubQuantity' => $_REQUEST['ubQuantity'], 'oaproneQuantity' => $_REQUEST['oaproneQuantity'], 'total_items' =>  $_REQUEST['total_items'], 'total_price' =>$_REQUEST['total_price'],]);

    file_put_contents($filename, json_encode($json_arr, JSON_PRETTY_PRINT)); header("location: in_checkout.php"); exit();

    

}

?>