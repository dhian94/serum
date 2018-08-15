<!DOCTYPE html>
<html>
    <head>
        <title>Daftar SERUM</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-1.9.1.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                //called when key is pressed in textbox
                $("#noHP").keypress(function (e) {
                    //if the letter is not digit then display error and don't type anything
                    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                        //display error message
                        $("#errmsg").html("Digits Only").show().fadeOut("slow");
                        return false;
                    }
                });
            });
        </script>
    </head>
    <body>
        <nav class="navbar  navbar-fixed-top" role="navigation">
            <div class="navbar-header" style="">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="border: solid white;">
                    <i class="glyphicon glyphicon-list"></i>
                </button>
                <a class="navbar-brand" href="index.html" style="color:black; font-size: 40px;">SERUM</a>
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
            <form method="post" action="model/registerUser.php">
                <!--<div class="page-content">-->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-5">
                            <div class="panel panel-violet">
                                <div class="panel-heading">
                                    Register</div>
                                <div class="panel-body pan">
                                    <div class="form-body pal">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="input-icon right">
                                                        <i class="glyphicon glyphicon-user"></i>
                                                        <input id="inputName" type="text" name="username" placeholder="Username" class="form-control" required=""/></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="input-icon right">
                                                        <i class="glyphicon glyphicon-lock"></i>
                                                        <input id="inputPassword" type="password" name="password" placeholder="Password" class="form-control" required=""/></div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="input-icon right">
                                                        <!--<i class="glyphicon glyphicon-lock"></i>-->
                                                        <input id="inputNamaLengkap" type="text" name="namaLengkap" placeholder="Nama Lengkap" class="form-control" required=""/></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-icon right">
                                                        <!--<i class="fa fa-envelope"></i>-->
                                                        <input id="inputNoKTP" type="text" name="noKTP" placeholder="Nomor KTP" class="form-control" required=""/></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-icon right">
                                                        <!--<i class="fa fa-phone"></i>-->
                                                        <input id="inputNoPe" type="text" name="noHP" placeholder="Nomor HP/Telepon" class="form-control" required=""/></div>
                                                    <span id="errmsg"></span>
                                                </div>
                                            </div>
                                        </div>                      
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select class="form-control" name="kelamin" required>
                                                        <option value="Laki-Laki">Laki-Laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mbn">
                                            <textarea rows="3"  name="alamat" placeholder="Alamat" class="form-control"></textarea></div>
                                    </div>
                                    <div class="form-actions text-right pal">
                                        <button type="submit" name="register" class="btn btn-primary">
                                            Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--</div>-->
            </form>
        </div> 
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

