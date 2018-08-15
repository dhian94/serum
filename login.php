<?php
session_start();
$_SESSION['logedin'] = false;
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Login SERUM</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="styles/bootstrap.min.css">
        <link rel="stylesheet" href="styles/bootstrap-theme.min.css">
        <link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" href="styles/cssLogin.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-fixed-top" role="navigation">

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
                            <li> <a href="index.php"  style="color: black; font-size: 20px; border: solid black; margin: 5%;"><span class="glyphicon glyphicon-home"></span> Main</a></li>
                            <li><a href="login.php" style="color: black; font-size: 20px; border: solid black; margin: 5%;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                            <li><a href="register.php" style="color: black; font-size: 20px; border: solid black; margin: 5%;"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        </ul>
                    </div><!--/.navbar-collapse -->
                </div>
            </nav> <!-- end of navigation bar-->
            <!-- container -->
            <div class="container">
                <div class="card card-container cardLogin">
                    <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
                    <img id="profile-img" class="profile-img-card" src="bahan/5.jpg" />
                    <p id="profile-name" class="profile-name-card">Login SERUM</p>
                    <form class="form-signin" method="post" action="model/cekLogin.php">
                        <span id="reauth-user" class="reauth-user"></span>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" id="inputUser" class="form-control"  placeholder="Username" name="username" required autofocus>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
                        <!--                    <div id="remember" class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="remember-me"> Remember me
                                                </label>
                                            </div>-->
                        <button class="btn btn-primary btn-signin" type="submit" name="submit">Sign in</button>
                    </form><!-- /form -->
    <!--                <span class="glyphicon glyphicon-home"></span>
                    <a href="index.html" class="back2Home">Back to SERUM</a>-->
                </div><!-- /card-container -->
            </div><!-- /container -->
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
