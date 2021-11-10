<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Gestión de activos fijos</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="views/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="views/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="views/bower_components/Ionicons/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="views/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="views/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="views/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="views/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="views/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="views/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="views/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="views/bower_components/bootstrap-daterangepicker/daterangepicker.css">

  <link rel="stylesheet" href="views/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <link rel="stylesheet" href="views/css/styles.css">
  <link rel="stylesheet" href="views/css/jquery.dataTables.min.js">
  <link rel="stylesheet" href="views/css/responsive.dataTables.min.js">
 
  
 
  


  <link rel="stylesheet" media="only screen and (max-width:768px)" href="views/css/arregloResponsive.css">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="views/dist/css/sweetalert.css">
  <script src="views/dist/js/sweetalert.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
  <script src="views/js/formularioDinamico.js"></script>
  <script src="views/bower_components/ckeditor/ckeditor.js"></script>
 
  <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
  
</head>
<body class="hold-transition skin-blue sidebar-mini fixed" style="height: 100%;">
<div class="wrapper">

  
    <?php 
      $template = new linksControllers();
      $template->linkController();

     ?>



</div>






<!-- jQuery 3 -->
<script src="views/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="views/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="views/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="views/bower_components/raphael/raphael.min.js"></script>
<script src="views/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="views/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="views/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="views/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="views/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="views/bower_components/moment/min/moment.min.js"></script>
<script src="views/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="views/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="views/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="views/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="views/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="views/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="views/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="views/dist/js/demo.js"></script>

<script src="views/dist/js/jquery.dataTables.min.js"></script>

<script src="views/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>



<script src="views/js/validacionUsuario.js"></script>
<script src="views/js/botonArchivo.js"></script>
<script src="views/js/validarFormularios.js"></script>
<script src="views/js/maximizar.js"></script>


<script>
    $('#articulo').change(function(){
      var textoParrafo = $('#lista1 option:selected').text();
      var textoArticulo = $('#articulo option:selected').text();
      console.log('articulo ',textoParrafo+' '+textoArticulo);
      CKEDITOR.instances['ckeditor_autoInicial'].insertText(textoParrafo+' '+textoArticulo);
  });

    $('#articuloActa').change(function(){
      var textoParrafo = $('#lista2 option:selected').text();
      var textoArticulo = $('#articuloActa option:selected').text();
      console.log('articuloActa ',textoParrafo+' '+textoArticulo);
      CKEDITOR.instances['ckeditors'].insertText(textoParrafo+' '+textoArticulo);
  });
</script>

<script>
     $('#reservation').daterangepicker({
        "locale": {
            "format": "YYYY-MM-DD",
            "separator": " / ",
            "applyLabel": "Guardar",
            "cancelLabel": "Cancelar",
            "fromLabel": "Desde",
            "toLabel": "Hasta",
            "customRangeLabel": "Personalizar",
            "daysOfWeek": [
                "Do",
                "Lu",
                "Ma",
                "Mi",
                "Ju",
                "Vi",
                "Sa"
            ],
            "monthNames": [
                "Enero",
                "Febrero",
                "Marzo",
                "Abril",
                "Mayo",
                "Junio",
                "Julio",
                "Agosto",
                "Setiembre",
                "Octubre",
                "Noviembre",
                "Diciembre"
            ],
            "firstDay": 1
        },
        "opens": "center"
     })
</script>
<script>
  $(document).ready(function() {
    $('#ver_estudiantes').DataTable( {
        responsive: {
            details: {
                type: 'column',
                target: -1
            }
        },
        columnDefs: [ {
            className: 'control',
            orderable: false,
            targets:   -1
        } ]
    } );
} );
</script>


<script>
  $('#fecha_datepicker').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    }).datepicker("setDate", new Date());
  $('#fecha_nacimiento').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
  });
</script>

<script>
  $('#fecha_sancion').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    }).datepicker("setDate", new Date());

   $('#fecha_sancion_editar').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    })
</script>
  
<script>
   $(function () {
    $('#ver_estudiantess').DataTable({
      'language': {
        "sLengthMenu":"Mostrar _MENU_ registros",
        "infoEmpty": "No hay datos que mostrar",
        "sSearch":"Buscar:",
        "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "sZeroRecords":    "No se encontraron resultados",
        "sEmptyTable":     "Ningún dato disponible en esta tabla",
        "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
          },
      }
    })
    $('#ejemplo').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
  
</script>
 <script>
 $(function () {
    $('#ver_usuarios').DataTable({
      'language': {
        "sLengthMenu":"Mostrar _MENU_ registros",
        "infoEmpty": "No hay datos que mostrar",
        "sSearch":"Buscar:",
        "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "sZeroRecords":    "No se encontraron resultados",
        "sEmptyTable":     "Ningún dato disponible en esta tabla",
        "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
          },
      }
    })
    $('#ejemplo').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })

  $(function () {
    $('#ver_archivos').DataTable({
       'language': {
        "sLengthMenu":"Mostrar _MENU_ registros",
        "infoEmpty": "No hay datos que mostrar",
        "sSearch":"Buscar:",
        "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "sZeroRecords":    "No se encontraron resultados",
        "sEmptyTable":     "Ningún dato disponible en esta tabla",
        "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
          },
      }
    })
    $('#ejemplo').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>



</body>
</html>