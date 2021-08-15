<?php
// 链接数据库
session_start();
require_once('conn.php');

//获取表单的信息
$name = trim($_POST['username']);
$password = md5($_POST['password']);
$_SESSION['username'] = trim($_POST['username']);
$_SESSION['password'] = trim($_POST['username']);

//查询数据库  然后取出数据库的信息，如果和表单提交的信息一致，则登录成功，进入后台管理
$sql = "select * from user where username='$name' and password='$password'";
$res = mysql_query($sql);
$row = mysql_fetch_row($res);
if($row){
    echo "<script>alert('登录成功')</script>";
    echo "<script>location.href='main.php'</script>";
}else{
    echo "<script>alert('登录失败')</script>";
    echo "<script>history.go(-1);</script>";   //登录失败返回上一个页面
}
?>