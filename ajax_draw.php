<?php
    header('Content-type:text/json;charset=utf-8');
    $width = intvar($_POST['width']);
    $add = intvar($_POST['add']);
    $total = $add + $width;
    if($total >= 100){
        $total = 100;
    }
    $data = '{new_width:"' . strval($total) . '"}'
    echo json_encode($data);
?>