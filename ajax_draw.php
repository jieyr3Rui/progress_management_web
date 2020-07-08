<?php
header('Content-type:text/json;charset=utf-8');
$servername = "localhost";
$username = "user_progress";
$password = "192837465.Aa";
$dbname = "database_progress";
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("failure connection: " . $conn->connect_error);
} 

$sql = "SELECT width FROM table_width WHERE pid='1234'";
$result = $conn->query($sql);
$w = 50;
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        $w = $row['width'];
    }
}
$width = $w;

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
if($op == "get"){
    $total = $width;
    if($total <= 0){
        $total = 0;
    }
}
$ws = strval($total);
$sql="UPDATE table_width SET width=" . $ws . " WHERE pid='1234'";
$conn->query($sql);

$data='{new_width:"'. strval($total) . '"}';//组合成json格式数据

echo json_encode($data);//输出json数据
?>