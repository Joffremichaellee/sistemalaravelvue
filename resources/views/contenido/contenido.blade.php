<!DOCTYPE html>
<html lang="en">
<head>
    <!--Descripcion del contenido del sitio web-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Titulo de la barra de titulo del navegador-->
    <title>Ticom</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
    <!-- Plugins CSS de Datatable -->
    <link rel="stylesheet" href="/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css" defer>
    <link rel="stylesheet" href="/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css" defer>
    <link rel="stylesheet" href="/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css" defer>

</head>
<body class="hold-transition sidebar-mini">
    
    <style>
    
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Rubik&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Cabin&display=swap');

    </style>

    <div class="wrapper" id="app" ><!--El atributo id debe ser app, como hemos visto en app.js-->

        <!-- Menu Superior -->
        @include('plantilla.menu')

        <!-- Sidebar Lateral Izquierda-->
        @include('plantilla.sidebar')

        <div class="main-footer" style="background-color:#e9ecef;">

            <!--Incluyendo lo que esta defiendo en  @section('contenido') hasta @endsection-->
            @yield('contenido')
            

        </div>

        <!-- Footer -->
        @include('plantilla.footer')
        

    </div>

    <!-- jQuery -->
    <script src="/admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/admin/dist/js/adminlte.min.js"></script>

    <!--Plugins JS de datatable -->
    <script src="/admin/plugins/datatables/jquery.dataTables.min.js" defer></script>
    <script src="/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js" defer></script>
    <script src="/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js" defer></script>
    <script src="/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js" defer></script>
    <script src="/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js" defer></script>
    <script src="/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js" defer></script>
    <script src="/admin/plugins/jszip/jszip.min.js" defer></script>
    <script src="/admin/plugins/pdfmake/pdfmake.min.js" defer></script>
    <script src="/admin/plugins/pdfmake/vfs_fonts.js" defer></script>
    <script src="/admin/plugins/datatables-buttons/js/buttons.html5.min.js" defer></script>
    <script src="/admin/plugins/datatables-buttons/js/buttons.print.min.js" defer></script>
    <script src="/admin/plugins/datatables-buttons/js/buttons.colVis.min.js" defer></script>
    

    <!--Añadimos el js generado con webpack, donde se encuentra nuestro componente vuejs-->
    <script src="/js/app.js"></script>

  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      
    });
  </script>

</body>
</html>