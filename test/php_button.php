<?php
function show(){
  echo "aaa";
}
?>

<html>
<head>
<meta charset="utf-8">
<title>main page</title>

</head>

<body>
    <h1>我的第一个标题</h1>
    <input type="button" name="show" id="show" value="提交" onClick="bt_click();"/>
    <script>
        function bt_click(){
        <?php show();?>
        }
    </script>
</body>
</html>