<?php
$width = 10;
function op_width($op){
    $servername = "localhost";
    $username = "user_progress";
    $password = "192837465.Aa";
    $dbname = "database_progress";
    $w = 10;

    // 创建连接
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("连接失败: " . $conn->connect_error);
    } 
    
    $sql = "SELECT width FROM table_width WHERE pid = '1234'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // 输出数据
        while($row = $result->fetch_assoc()) {
            $w = $row['width'];
        }
    }
    
    if($op='add'){
        if($w <= 90) $w = $w + 10;
    }
    if($op='rel'){
        if($w >= 10) $w = $w - 10;
    }
    $GLOBALS['width'] = $w;
    $sql="UPDATE table_width SET width=". $w ." WHERE pid='1234'";
    $conn->query($sql);

    $conn->close();
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
        <?php op_width('add');?>
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
    }
</script>
</html>