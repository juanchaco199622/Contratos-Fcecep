<?php
    session_start();
    require 'funcs/conexion.php';
    require 'funcs/funcs.php';

    if (!isset($_SESSION["id_usuario"])) {
        header("Location: index.php");
    }
    $idUsuario = $_SESSION['id_usuario'];

    $sql = "
    SELECT
              id, nombre
    FROM
              usuarios
     WHERE
              id = $idUsuario ";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_assoc();

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gestion de Personas</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Fonts from Font Awsome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- CSS Animate -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- Vector Map  -->
    <link rel="stylesheet" href="assets/plugins/jvectormap/css/jquery-jvectormap-1.2.2.css">
    <!-- ToDos  -->
    <link rel="stylesheet" href="assets/plugins/todo/css/todos.css">
    <!-- Morris  -->
    <link rel="stylesheet" href="assets/plugins/morris/css/morris.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="css/estilo.css">


  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>




    <script src="js/jquery.dataTables.min.js"></script>
    <script src="assets/js/modernizr-2.6.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/usuario.js"></script>
    <script type="text/javascript" src="js/contratos.js"></script>

    </script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <section id="container">
        <header id="header">
            <!--logo start-->
            <div class="brand">
                <a href="index.html" class="logo">S6AE Y S6AN</a>
            </div>
            <!--logo end-->
            <div class="toggle-navigation toggle-left">
                <button type="button" class="btn btn-default" id="toggle-left" data-toggle="tooltip" data-placement="right">
                    <i class="fa fa-bars"></i>
                </button> <label class="lead">&nbsp;Gestion de Contratos</label>
            </div>

            <div class="user-nav">
                <ul>
                    <li class="dropdown settings"> <?php echo utf8_decode($row['nombre']); ?></li>
                    <li class="dropdown settings">
                        <a  href='logout.php'>Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </header>

        <!--sidebar left start-->
        <aside class="sidebar">
            <div id="leftside-navigation" class="nano">

            <div class="form-group" id="opciones">
                    <div class="col-sm-10">

                      <?php if($_SESSION['informe_permiso']==1) { ?>
                        <ul>
                          <li><a class="fa fa-arrow-circle-down" href="php/informes/index.php" role="button"> Informes</a></li>
                        </ul>
                      <?php } ?>

                        <?php if($_SESSION['roles_permiso']==1) { ?>
                          <ul>
                              <li><a class="fa fa-sitemap roles" href="php/roles/index.php" role="button">Roles</a></li>
                          </ul>
                        <?php } ?>

                        <?php if($_SESSION['pais_permiso']==1) { ?>
                          <ul>
                            <li><a class="fa fa-briefcase pais" href="php/pais/index.php" role="button"> Pais</a></li>
                          </ul>
                        <?php } ?>

                        <?php if($_SESSION['ciudad_permiso']==1) { ?>
                              <ul>
                                <li><a class="fa fa-building-o ciudad" href="php/ciudad/index.php" role="button"> Ciudades</a></li>
                              </ul>
                        <?php } ?>


                        <?php if($_SESSION['empresa_permiso']==1) { ?>
                          <ul>
                            <li><a class="fa fa-suitcase empresa" href="php/empresa/index.php" role="button"> Empresa</a></li>
                          </ul>
                        <?php } ?>

                        <?php if($_SESSION['sucursal_permiso']==1) { ?>
                          <ul>
                            <li><a class="fa fa-location-arrow sucursal" href="php/sucursal/index.php" role="button"> Sucursales</a></li>
                          </ul>
                        <?php } ?>

                        <?php if($_SESSION['procesos_permiso']==1) { ?>
                          <ul>
                            <li><a class="fa fa-gears proceso" href="php/proceso/index.php" role="button"> Procesos</a></li>
                          </ul>
                        <?php  }?>

                        <?php if($_SESSION['empleado_permiso']==1) { ?>
                          <ul>
                            <li><a class="fa fa-user empleado" href="php/empleados/index.php" role="button"> Empleados</a></li>
                          </ul>
                        <?php } ?>

                        <?php if($_SESSION['contrato_permiso']==1) { ?>
                          <ul>
                            <li><a class="fa fa-file-text-o contratos" href="php/gestion_contratos/index.php" role="button"> Contratos</a></li>
                          </ul>
                        <?php } ?>

                        <?php if($_SESSION['proveedor_permiso']==1) { ?>
                              <ul>
                                  <li><a class="fa fa-gears proveedor" href="php/proveedor/index.php" role="button"> Proveedor</a></li>
                              </ul>
                        <?php } ?>
                        <?php if($_SESSION['usuario_permiso']==1) { ?>
                              <ul>
                                  <li><a class="fa fa-plus-circle usuario" href="php/usuario/index.php" role="button"> Usuarios </a></li>
                              </ul>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </aside>
        <!--sidebar left end-->

        <!--main content start-->
        <section class="main-content-wrapper">
            <section id="main-content">

                <!--Contenido de la pagina-->
    <div class="panel-body">
        <div class="panel-group hide" id="contenedor"><div class="panel panel-primary">
            <div class="panel-heading" id="titulo"></div>
            <div class="panel-body">

                <div class="form-group" id="contenido">

                </div>

            </div>


                </div>
            </div>
        </div>

                <!--ToDo end-->
            </section>
        </section>
        <!--main content end-->

        <!--sidebar right end-->
    </section>
    <!--Global JS-->
    <script src="assets/js/jquery-1.10.2.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/waypoints/waypoints.min.js"></script>
    <script src="assets/js/application.js"></script>
    <!--Page Level JS-->
    <script src="assets/plugins/countTo/jquery.countTo.js"></script>
    <script src="assets/plugins/weather/js/skycons.js"></script>
    <!-- FlotCharts  -->
    <script src="assets/plugins/flot/js/jquery.flot.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.resize.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.canvas.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.image.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.categories.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.crosshair.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.errorbars.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.fillbetween.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.navigate.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.pie.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.selection.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.stack.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.symbol.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.threshold.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.colorhelpers.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.time.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.example.js"></script>
    <!-- Morris  -->
    <script src="assets/plugins/morris/js/morris.min.js"></script>
    <script src="assets/plugins/morris/js/raphael.2.1.0.min.js"></script>
    <!-- Vector Map  -->
    <script src="assets/plugins/jvectormap/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/plugins/jvectormap/js/jquery-jvectormap-world-mill-en.js"></script>
    <!-- ToDo List  -->
    <script src="assets/plugins/todo/js/todos.js"></script>

    <script src="js/jquery.dataTables.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

    <script src="js/funcionesJquery.js"></script>
    <script src="js/usuario.js"></script>
    <script src="js/contratos.js"></script>
    <script>
        $(document).ready(Inicio);
    </script>

<div class="footer-bottom">
      <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="copyright">
                    © 2017 Todos los derechos reservados.
                </div>

          </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="design">
                     <a href="#">S6AE </a> |  <a target="_blank" href="https://www.cecep.edu.co/">Centro Colombiano de Estudios Profesionales - Enfasis II</a>
                </div>
            </div>
      </div>
</div>
</body>
</html>
