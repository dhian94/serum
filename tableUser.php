<?php
include_once './model/cKoneksi.php';
session_start();
if ($_SESSION['logedin'] == false || $_SESSION['admin'] == false) {
    header('location:./login.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Table User</title>
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
        <link type="text/css" rel="stylesheet" href="styles/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="styles/animate.css">
        <link type="text/css" rel="stylesheet" href="styles/all.css">
        <link type="text/css" rel="stylesheet" href="styles/main.css">
        <link type="text/css" rel="stylesheet" href="styles/style-responsive.css">
        <link type="text/css" rel="stylesheet" href="styles/zabuto_calendar.min.css">
        <link type="text/css" rel="stylesheet" href="styles/pace.css">
        <link type="text/css" rel="stylesheet" href="styles/jquery.news-ticker.css">
    </head>
    <body>
        <!--BEGIN BACK TO TOP-->
        <a id="totop" href="#"><i class="fa fa-angle-double-up"></i></a>
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
                    <a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>


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
                        <li><a href="tableListHomeAdmin.php"><i class="glyphicon glyphicon-list-alt">
                                </i><span class="menu-title">Table List Home</span></a>
                        </li>
                        <li class="active" ><a href="tableUser.php"><i class="glyphicon glyphicon-list-alt">
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
                        <div class="page-title">Table User</div>
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->

                <!--BEGIN CONTENT USER-->
                <div class="page-content">
                    <div class="col-lg-12">
                        <div class="row">    
                            <div class="col-lg-12">
                                <div class="panel panel-blue">
                                    <div class="panel-heading">Table User</div>
                                    <div class="panel-body">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Username</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>Nomor HP/Telepon</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th class="col-lg-4">Alamat</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            $query = mysql_query("select * from user;");
                                            $no = 1;
                                            while ($data = mysql_fetch_array($query)) {
                                                ?>
                                                <tbody>
                                                    <tr>
                                                        <td><?php echo $no; ?></td>
                                                        <td><?php echo $data['username']; ?></td>
                                                        <td><?php echo $data['nama_lengkap']; ?></td>
                                                        <td><?php echo $data['noHP']; ?></td>
                                                        <td><?php echo $data['jenis_kelamin']; ?></td>
                                                        <td><?php echo $data['alamat']; ?></td>
                                                        <td>
                                                            <a class="btn btn-primary" href="editUser.php?id=<?php echo $data['idUser'] ?>">
                                                                <abbr title="Edit User">
                                                                    <i class="fa fa-pencil">      
                                                                    </i>  
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
                                        <a class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                            <abbr title="Add User">
                                                <i class="fa fa-plus">      
                                                </i>  
                                            </abbr>   
                                        </a>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <form method="post" action="model/registerUser.php">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Edit User</h4>
                                    </div>
                                    <div class="modal-body">
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
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" name="add"class="btn btn-default" data-bind="">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--end modal-->
                </div>
                <!--END CONTENT USER-->
                <!--BEGIN FOOTER-->
                <div id="footer">
                    <div class="copyright">
                        <a href="http://themifycloud.com">2015 © SERUM</a></div>
                </div>
                <!--END FOOTER-->
                <!--END PAGE WRAPPER-->
            </div>
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
        <!--LOADING SCRIPTS FOR CHARTS-->
        <script src="script/highcharts.js"></script>
        <script src="script/data.js"></script>
        <script src="script/drilldown.js"></script>
        <script src="script/exporting.js"></script>
        <script src="script/highcharts-more.js"></script>
        <script src="script/charts-highchart-pie.js"></script>
        <script src="script/charts-highchart-more.js"></script>
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
