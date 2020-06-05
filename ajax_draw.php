<?php

    header('Content-type:text/json;charset=utf-8');
    $width = intval($_POST['width']);
    $op = $_POST['op'];
    $total = 50;
    if($op == "add"){
        $total = $width + 10;
        if($total >= 100){
            $total = 100;
        }
    }
    if($op == "rel"){
        $total = $width - 10;
        if($total <= 0){
            $total = 0;
        }
    }
    $data='{new_width:"'. strval($total) . '"}';//组合成json格式数据

    echo json_encode($data);//输出json数据
?>