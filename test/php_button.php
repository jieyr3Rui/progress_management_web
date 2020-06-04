<?php
function show(){
  echo "aaa";
}
?>
 
<script language="JavaScript">
function bt_click(){
<?php show();?>
}
</script>
 
<input type="button" name="show" id="show" value="提交" onClick="bt_click();"/>