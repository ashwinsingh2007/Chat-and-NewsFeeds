<?php
 session_start();
        $username=$_SESSION["username"];
        $user=$_GET["user"];
$msg=$_GET["msg"];
$len=strlen($user);
$len2=strlen($username);
$newusername=str_pad($username, $len+$len2, $user,STR_PAD_RIGHT);


$conn=mysqli_connect("127.0.0.1","ashwin","ashwin");
$db=  mysqli_select_db($conn,"ashwin");
$query="insert into chat values ('$newusername','$msg')";
$sql=  mysqli_query($conn,$query);
//retrive message



?>