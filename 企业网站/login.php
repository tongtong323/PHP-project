<?php
// 链接数据库
session_start();
$conn=require_once('conn.php');

//获取表单的信息
$username = $_POST['username'];
$password = md5($_POST['password']);
$_SESSION['username'] = trim($_POST['username']);
$_SESSION['password'] = md5($_POST['password']);

//查询数据库  然后取出数据库的信息，如果和表单提交的信息一致，则登录成功，进入后台管理
$sql = "SELECT `username` FROM `user` WHERE `password` = '$password' AND `username` = '$username'";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_row($res);
if($row){
    echo "<script>alert('登录成功')</script>";
    echo "<script>location.href='main.php'</script>";
}else{
    echo "<script>alert('登录失败')</script>";
    echo "<script>history.go(-1);</script>";   //登录失败返回上一个页面
}
?>