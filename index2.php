
<!DOCTYPE html>
<?php
session_start();
$_SESSION["user"]=$_GET["user"];
        $user=$_SESSION["user"];
        ?>
<html lang="en-US">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Ashwin Singh Messenger</title>

       <link rel='stylesheet' id='admin-bar-css'  href='http://localhost/wordpress-4.1.1/wordpress/wp-includes/css/admin-bar.min.css?ver=4.1.1' type='text/css' media='all' />
        
        <link rel='stylesheet' id='besty-bootstrap-css'  href='http://localhost/wordpress-4.1.1/wordpress/wp-content/themes/besty/css/bootstrap.css?ver=4.1.1' type='text/css' media='' />
        <link rel='stylesheet' id='besty-theme-css'  href='http://localhost/wordpress-4.1.1/wordpress/wp-content/themes/besty/css/theme.css?ver=4.1.1' type='text/css' media='' />
        <link rel='stylesheet' id='besty-basecss-css'  href='http://localhost/wordpress-4.1.1/wordpress/wp-content/themes/besty/css/base.css?ver=4.1.1' type='text/css' media='' />
        <script type='text/javascript' src='http://localhost/wordpress-4.1.1/wordpress/wp-includes/js/jquery/jquery.js?ver=1.11.1'></script>
        <script type='text/javascript' src='http://localhost/wordpress-4.1.1/wordpress/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
        <script type='text/javascript' src='http://localhost/wordpress-4.1.1/wordpress/wp-content/themes/besty/js/base.js?ver=1.0'></script>

        <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
        <style type="text/css" id="besty-header-css">
            .site-title a {
                color: #ff0c0c;
            }
        </style>
        <style type="text/css" id="custom-background-css">
            body.custom-background { background-color: #ffffff; }
        </style>
        <style type="text/css" media="print">#wpadminbar { display:none; }</style>
        <style type="text/css" media="screen">
            html { margin-top: 32px !important; }
            * html body { margin-top: 32px !important; }
            @media screen and ( max-width: 782px ) {
                html { margin-top: 46px !important; }
                * html body { margin-top: 46px !important; }
            }
        </style>
         <script type="text/javascript">
var ajaxreq=new XMLHttpRequest();
function show()
{
var msg=document.getElementById("msg").value;
var user="<?php echo $user;  ?>";

var reqstr="msg.php?msg="+msg+"&user="+user;
ajaxreq.open("GET",reqstr,true);
ajaxreq.send(null);
}



var ajaxreq2=new XMLHttpRequest();



function show2()
{


ajaxreq2.onreadystatechange=processresponse;
var user="<?php echo $user;  ?>";
var reqstr="msg2.php?user="+user;
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






var ajaxreq3=new XMLHttpRequest();




</script>
    </head>
    <body class="home blog logged-in admin-bar no-customize-support custom-background">
        <div class="content">
            <div class="menu-sidebar">
                <div class="logo">
                    <h1 class="besty-site-name"><a href="http:">ashwin</a></h1>
                    <h2>Messenge</h2>            
                </div>

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle navbar-toggle-top" data-toggle="collapse" data-target=".navbar-collapse"> 
                        <span class="sr-only"></span> 
                        <span class="icon-bar icon-color"></span> 
                        <span class="icon-bar icon-color"></span> 
                        <span class="icon-bar icon-color"></span> 
                    </button>
                </div>

                <div class="besty-menu navbar-collapse collapse"><ul id="online">

                        </ul></div>


                <div class="footer">
                    <ul class="social" >
                    </ul>
                    <div class="copyright">Powered by <a href="" target="_blank">napster Logix</a> and Designed by Ashwin Singh.				


                    </div>
                </div>
            </div>
            <div class="mini-content" style="height:100000px;">
                <div class="col-md-9">
                    <div class="masonry-container">
                        <div id="post-1" class="post-1 post type-post status-publish format-standard hentry category-uncategorized col-md-6 box">
                            
                            
                            <div id="message">
                                
                            </div>
                            
                            
                            
                        </div>
                    </div>
                    <div class="col-md-12 besty-pagination">
                        <div class="pagination"></div>      </div>
                </div>
                <a style="position:fixed" href="javascript:void(0)" class="shidebar-control"></a>
                <div  class="col-md-3 besty-sidebar">
                   
                    <aside style="position:fixed;margin-top: 10px;" class="besty-widget"><h3>To</h3>	
                       
                    </aside><aside style="position:fixed;margin-top: 80px;" class="besty-widget"><h3>Send</h3>
                        <script>
        show2();
        </script>
       
        <form action="msg.php" method="get">
            <input id="msg" style="color:black;" type="text" name="msg">
            <input type="button" name="submit" onclick="show();" value="Send">
        </form>
                    </aside>     </div>
            </div>
        </div>
       <script type='text/javascript' src='http://localhost/wordpress-4.1.1/wordpress/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=3.51.0-2014.06.20'></script>
        <script type='text/javascript'>
            /* <![CDATA[ */
            var _wpcf7 = {"loaderUrl": "http:\/\/localhost\/wordpress-4.1.1\/wordpress\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif", "sending": "Sending ..."};
            /* ]]> */
        </script>
        <script type='text/javascript' src='http://localhost/wordpress-4.1.1/wordpress/wp-content/themes/besty/js/bootstrap.js?ver=20120206'></script>
        <script type='text/javascript' src='http://localhost/wordpress-4.1.1/wordpress/wp-content/themes/besty/js/default.js?ver=20120226'></script>
        <script type='text/javascript' src='http://localhost/wordpress-4.1.1/wordpress/wp-includes/js/masonry.min.js?ver=3.1.2'></script>
        <script type='text/javascript' src='http://localhost/wordpress-4.1.1/wordpress/wp-includes/js/jquery/jquery.masonry.min.js?ver=3.1.2'></script>
        <script type="text/javascript">
            (function() {
                var request, b = document.body, c = 'className', cs = 'customize-support', rcs = new RegExp('(^|\\s+)(no-)?' + cs + '(\\s+|$)');

                request = true;

                b[c] = b[c].replace(rcs, ' ');
                b[c] += (window.postMessage && request ? ' ' : ' no-') + cs;
            }());
        </script>
        <div id="wpadminbar" class="nojq nojs" role="navigation">
           
            <div class="quicklinks" id="wp-toolbar" role="navigation" aria-label="Top navigation toolbar." tabindex="0">
            </div>
        </div>

    </body>
</html>
