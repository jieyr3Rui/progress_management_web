<?php
$width = 10;
$GLOBALS['width']+=10;
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

function op_width($op){
    $w = 10;

    $sql = "SELECT width FROM table_width WHERE pid='1234'";
    $result = $GLOBALS['conn']->query($sql);
    
    if ($result->num_rows > 0) {
        // 输出数据
        while($row = $result->fetch_assoc()) {
            $w = $row['width'];
        }
    }
    
    if($op=='add'){
        if($w <= 90) {$w += 10;}
    }
    if($op=='rel'){
        if($w >= 10) {$w -= 10;}
    }
    $GLOBALS['width'] = $w;
    $ws = strval($w);
    $sql="UPDATE table_width SET width=" . $ws . " WHERE pid='1234'";
    $GLOBALS['conn']->query($sql);
}
?>


<html>
	
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
    canvas{border:1px solid;}
</style>
</head>
 

<body>
    <button onclick="relw();" >-1</button>
    <canvas id="canvas" width=400 height=30 ></canvas>
    <button onclick="addw();" >+1</button>
</body>

<script>
    var canvas = document.getElementById("canvas");
	var ctx = canvas.getContext("2d");
	var x = 10, y = 5, w = 10, h = 20;

	run("red");
	
	// 生成矩阵
	function run(color){
		clears();
		ctx.fillStyle = color;
		ctx.fillRect(x, y, w, h);

	}
	// 清除画布
	function clears(){
		ctx.beginPath();
		ctx.clearRect(0, 0, 400, 30);
		ctx.closePath();
	}
	function addw(){
        alert("addw");
        <?php op_width('rel');?>
		w = <?php echo $width?>;
        alert("<?php echo $width?>");
		run("red");
	}
    function relw(){
        if(w > 10){
             w = w - 10; 
             run("red");
    	}
    }
    
</script>
</html>