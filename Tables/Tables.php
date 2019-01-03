<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="author" content="ISC Lizeth Viviana Martínez Gómez">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Base para creación de tablas</title>

   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../Libs/css/bootstrap.min.css">
    <!-- CSS  propio-->
    <link rel="stylesheet" href="../Libs/css/style4.css">

    <!--dataTables-->
    <link rel="stylesheet" href="../Libs/DataTable/datatables.min.css">
    <link rel="stylesheet" href="../Libs/DataTable/DataTables/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../Libs/css/tablestyle.css">
    <script src="../Libs/DataTable/datatables.min.js"></script>

    <!-- Font Awesome JS -->
    <script defer src="../Libs/fontAwesome/js/solid.js" ></script>
    <script defer src="../Libs/fontAwesome/js/fontawesome.js"></script>


</head>
<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <?php include ('../Main/main.php') ?><!--PARA INCORPORAR EL MENÚ LATERAL-->

        <!-- Page Content  -->
        <div>
         <?php include ('../Main/head.php') ?><!--PARA INCORPORAR LA CABECERA DE IDENTIFICACIÓN DEL SISTEMA-->
        </div>
        <div id="contentt" name="contentt">
            
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2 class="text-center text-uppercase">Catálogo Ejemplo</h2>
                </div>
            </div>
            <div class="row">
                <div id="cuadro1" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tablita table-responsive col-xs-12 col-sm-12 col-md-12 col-lg-12" >      
                        <table id="usuarios" class="table table-bordered table-condensed" width="100%">
                            <thead>
                                <tr>                
                                    <th>CAMPO 1</th>
                                    <th>CAMPO 2</th>
                                    <th>CAMPO 3</th>
                                    <th>CAMPO 4</th>
                                    <th>CAMPO 5</th>
                                    <th>CAMPO 6</th>
                                    <th>OPERACIONES </th>
                                </tr>
                            </thead>                    
                        </table>
                    </div>          
                </div>  
            </div>
        </div>
    </div>

    <!-- jQuery-->
    <script src="../Libs/js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="../Libs/js/mainfunction.js"> </script>
    <!-- Popper.JS -->
    <script src="../Libs/js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="../Libs/js/bootstrap.min.js"></script>

    <script src="../Libs/js/jquery-1.12.3.js" type="text/javascript"></script><!--1-->
    <script src="../Libs/DataTable/DataTables/js/jquery.dataTables.min.js" type="text/javascript"></script><!--1/2-->
    <script src="../Libs/DataTable/Buttons/js/dataTables.buttons.min.js" type="text/javascript"></script><!--1-->
    <script src="../Libs/DataTable/Buttons/js/buttons.flash.min.js" type="text/javascript"></script><!--1-->
    <script src="../Libs/DataTable/JSZip/jszip.min.js" type="text/javascript"></script><!--1-->
    <script src="../Libs/DataTable/pdfmake/pdfmake.min.js" type="text/javascript"></script><!--1-->

    
    <script src="../Libs/DataTable/Buttons/js/buttons.html5.min.js" type="text/javascript"></script><!--1-->
    <script src="../Libs/DataTable/Buttons/js/buttons.print.min.js" type="text/javascript"></script><!--1-->
    <script src="../Libs/DataTable/DataTables/js/dataTables.bootstrap4.min.js" type="text/javascript"></script><!--2-->
     <script src="js/funcion_di1.js"></script>
    


    
</body>

</html>