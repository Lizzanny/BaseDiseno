<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="author" content="ISC Lizeth Viviana Martínez Gómez">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Base para creación de formularios</title>

   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../Libs/css/bootstrap.min.css">
    <!-- CSS  propio-->
    <link rel="stylesheet" href="../Libs/css/style4.css">
    <link rel="stylesheet" href="../Libs/css/formstyle.css">

    <!-- Font Awesome JS -->
    <script defer src="../Libs/fontAwesome/js/solid.js" ></script>
    <script defer src="../Libs/fontAwesome/js/fontawesome.js"></script>

</head>
<style>
    
</style>
<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <?php include ('../Main/main.php') ?><!--PARA INCORPORAR EL MENÚ LATERAL-->

        <!-- Page Content  -->
        <div>
         <?php include ('../Main/head.php') ?><!--PARA INCORPORAR LA CABECERA DE IDENTIFICACIÓN DEL SISTEMA-->
        </div>
        <div id="contentf" name="contentf">
            <div align="center">
                <h2 align="center">Formularios pequeños</h2>
                <form id="peques" name="peques">
                    <div class="row">
                        <div class="hidden-xs col-sm-1 col-md-1 col-lg-1 col-xl-1"></div> 
                        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 form-group">
                            <label>campo</label>
                            <input class="form-control" type="number" name="" value="">
                        </div> <!--campos-->
                        <div class="hidden-xs col-sm-1 col-md-1 col-lg-1 col-xl-1"></div> 
                    </div>   

                    <div class="row">
                        <div class="hidden-xs col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>  
                        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 form-group">
                            <label>Genero</label><br>
                            <input type="radio"  name="gender" value="male"> Másculino<br>
                            <input type="radio"  name="gender" value="female"> Femenino<br>
                        </div> <!--campos-->
                        <div class="hidden-xs col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>  
                    </div> 
                    <div class="row">
                        <div class="hidden-xs col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>  
                        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 form-group">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 colxl-6 col-lg-6">
                                    <button type="button" class="btn btn-suc"><i class="fas fa-save"></i>&nbsp; Guardar</button>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 colxl-6 col-lg-6">
                                    <button type="button" class="btn btn-can"><i class="fas fa-undo"></i>&nbsp; Cancelar</button>
                                </div>
                            </div>
                        </div> <!--campos-->
                        <div class="hidden-xs col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>  
                    </div>                         
                </form>
            </div>
            <br>
            <div align="center">
                <h2 align="center">Formularios medianos</h2>
                <form id="medianos" name="medianos">
                    <div class="row">
                        <div class="hidden-xs col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                        <div class="col-6 col-sm-5 col-md-5 col-lg-5 col-xl-5 form-group">
                            <label>campo</label>
                            <input class="form-control" type="number" name="" value="">
                        </div> <!--campos-->
                
                        <div class="col-6 col-sm-5 col-md-5 col-lg-5 col-xl-5 form-group">
                            <label>campo</label>
                            <select name="" class="form-control">
                                <option value="">seleccione</option>
                                <option value="">a</option>
                                <option value="">b</option>
                                <option value="">c</option>
                                <option value="">d</option>
                                <option value="">e</option>
                            </select>
                        </div> <!--campos-->
                        <div class="hidden-xs col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                    </div>   

                    <div class="row">
                        <div class="hidden-xs col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                        <div class="col-6 col-sm-5 col-md-5 col-lg-5 col-xl-5 form-group">
                            <label>Genero</label><br>
                            <input type="radio"  name="gender" value="male"> Másculino<br>
                            <input type="radio"  name="gender" value="female"> Femenino<br>
                        </div> <!--campos-->
                       
                       <div class="col-6 col-sm-5 col-md-5 col-lg-5 col-xl-5 form-group">
                            <label>campo</label>
                            <select name="" class="form-control">
                                <option value="">seleccione</option>
                                <option value="">a</option>
                                <option value="">b</option>
                                <option value="">c</option>
                                <option value="">d</option>
                                <option value="">e</option>
                            </select>
                        </div> <!--campos-->
                        <div class="hidden-xs col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                    </div>   
                    <div class="row">
                        <div class="hidden-xs col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                        <div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10 form-group">
                           <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 colxl-6 col-lg-6">
                                    <button type="button" class="btn btn-suc"><i class="fas fa-save"></i>&nbsp; Guardar</button>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 colxl-6 col-lg-6">
                                    <button type="button" class="btn btn-can"><i class="fas fa-undo"></i>&nbsp; Cancelar</button>
                                </div>
                            </div>
                        </div> <!--campos-->
                        <div class="hidden-xs col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                    </div>                                 
                </form>
            </div>
            <br>
            <br>
            <div align="center">
                <h2 align="center">Formularios grandes</h2>
                <form id="grandes" name="grandes">
                    <div class="row">
                        <div class="hidden-xs col-sm-1 col-md-1 col-lg-1 col-xl-1"></div> 
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-2 form-group">
                            <label>campo</label>
                            <input class="form-control" type="text" name="" value="">
                        </div> <!--campos-->
                        <div class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-3 form-group">
                            <label>campo</label>
                            <input class="form-control" type="number" name="" value="">
                        </div> <!--campos-->
                        <div class="col-3 col-sm-3 col-md-2 col-lg-3 col-xl-2 form-group">
                            <label>campo</label>
                            <input class="form-control" type="date" name="" value="">
                        </div> <!--campos-->
                        <div class="col-3 col-sm-2 col-md-3 col-lg-2 col-xl-3 form-group">
                            <label>campo</label>
                            <select name="" class="form-control">
                                <option value="">seleccione</option>
                                <option value="">a</option>
                                <option value="">b</option>
                                <option value="">c</option>
                                <option value="">d</option>
                                <option value="">e</option>
                            </select>
                        </div> <!--campos-->
                         <div class="hidden-xs col-sm-1 col-md-1 col-lg-1 col-xl-1"></div> 
                    </div>    
                    
                    <div class="row">
                         <div class="hidden-xs col-sm-1 col-md-1 col-lg-1 col-xl-1"></div> 
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-2 form-group">
                            <label>Color</label><br>
                            <input type="checkbox"  name="color" value="blanco">Blanco<br>
                            <input type="checkbox"  name="color" value="negro" checked> Negro<br>
                        </div> <!--campos-->
                        <div class="col-3 col-sm-2 col-md-3 col-lg-2 col-xl-3 form-group">
                            <label>Genero</label><br>
                            <input type="radio"  name="gender" value="male"> Másculino<br>
                            <input type="radio"  name="gender" value="female"> Femenino<br>
                        </div> <!--campos-->
                        <div class="col-3 col-sm-3 col-md-2 col-lg-3 col-xl-2 form-group">
                            <label>campo</label>
                            <input class="form-control" type="date" name="" value="">
                        </div> <!--campos-->
                        <div class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-3 form-group">
                            <label>campo</label>
                            <select name="" class="form-control">
                                <option value="">seleccione</option>
                                <option value="">a</option>
                                <option value="">b</option>
                                <option value="">c</option>
                                <option value="">d</option>
                                <option value="">e</option>
                            </select>
                        </div> <!--campos-->
                         <div class="hidden-xs col-sm-1 col-md-1 col-lg-1 col-xl-1"></div> 
                    </div>
                    <div class="row">
                        <div class="hidden-xs col-sm-1 col-md-1 col-lg-1 col-xl-1"></div> 
                        <div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10 form-group">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 colxl-6 col-lg-6">
                                    <button type="button" class="btn btn-suc"><i class="fas fa-save"></i>&nbsp; Guardar</button>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 colxl-6 col-lg-6">
                                    <button type="button" class="btn btn-can"><i class="fas fa-undo"></i>&nbsp; Cancelar</button>
                                </div>
                            </div>
                        </div> <!--campos-->
                        <div class="hidden-xs col-sm-1 col-md-1 col-lg-1 col-xl-1"></div> 
                    </div>                                   
                </form>
            </div>
        </div>
    </div>

    <!-- jQuery-->
    <script src="../Libs/js/jquery-3.3.1.js"></script>
    <!-- Popper.JS -->
    <script src="../Libs/js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="../Libs/js/bootstrap.min.js"></script>


    <script type="text/javascript" src="../Libs/js/mainfunction.js"> </script>
</body>

</html>