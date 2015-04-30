<?php
session_start();
        $username=$_SESSION["username"];
         $user=$_GET["user"];
         $len=strlen($user);
$len2=strlen($username);
$newusername=str_pad($username, $len+$len2, $user,STR_PAD_RIGHT);
$newusername2=str_pad($user, $len2+$len, $username,STR_PAD_RIGHT);
$con=  mysqli_connect("127.0.0.1","ashwin","ashwin");
$db=  mysqli_select_db($con,"ashwin");
$query="select * from chat where usernamse='$newusername' or usernamse='$newusername2';";

$sql=  mysqli_query($con, $query);

while($result=  mysqli_fetch_assoc($sql))
{
    if($result["usernamse"]==$newusername)
    {
   
              echo '<div style="border-radius:4px;margin-left:135%;width:70%" class="post-box article">'.

                                '<a href="" class="blog-title">'.$username.'</a>'.
                                '<ul class="post-box-link" style="border-bottom: white;">'.
                                    '<li>'.$result["messsage"].'</li>'.
                                    
                                '</ul>'.                        
                            '</div>';
    
    }
    else
    {
       
   
              echo '<div style="border-radius:4px; width:70%;" class="post-box article">'.

                                '<a href="" class="blog-title">'.$user.'</a>'.
                                '<ul class="post-box-link" style="border-bottom: white;">'.
                                    '<li>'.$result["messsage"].'</li>'.
                                    
                                '</ul>'.                        
                            '</div>';
    
    
    }

}

?>