        
<!DOCTYPE html>

<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Ashwin Singh Messenger</title>

        <link rel='stylesheet' id='admin-bar-css'  href='http://localhost/wordpress-4.1.1/wordpress/wp-includes/css/admin-bar.min.css?ver=4.1.1' type='text/css' media='all' />


        <link rel='stylesheet' id='besty-bootstrap-css'  href='css/bootstrap.css?ver=4.1.1' type='text/css' media='' />
        <link rel='stylesheet' id='besty-style-css'  href='style.css?ver=4.1.1' type='text/css' media='all' />
        <link rel='stylesheet' id='besty-theme-css'  href='css/theme.css?ver=4.1.1' type='text/css' media='' />
        <link rel='stylesheet' id='besty-basecss-css'  href='css/base.css?ver=4.1.1' type='text/css' media='' />
        <script type='text/javascript' src='http://localhost/wordpress-4.1.1/wordpress/wp-includes/js/jquery/jquery.js?ver=1.11.1'></script>
        <script type='text/javascript' src='http://localhost/wordpress-4.1.1/wordpress/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
        <script type='text/javascript' src='js/base.js?ver=1.0'></script>

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

    </head>  


    <?php
    if (isset($_POST["submit"])) {
        session_start();

        $username = $_POST["username"];
        $password = $_POST["password"];
        $conn = mysqli_connect("127.0.0.1", "ashwin", "ashwin");
        $db = mysqli_select_db($conn, "ashwin");
        $sql = mysqli_query($conn, "select username,password from chataccount where username='$username' and password='$password'");
        $result = mysqli_fetch_assoc($sql);
        $_SESSION["username"] = $username;
        $sql = mysqli_query($conn, "update chataccount set online='yes' where username='$username'");
        header('Location:index.php');
    }
    ?>




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

                <div class="besty-menu navbar-collapse collapse"><ul>

                    </ul></div>


                <div class="footer">
                    <ul class="social" >
                    </ul>
                    <div class="copyright">Powered by <a href="" target="_blank">napster Logix</a> and Designed by Ashwin Singh.				


                    </div>
                </div>
            </div>
            <div class="mini-content">
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
                 <div style="width: 50%;margin-left: 25%;  font-family: monospace;font-size: 213%;">
                 <form action="login.php" method="post">
                     <br>
                        <table style="box-shadow: 0px 0px 15px white;">
                            <tr>
                                <td>
                            Username :
                                </td>
                                <td>
                            <input style= "color:black;" type="text" name="username">
                                </td>
                            </tr>
                             <tr>
                                <td>
                          
                                </td>
                                <td>
                         
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                            Password :
                                </td>
                                <td>
                            <input style= "color:black;" type="password" name="password">
                                </td>


                        </table>


                        <input style= "color:black;  margin: 22%; " type="submit" name="submit" value="Login">


                    </form>
            </div>
               
            </div>
           
        </div>
        <script type='text/javascript' src='http://localhost/wordpress-4.1.1/wordpress/wp-includes/js/admin-bar.min.js?ver=4.1.1'></script>
        <script type='text/javascript' src='http://localhost/wordpress-4.1.1/wordpress/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=3.51.0-2014.06.20'></script>
        <script type='text/javascript'>
            /* <![CDATA[ */
            var _wpcf7 = {"loaderUrl": "http:\/\/localhost\/wordpress-4.1.1\/wordpress\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif", "sending": "Sending ..."};
            /* ]]> */
        </script>
        <script type='text/javascript' src='http://localhost/wordpress-4.1.1/wordpress/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=4.1.1'></script>
        <script type='text/javascript' src='js/bootstrap.js?ver=20120206'></script>
        <script type='text/javascript' src='js/enscroll.js?ver=20120216'></script>
        <script type='text/javascript' src='js/default.js?ver=20120226'></script>
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
            <a class="screen-reader-shortcut" href="#wp-toolbar" tabindex="1">Skip to toolbar</a>
            <div class="quicklinks" id="wp-toolbar" role="navigation" aria-label="Top navigation toolbar." tabindex="0">
            </div>
        </div>

    </body>
</html>

</body>
</html>