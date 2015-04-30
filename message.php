 <?php
        session_start();
        $username=$_SESSION["username"];
        ?>
<html>
    <head>
        <script type="text/javascript">
var ajaxreq=new XMLHttpRequest();
function show()
{
var msg=document.getElementById("msg").value;

ajaxreq.onreadystatechange=processresponse;
var reqstr="msg.php?msg="+msg;
ajaxreq.open("GET",reqstr,true);
ajaxreq.send(null);
}



var ajaxreq2=new XMLHttpRequest();



function show2()
{


ajaxreq2.onreadystatechange=processresponse;
var reqstr="msg2.php?";
ajaxreq2.open("GET",reqstr,true);
ajaxreq2.send(null);
}
function processresponse()
{

if(ajaxreq2.readyState==4)
{
var res=document.getElementById("message");
res.innerHTML=ajaxreq2.responseText;
show3();
}
}
function show3()
{
       setTimeout(function () {show2();},1000);
}
</script>
    </head>
    <body>
       
        <script>
        show2();
        </script>
        <textarea id="message" cols="20" rows="20" name="message"></textarea>
        <form action="msg.php" method="get">
            <input id="msg" type="text" name="msg">
            <input type="button" name="submit" onclick="show();" value="Send">
        </form>
    </body>
</html>