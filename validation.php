<?php
session_start();

$con= mysqli_connect('localhost','root','123456');

mysqli_select_db($con,'login');


$name=$_POST['user'];
$pass =$_POST['password'];

$s="select * from userlogin where name='$name' && password='$pass' ";

$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
 if ($num==1)
 {
    header('location:store.html');

 }
else
{
    header('location:register1.php');
 }


?>