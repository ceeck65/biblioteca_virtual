<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Biblioteca Virtual</title>

        <link href="<?= BASE_URL ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= BASE_URL ?>assets/css/datepicker3.css" rel="stylesheet">
        <link href="<?= BASE_URL ?>assets/css/styles.css" rel="stylesheet">
        <link rel="stylesheet" href="<?= BASE_URL ?>assets/font-awesome/css/font-awesome.min.css">



        <!--Icons-->
        <script src="<?= BASE_URL ?>assets/js/lumino.glyphs.js"></script>

        <!--[if lt IE 9]>
        <script src="<?= BASE_URL ?>assets/js/html5shiv.js"></script>
        <script src="<?= BASE_URL ?>assets/js/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?= BASE_URL ?>"><span>Sistema de Menú</span>Administor</a>
                    <ul class="user-menu">
                        <li class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
                                <li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
                                <li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div><!-- /.container-fluid -->
        </nav>

        <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
            <form role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </form>
            <ul class="nav menu">
                <li class="active"><a href="<?= BASE_URL ?>index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Inicio</a></li>
                <li class="parent ">
                    <a href="#">
                        <span data-toggle="collapse" href="#sub-item-1"><i class="fa fa-book"></i><use xlink:href="#stroked-chevron-down"></use></svg> Libros <i class="fa fa-angle-double-down"></i></span> 
                    </a>
                    <ul class="children collapse" id="sub-item-1">
                        <li>
                            <a class="" href="<?= BASE_URL ?>index.php/libros">
                                <i class="fa fa-list"></i><use xlink:href="#stroked-chevron-right"></use></svg> Lista de libros
                            </a>
                        </li>
                        <li>
                            <a class="" href="<?= BASE_URL ?>index.php/libros/registrar_nuevo">
                                <i class="fa fa-file"></i><use xlink:href="#stroked-chevron-right"></use></svg> Registrar Libro
                            </a>
                        </li>
                        <li>
                            <a class="" href="#">
                                <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 3
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="parent ">
                    <a href="#">
                        <span data-toggle="collapse" href="#sub-item-2"><i class="fa fa-users"></i><use xlink:href="#stroked-chevron-down2"></use></svg> Autores <i class="fa fa-angle-double-down"></i></span> 
                    </a>
                    <ul class="children collapse" id="sub-item-2">
                        <li>
                            <a class="" href="<?= BASE_URL ?>index.php/libros">
                                <i class="fa fa-list-ul"></i><use xlink:href="#stroked-chevron-right"></use></svg> Lista de Autores
                            </a>
                        </li>
                        <li>
                            <a class="" href="<?= BASE_URL ?>index.php/libros/registrar_nuevo">
                                <i class="fa fa-user-plus"></i><use xlink:href="#stroked-chevron-right"></use></svg> Registrar Autor
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="parent ">
                    <a href="#">
                        <span data-toggle="collapse" href="#sub-item-3"><i class="fa fa-bars"></i><use xlink:href="#stroked-chevron-down2"></use></svg> Especialidades <i class="fa fa-angle-double-down"></i></span> 
                    </a>
                    <ul class="children collapse" id="sub-item-3">
                        <li>
                            <a class="" href="<?= BASE_URL ?>index.php/especialidades">
                                <i class="fa fa-list-ul"></i><use xlink:href="#stroked-chevron-right"></use></svg> Lista de Especialidades
                            </a>
                        </li>
                        <li>
                            <a class="" href="<?= BASE_URL ?>index.php/especialidades/registrar">
                                <i class="fa fa-user-plus"></i><use xlink:href="#stroked-chevron-right"></use></svg> Registrar Especialidades
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="parent ">
                    <a href="#">
                        <span data-toggle="collapse" href="#sub-item-4"><i class="fa fa-user"></i><use xlink:href="#stroked-chevron-down2"></use></svg> Usuarios <i class="fa fa-angle-double-down"></i></span> 
                    </a>
                    <ul class="children collapse" id="sub-item-4">
                        <li>
                            <a class="" href="<?= BASE_URL ?>index.php/usuarios">
                                <i class="fa fa-list-ul"></i><use xlink:href="#stroked-chevron-right"></use></svg> Lista de Usuarios
                            </a>
                        </li>
                        <li>
                            <a class="" href="<?= BASE_URL ?>index.php/usuarios/registrar">
                                <i class="fa fa-user-plus"></i><use xlink:href="#stroked-chevron-right"></use></svg> Registrar Usuarios
                            </a>
                        </li>
                    </ul>
                </li>
                <li role="presentation" class="divider"></li>
               </ul>

        </div><!--/.sidebar-->

        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
            <div class="row">
                <ol class="breadcrumb">
                    <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                    <li class="active">Icons</li>
                </ol>
            </div><!--/.row-->

            <div class="row">
                <div class="col-lg-12">
                    <?php include $contenido ?>
                </div>
            </div><!--/.row-->  
            </div><!--/.row-->
            <!--/.row-->
        </div>	<!--/.main-->

        <script src="<?= BASE_URL ?>assets/js/jquery-1.11.1.min.js"></script>
        <script src="<?= BASE_URL ?>assets/js/bootstrap.min.js"></script>
        <script src="<?= BASE_URL ?>assets/js/chart.min.js"></script>
        <script src="<?= BASE_URL ?>assets/js/chart-data.js"></script>
        <script src="<?= BASE_URL ?>assets/js/easypiechart.js"></script>
        <script src="<?= BASE_URL ?>assets/js/easypiechart-data.js"></script>
        <script src="<?= BASE_URL ?>assets/js/bootstrap-datepicker.js"></script>
        <script>
            $('#calendar').datepicker({
            });

            !function ($) {
                $(document).on("click", "ul.nav li.parent > a > span.icon", function () {
                    $(this).find('em:first').toggleClass("glyphicon-minus");
                });
                $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
            }(window.jQuery);

            $(window).on('resize', function () {
                if ($(window).width() > 768)
                    $('#sidebar-collapse').collapse('show')
            })
            $(window).on('resize', function () {
                if ($(window).width() <= 767)
                    $('#sidebar-collapse').collapse('hide')
            })
        </script>	
    </body>

</html>
