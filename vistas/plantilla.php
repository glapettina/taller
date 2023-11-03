<?php

  session_start();

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CET Nº 13 | Taller</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="icon" href="vistas/img/plantilla/logo.png">

  <!--======================================
  PLUGINS DE CSS
  =======================================--> 

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="vistas/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="vistas/dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- DataTables -->
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">

  <!-- Daterange picker -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap-daterangepicker/daterangepicker.css">

  <!-- Morris chart -->
  <link rel="stylesheet" href="vistas/bower_components/morris.js/morris.css">


  <!--======================================
  PLUGINS DE JAVASCRIPT
  =======================================-->    

  <!-- jQuery 3 -->
  <script src="vistas/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="vistas/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="vistas/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="vistas/dist/js/adminlte.min.js"></script>
  <!-- SweetAlert 2 -->
  <script src="vistas/plugins/sweetalert2/sweetalert2.all.js"></script>
  <!-- DataTables -->
  <script src="vistas/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>
    <!-- Morris.js charts http://morrisjs.github.io/morris.js/-->
  <script src="vistas/bower_components/raphael/raphael.min.js"></script>
  <script src="vistas/bower_components/morris.js/morris.min.js"></script>

  <!-- ChartJS http://www.chartjs.org/-->
  <script src="vistas/bower_components/chart.js/Chart.js"></script>
  

</head>

<!--======================================
  CUERPO DOCUMENTO
=======================================--> 

<body class="hold-transition skin-blue sidebar-collapse sidebar-mini login-page">


<?php

  if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") {
    
    
    echo '<div class="wrapper">';

    /*======================================
    HEADER
    =======================================*/

    include "modulos/header.php";

    /*======================================
    MENU
    =======================================*/

    include "modulos/menu.php";

    /*======================================
    CONTENIDO
    =======================================*/

    if(isset($_GET["ruta"])){

      if ($_GET["ruta"] == "inicio" ||
          $_GET["ruta"] == "usuarios" ||
          $_GET["ruta"] == "secciones" ||
          $_GET["ruta"] == "cursos" ||
          $_GET["ruta"] == "1cb" ||
          $_GET["ruta"] == "2cb" ||
          $_GET["ruta"] == "3ecs" ||
          $_GET["ruta"] == "4ecs" ||
          $_GET["ruta"] == "5ecs" ||
          $_GET["ruta"] == "6ecs" ||
          $_GET["ruta"] == "3acs" ||
          $_GET["ruta"] == "11cbtm" ||
          $_GET["ruta"] == "12cbtm" ||
          $_GET["ruta"] == "13cbtm" ||
          $_GET["ruta"] == "11cbtt" ||
          $_GET["ruta"] == "12cbtt" ||
          $_GET["ruta"] == "13cbtt" ||
          $_GET["ruta"] == "21cbtm" ||
          $_GET["ruta"] == "22cbtm" ||
          $_GET["ruta"] == "23cbtm" ||
          $_GET["ruta"] == "21cbtt" ||
          $_GET["ruta"] == "22cbtt" ||
          $_GET["ruta"] == "11ecstm" ||
          $_GET["ruta"] == "12ecstm" ||
          $_GET["ruta"] == "11ecstt" ||
          $_GET["ruta"] == "12ecstt" ||
          $_GET["ruta"] == "21ecstv" ||
          $_GET["ruta"] == "22ecstv" ||
          $_GET["ruta"] == "23ecstv" ||
          $_GET["ruta"] == "31ecstv" ||
          $_GET["ruta"] == "32ecstv" ||
          $_GET["ruta"] == "41ecstv" ||
          $_GET["ruta"] == "42ecstv" ||
          $_GET["ruta"] == "11acstm" ||
          $_GET["ruta"] == "12acstt" ||
          $_GET["ruta"] == "11acstt" ||
          $_GET["ruta"] == "salir") {
        
          include "modulos/".$_GET["ruta"].".php";

      }else{

        include "modulos/404.php";

      }

    }else{

      include "modulos/inicio.php";

    }

    /*======================================
    FOOTER
    =======================================*/

    include "modulos/footer.php";

    echo '</div>';

  }else{

    include "modulos/login.php";

  }  

?>



<script src="vistas/js/plantilla.js"></script>
<script src="vistas/js/usuarios.js"></script>
<script src="vistas/js/secciones.js"></script>
<script src="vistas/js/cursos.js"></script>
<script src="vistas/js/alumnos.js"></script>
<script src="vistas/js/notas.js"></script>


</body>
</html>


