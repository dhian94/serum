<?php
include_once './model/cKoneksi.php';
session_start();
if ($_SESSION['logedin'] == false || $_SESSION['admin'] == false) {
    header('location:./login.php');
}
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Table List Rumah</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="images/icons/favicon.ico">
        <link rel="apple-touch-icon" href="images/icons/favicon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114x114.png">
        <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
        <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
        <link type="text/css" rel="stylesheet" href="styles/jquery-ui-1.10.4.custom.min.css">
        <link type="text/css" rel="stylesheet" href="styles/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="styles/font-awesome.css">
        <link type="text/css" rel="stylesheet" href="styles/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="styles/animate.css">
        <link type="text/css" rel="stylesheet" href="styles/all.css">
        <link type="text/css" rel="stylesheet" href="styles/main.css">
        <link type="text/css" rel="stylesheet" href="styles/style-responsive.css">
        <link type="text/css" rel="stylesheet" href="styles/zabuto_calendar.min.css">
        <link type="text/css" rel="stylesheet" href="styles/pace.css">
    </head>
    <body>
        <!--BEGIN BACK TO TOP-->
        <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
        <!--END BACK TO TOP-->
        <!--BEGIN TOPBAR-->
        <div id="header-topbar-option-demo" class="page-header-topbar">
            <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a id="logo" href="#" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">SERUM</span><span style="display: none" class="logo-text-icon">µ</span></a></div>
                <div class="topbar-main">
                    <a id="menu-toggle" class="hidden-xs"><i class="fa fa-bars"></i></a>
                    <ul class="nav navbar navbar-top-links navbar-right mbn">
                        <li class="dropdown topbar-user"><a data-hover="dropdown" href="#" class="dropdown-toggle">
                                <img src="images/avatar/48.jpg" alt="" class="img-responsive img-circle"/>&nbsp;
                                <span class="hidden-xs">Admin</span><span class="caret">
                                </span></a>
                            <ul class="dropdown-menu dropdown-user pull-right">
                                <li><a href="login.php"><i class="glyphicon glyphicon-log-out"></i>Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!--END TOPBAR-->
        <div id="wrapper">
            <!--BEGIN SIDEBAR MENU-->
            <nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"
                 data-position="right" class="navbar-default navbar-static-side">
                <div class="sidebar-collapse menu-scroll">
                    <ul id="side-menu" class="nav">

                        <div class="clearfix"></div>
                        <li ><a href="dashboardAdmin.php"><i class="glyphicon glyphicon-home">
                                </i><span class="menu-title">Dashboard</span></a>
                        </li>
                        <li class="active"><a href="tableListHomeAdmin.php"><i class="glyphicon glyphicon-list-alt">
                                </i><span class="menu-title">Table List Home</span></a>
                        </li>
                        <li  ><a href="tableUser.php"><i class="glyphicon glyphicon-list-alt">
                                </i><span class="menu-title">Table User </span></a>
                        </li>
                        <li ><a href="konfirmasiSewa.php"><i class="glyphicon glyphicon-check">
                                </i><span class="menu-title">Konfirmasi Sewa </span></a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--END SIDEBAR MENU-->
            <!--END SIDEBAR MENU-->

            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">Table List Rumah</div>
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->

                <!--BEGIN CONTENT LIST HOME-->
                <div class="page-content">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="panel panel-violet">
                                    <div class="panel-heading">
                                        Tambah List Rumah</div>
                                    <div class="panel-body pan">
                                        <form action="model/mInputRumah.php" method="post" enctype="multipart/form-data">
                                            <div class="form-body pal">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-envelope"></i>
                                                                <input id="inputTipeRumah" type="text" placeholder="Tipe Rumah" class="form-control" required="" name="tipe"/></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-phone"></i>
                                                                <input id="inputLuasTanah" type="text" placeholder="Luas Tanah" class="form-control" required="" name="luas"/></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-phone"></i>
                                                                <input id="inputHargaRumah" type="text" placeholder="Harga Rumah" class="form-control" required="" name="harga"/></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-phone"></i>
                                                                <input id="inputStokRumah" type="text" placeholder="Stok Rumah" class="form-control" required="" name="stok"/></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div class="input-icon right">
                                                                <i class="glyphicon glyphicon-lock"></i>
                                                                <input id="inputNamaGambar" type="text" placeholder="Nama Gambar" class="form-control" required="" name="namaGambar"/></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input name="MAX_FILE_SIZE" value="204800" type="hidden">
                                                    <input id="inputIncludeFile" type="file" placeholder="Gambar" accept="image/*" required="" name="image" />
                                                </div>
                                                <div class="form-group mbn">
                                                    <textarea rows="5" placeholder="Deskripsi Rumah" class="form-control" required="" name="deskripsi"></textarea></div>
                                            </div>
                                            <div class="form-actions text-right pal">
                                                <button type="submit" class="btn btn-primary" name="save" />
                                                Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="panel panel-blue">
                                    <div class="panel-heading">Tabel List Rumah</div>
                                    <div class="panel-body">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Tipe</th>
                                                    <th>Luas</th>
                                                    <th>Harga</th>
                                                    <th>Stok</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $query = mysql_query("SELECT * FROM data_rumah;");
                                                $no = 1;
                                                while ($data = mysql_fetch_array($query)or die(mysql_error())) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $no; ?></td>
                                                        <td><?php echo $data['tipe_rumah']; ?></td>
                                                        <td><?php echo $data['luas_rumah']; ?></td>
                                                        <td><?php echo $data['harga']; ?></td>
                                                        <td><?php echo $data['stok']; ?></td>
                                                        <td> <a class="btn btn-primary" href="editRumah.php?tipe=<?php echo $data['tipe_rumah'] ?>">
                                                                <abbr title="edit">
                                                                    <i class="glyphicon glyphicon-pencil"></i>
                                                                </abbr>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <?php
                                                $no++;
                                            }
                                            ?>		
                                        </table>                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--END CONTENT LIST HOME-->
                <!--BEGIN FOOTER-->
                <div id="footer">
                    <div class="copyright">
                        <a href="http://themifycloud.com">2015 © SERUM</a></div>
                </div>
                <!--END FOOTER-->
            </div>
            <!--END PAGE WRAPPER-->
        </div>
        <script src="script/jquery-1.10.2.min.js"></script>
        <script src="script/jquery-migrate-1.2.1.min.js"></script>
        <script src="script/jquery-ui.js"></script>
        <script src="script/bootstrap.min.js"></script>
        <script src="script/bootstrap-hover-dropdown.js"></script>
        <script src="script/html5shiv.js"></script>
        <script src="script/respond.min.js"></script>
        <script src="script/jquery.metisMenu.js"></script>
        <script src="script/jquery.slimscroll.js"></script>
        <script src="script/jquery.cookie.js"></script>
        <script src="script/icheck.min.js"></script>
        <script src="script/custom.min.js"></script>
        <script src="script/jquery.news-ticker.js"></script>
        <script src="script/jquery.menu.js"></script>
        <script src="script/pace.min.js"></script>
        <script src="script/holder.js"></script>
        <script src="script/responsive-tabs.js"></script>
        <script src="script/jquery.flot.js"></script>
        <script src="script/jquery.flot.categories.js"></script>
        <script src="script/jquery.flot.pie.js"></script>
        <script src="script/jquery.flot.tooltip.js"></script>
        <script src="script/jquery.flot.resize.js"></script>
        <script src="script/jquery.flot.fillbetween.js"></script>
        <script src="script/jquery.flot.stack.js"></script>
        <script src="script/jquery.flot.spline.js"></script>
        <script src="script/zabuto_calendar.min.js"></script>
        <script src="script/index.js"></script>
        <!--CORE JAVASCRIPT-->
        <script src="script/main.js"></script>
        <script>        (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-145464-12', 'auto');
            ga('send', 'pageview');
        </script>
    </body>
</html>