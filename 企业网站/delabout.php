<?php
$conn = require_once('conn.php');
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$id = $_GET['id'];
$sql="delete from about where id='$id'";
$res = mysqli_query($conn, $sql);
var_dump($res);
if($res){
    echo "<script>alert('删除信息成功');location.href='about.php'</script>";
}else{
    echo "<script>alert('删除信息失败');</script>";
//    echo "<script>alert('删除信息失败');location.href='about.php'</script>";

}
?>
