<?php
    include "public.php";
    $uname=$_REQUEST["uname"];
    $pass=$_REQUEST["pass"];
    $sql="SELECT name, pass FROM user_table WHERE name='$uname'";
    $re=mysqli_query($conn, $sql);

    $n=mysqli_num_rows($re);
    if(!$n){
        echo "<script>alert('username does not exit');location.href='login.html'</script>";
    }
    else{
        while($date=mysqli_fetch_assoc($re)){
            if($date['name']==$uname&&date['pass']==$pass){
                echo "<script>alert('seccessful login');location.href='main.html'</script>";
            }
            else{
                echo "<script>alert('incorrect password');location.href='login.html'</script>";
            }
        }
    }
?>