<?php
    header('Content-Type:application/json;charset=utf-8');
    $result = array()
    $json = file_get_contents("php://input");
    $obj = json_decode($json);
    $add = $obj->add;
    $width = $obj->width;
    $total = $add + $width;
    if($total < 100){
        $result['new_width'] = $total;
    }
    else{
        $result['new_width'] = 100;
    }
    echo json_encode($result);
?>