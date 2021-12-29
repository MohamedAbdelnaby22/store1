<?php
session_start();
header('location:register1.php');

$con= mysqli_connect('localhost','root','123456');

mysqli_select_db($con,'login');


$name=$_POST['user'];

$pass =$_POST['password'];

$s="select * from userlogin where name='$name' ";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
 if ($num==1)
 {
     echo "username Already taken";

 }
else{
    $reg="insert into userlogin(name,password) values('$name','$pass')";
mysqli_query($con,$reg);
echo" REgister successfully";
}


?>