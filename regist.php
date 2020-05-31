<?php
    include "public.php";
    $name=$_REQUEST['uname'];
    $pass=$_REQUEST['pass'];
    $sql="INSERT INTO 'user_table'('name', 'pass') VALUES ('$name', '$pass')";
    $re=mysqli_query($conn, $sql);
    if($re){
        echo "<script>alert('注册成功');location.href='login.html'</script>";    
    }
    else{
        echo "<script>alert('注册成功');location.href='regist.html'</script>";    
    }

?>