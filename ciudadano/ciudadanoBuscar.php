
<?php include './clases/Coneccion.php';?>
<?php include'functions.php'; ?>

<?php  
$sql ="SELECT * FROM ciudadano WHERE id_dui ='".$_REQUEST['id_dui']."';";
        $datos= consultaD($con, $sql,3)
       ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta meta="description" content="PROTOTIVO DE VOTACIONES" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>EL SALVADOR EN ELECCIONES</title>
  <link rel="stylesheet" href="css/estilo1.css">
  <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilo3.css" />
  


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
  
 <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
    <script src="./libs/jquery-2.1.0.js"></script>
    <script src="./libs/jquery-2.1.0.js"></script>
    <link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
    <script src="./libs/validacion/jquery.validate.min.js"></script>
    <script src="./libs/validacion/messages.js"></script>
    <script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
  
</head>
<body>
 <header>


  <h1>UNA NUEVA FORMA PARA EJERSER TU VOTO</h1>

  </header>
  
   <nav id="menu">
 <div id="inicio">
      
  <nav>
    <ul>
     
 
       <li><a href="/votacion2/tribunal.php">INCRIPCION</a></li>
        <li><a href="manejadorciudadano.php?accion=con">MODIFICAR</a></li>
     
     
    </ul>
  </nav>
</div>
</div>


 <div class="jumbotron">
        <form action="modificarciudadano.php" method="post" id="ciudadano">
            <table class="table-bordered">
            <div class="row">
            
                   <div class="col-xs-3">
                    Dui
                </div>
                <div class="col-xs-3">
                  
                    <input type="text" name="dui" class="required digits form-control" required digits value='<?php print $datos[0][0]?>'>

                </div>
                 </div>

                    <div class="row">
                <div class="col-xs-3">
                  Nombre
                </div>
                <div class="col-xs-3">
                    <input type="text" name="nombre" class="required  form-control" required value='<?php print $datos[0][1]?>'>

                </div>
                </div>
                    <div class="row">
                 <div class="col-xs-3">
                    Apellido
                </div>
                <div class="col-xs-3">
                    <input type="text" name="apellido" class="required  form-control" required value='<?php print $datos[0][2]?>'>
                </div>
            </div>
                 <div class="row">
            <div class="col-xs-3">
                      Genero
                </div>
                <div class="col-xs-3">
                    <select name='genero' class="required form-control" required >
                        <option value='<?php print $datos[0][3]?>'></option>
                         <option value="M">MACULINO</option>
                        <option value="F">FEMENINO</option>
                          </select >
                        </div>
            </div>
        
               
            <div class="row">
            <div class="col-xs-3">
                    Facha nacimiento
                </div>
                 <div class="col-xs-3">
                    <div class="input-group">                    
                    <input type="text" name="fecha_nacimiento" id="fechac" class="required form-control" value='<?php print $datos[0][4]?>'>
                    <span id="fechac" class=" input-group-addon glyphicon glyphicon-calendar"></span>
                </div>
                </div>
            </div>

                        </div>
            </div>
            <div class="row">
            <div class="col-xs-3">
                    Departamento
                </div>
                <div class="col-xs-3">
                     <select  id="departamento" name= "id_departamento" class="required form-control" required >
                     <option value='<?php print $datos[0][5]?>'>
                             <?php 
                        $sql2="select nombre from departamento where codigo='".$datos[0][5]."'";
                        $da = consultaD($con,$sql2,3);                       
                        print $da[0][0];
                        ?>
                        </option>
                        <?php __ListarEstados(); ?>
                        ?>
                         </select >
    
                         
                        </div>
            </div>
            <div class="row">
            <div class="col-xs-3">
                    Municipio
                </div>
                <div class="col-xs-3">
                 <select  id="municipio" name ="id_municipio" class="required form-control" required >
                  <option value='<?php print $datos[0][6]?>'>
                             <?php  
                        $sql2="select nombre from municipio where codigo ='".$datos[0][6]."'";
                        $da = consultaD($con,$sql2,3);                       
                        @print $da[0][0];
                        ?>
                      </option>
         
                         </select >
                        </div>
            </div>
          <div class="row">
            <div class="col-xs-3">
                    Fcha de expedicion
                </div>
                 <div class="col-xs-3">
                    <div class="input-group">                    
                    <input type="text" name="fecha_expedicion" id="axpe" class="required form-control"  value='<?php print $datos[0][7]?>'>
                    <span id="axpe" class=" input-group-addon glyphicon glyphicon-calendar"></span>
                </div>
                </div>
            </div>

                        </div>
            </div>

          <div class="row">
            <div class="col-xs-3">
                    Departamento
                </div>
                <div class="col-xs-3">
                     <select  id="depar" name="depar_expedicion" class="required form-control" required >
                     <option value='<?php print $datos[0][8]?>'>
                             <?php 
                              
                        $sql2="select nombre from departamento where codigo='".$datos[0][8]."'";
                        $da = consultaD($con,$sql2,3);                       
                        print $da[0][0];
                        ?>
                        </option>
                        <?php __ListarEstados(); ?>
                        ?>
                         </select >
    
                         </select >
    
                        </div>
            </div>
            <div class="row">
            <div class="col-xs-3">
                    Municipio
                </div>
                <div class="col-xs-3">
                 <select   id="muni"  name="mun_expedicion" class="required form-control" >
                  <option value=value='<?php print $datos[0][9]?>'>
                 <?php  
                        $sql2="select nombre from municipio where codigo ='".$datos[0][9]."'";
                        $da = consultaD($con,$sql2,3);                       
                        @print $da[0][0];
                        ?>
                      </option>
         
                         </select >
        
                        </div>
            </div>
                 <div class="row">
            <div class="col-xs-3">
                    Fecha de expiracion
                </div>
                 <div class="col-xs-3">
                    <div class="input-group">                    
                    <input type="text" name="fecha_expiracion" id="expedicion" class="required form-control" required value='<?php print $datos[0][10]?>'>
                    <span id="expedicion" class=" input-group-addon glyphicon glyphicon-calendar"></span>
                </div>
                </div>
            </div>

                        </div>
            </div>
         <div class="row">
                 <div class="col-xs-3">
                    Direccion
                </div>
                <div class="col-xs-3">
                    <input type="text" name="direccion" class="required  form-control"  value='<?php print $datos[0][11]?>'>
                </div>
            </div>
           <div class="row">
            <div class="col-xs-3">
                    Departamento
                </div>
                <div class="col-xs-3">
                     <select   id="departamen"  name= "depar_direccion" class="required form-control" >
                      <option value=value='<?php print $datos[0][12]?>'>

                                           <?php 
                              
                        $sql2="select nombre from departamento where codigo='".$datos[0][12]."'";
                        $da = consultaD($con,$sql2,3);                       
                        print $da[0][0];
                        ?>
                        </option>
                        <?php __ListarEstados(); ?>
                        ?>
                         </select >
    
                        
    
                         
                        </div>
            </div>
            <div class="row">
            <div class="col-xs-3">
                    Municipio
                </div>
                <div class="col-xs-3">
                 <select   id="munici" name ="mun_direccion" class="required form-control">
         <option value=value='<?php print $datos[0][13]?>'>
              <?php  
                        $sql2="select nombre from municipio where codigo ='".$datos[0][13]."'";
                        $da = consultaD($con,$sql2,3);                       
                        @print $da[0][0];
                        ?>
                      </option>
         
                         </select >
                        </div>
            </div>
     </select>
                       
            <div class="row">
       
                <td colspan="2">
                    <input type="submit" name='bot' value='Enviar' class="btn btn-primary">
                </div>
            </div>
        </table>
        </form>
    </div>
    
     <script type="text/javascript">
        $().ready(function () {
            $("#ciudadano").validate({});
        });
        $(document).ready(
            function(){
                $("#fechac").datepicker(    
                    {
                        changeMonth: true,
                        changeYear: true,
                        dateFormat: 'yy-mm-dd',
                        showAnim:'slide'
                    }
                    
                 );
            }
           
       )
    </script>


         <script type="text/javascript">
        $().ready(function () {
            $("#ciudadano").validate({});
        });
        $(document).ready(
            function(){
                $("#expedicion").datepicker(    
                    {
                        changeMonth: true,
                        changeYear: true,
                        dateFormat: 'yy-mm-dd',
                        showAnim:'slide'
                    }
                    
                 );
            }
           
       )
    </script>

         <script type="text/javascript">
        $().ready(function () {
            $("#ciudadano").validate({});
        });
        $(document).ready(
            function(){
                $("#axpe").datepicker(    
                    {
                        changeMonth: true,
                        changeYear: true,
                        dateFormat: 'yy-mm-dd',
                        showAnim:'slide'
                    }
                    
                 );
            }
           
       )
    </script>


<script type="text/javascript">
$( "#departamento" ).change(function() {
    var municipio = $("select#departamento option:selected").val();
    var datastring = 'municipio='+municipio;

        $.ajax({

            type: 'POST',
            url: 'municipios.php',
            data: datastring,
               success: function(data){
                 $('#municipio').html('');
                 $('#municipio').html(data);
               }
        });
});


 </script>

   </script>
<script type="text/javascript">
$( "#depar" ).change(function() {
    var municipio = $("select#depar option:selected").val();
    var datastring = 'municipio='+municipio;

        $.ajax({

            type: 'POST',
            url: 'municipios.php',
            data: datastring,
               success: function(data){
                 $('#muni').html('');
                 $('#muni').html(data);
               }
        });
});


 </script>

<script type="text/javascript">
$( "#departamen" ).change(function() {
    var municipio = $("select#departamen option:selected").val();
    var datastring = 'municipio='+municipio;

        $.ajax({

            type: 'POST',
            url: 'municipios.php',
            data: datastring,
               success: function(data){
                 $('#munici').html('');
                 $('#munici').html(data);
               }
        });
});


 </script>

   </script>
</body>

</html>