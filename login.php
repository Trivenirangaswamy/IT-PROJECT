<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$_SESSION["user"]=$username;
include 'connect.php';

$query="select * from login where username='$username' and password='$password'";
$result=mysqli_query($db,$query) or die("error querying database");
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

if($row==TRUE)
{
$_SESSION["sec"]=$row['section'];
header('location:vote.html');
}
else
{
echo "incorrect username or password";
}
