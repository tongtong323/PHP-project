<?php
$conn=mysqli_connect("localhost","root","tzy12345","article");
if($conn){
    //echo"ok";
    return $conn;
}else{
    echo"error";
}
