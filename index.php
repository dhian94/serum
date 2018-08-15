<?php
session_start();
$_SESSION['logedin'] = false;
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>SERUM</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
    <link rel="stylesheet" href="styles/bootstrap-theme.min.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/cssLogin.css">

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
    <nav class="navbar  navbar-fixed-top" role="navigation">
        <div class="navbar-header" style="">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="border: solid white;">

                <i class="glyphicon glyphicon-list"></i>
            </button>
            <a class="navbar-brand" href="index.html" style="color: black; font-size: 40px;">SERUM</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

            <div class="navbar-form navbar-right">
                <ul class="nav navbar-nav">
                    <li> <a href="findme.php"  style="color: black; font-size: 20px; border: solid black; margin: 5%;"><span class="glyphicon glyphicon-info-sign"></span> Find Us</a></li>
                    <li><a href="login.php" style="color: black; font-size: 20px; border: solid black; margin: 5%;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="register.php" style="color: black; font-size: 20px; border: solid black; margin: 5%;"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                </ul>
            </div><!--/.navbar-collapse -->
        </div>
    </nav> <!-- end of navigation bar-->
    <!---->            

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function (b, o, i, l, e, r) {
            b.GoogleAnalyticsObject = l;
            b[l] || (b[l] =
                    function () {
                        (b[l].q = b[l].q || []).push(arguments)
                    });
            b[l].l = +new Date;
            e = o.createElement(i);
            r = o.getElementsByTagName(i)[0];
            e.src = '//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e, r)
        }(window, document, 'script', 'ga'));
        ga('create', 'UA-XXXXX-X', 'auto');
        ga('send', 'pageview');
    </script>
</body>
</html>
