<?php
 $username=$_GET["username"];

$conn=mysqli_connect("127.0.0.1","ashwin","ashwin");
$db=  mysqli_select_db($conn,"ashwin");
$query="select username from chataccount where online='yes' and username!='$username'";
$sql=  mysqli_query($conn,$query);
//retrive 
while($result=  mysqli_fetch_assoc($sql))
{
    echo '<li id="user" class="page_item page-item-2"><a href="index2.php?user='.$result["username"].'">'.$result["username"].'</a></li>';
}


?>