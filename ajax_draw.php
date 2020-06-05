<?php

    header('Content-type:text/json;charset=utf-8');
    $width=$_POST['width'];
    $data='{width:"'. $width. '"}';//组合成json格式数据

    echo json_encode($data);//输出json数据
?>