<?php
$width = 10;
?>

<?php
function add_width(){
    $GLOBALS['width'] = $GLOBALS['width'] + 10;
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
        <?php add_width();?>
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