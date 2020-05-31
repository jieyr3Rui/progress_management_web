<?php
    include "public.php";
    $name=$_REQUEST['uname'];
    $pass=$_REQUEST['pass'];
    $sql="INSERT INTO 'user_table'('name', 'pass') VALUES ('$name', '$pass')";
    echo $sql;
    $re=mysqli_query($conn, $sql);
    if($re){
        echo "<script>alert('successful registion');location.href='login.html'</script>";    
    }
    else{
        echo "<script>alert('failure registion');location.href='regist.html'</script>";    
    }

?>
