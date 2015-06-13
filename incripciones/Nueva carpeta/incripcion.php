
<?php include './clases/Coneccion.php';?>
<?php include'functions.php'; ?>
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
     
     
    </ul>
  </nav>
</div>
</div>
<?php include 'clases/config.php';
?>
<form action="incripcion.php" method="get">
    <p>Ingre por fabor un numero de DUI:
<input type="text" name="palabra" value="buscar"  />
<input type="submit" name="buscador" value="Buscar" class="btn btn-primary" /></p>
</form>

 <div class="jumbotron">
        <form action="manejadorcandidato.php?accion=save" method="post" id="candidato">
            <table class="table-bordered">
            
<?php
if (isset($_GET['buscador']))
{

$buscar = $_GET['palabra'];


if (empty($buscar))
{
echo "No se ha ingresado ninguna palabra";
}
else
{

$sql = "SELECT * FROM ciudadano WHERE id_dui LIKE '%$buscar%'";
$result = mysql_query($sql,$connect);

$total = mysql_num_rows($result);

if ($row = mysql_fetch_array($result)) {


do {
?>
  <div class="row">
            
                <div class="col-xs-2">
                  Dui
                </div>
                <div class="col-xs-2">
                    <input type="text" name="dui_candidato" class="required digits form-control"value="<?php echo $row['id_dui']; ?>">
 </div>
                </div>
                <div class="row">
            
                <div class="col-xs-2">
                  Nombre
                </div>
                <div class="col-xs-2">
                    <input type="text" name="nombre_candidato" class="required  form-control"value="<?php echo $row['nombre']; ?>">
 </div>
                </div>
 <div class="row">
                 <div class="col-xs-2">
                    Apellido
                </div>
                <div class="col-xs-2">
                    <input type="text" name="apellido_candidato" class="required form-control"value="<?php echo $row['apellido']; ?>">
                </div>
            </div>
               
<?php
}
while ($row = mysql_fetch_array($result));
}
else
{
echo "Este numero de DUI no existente: $buscar";
}
}
}
?>
             <div class="row">
            <div class="col-xs-2">
                       
                </div>
                <div class="col-xs-2">
                <input type="radio" name="gender"
<?php if (isset($gender) && $gender=="partidario") echo "checked";?>
value="partidario">  Partidario  
                        </div>
            </div>

             <div class="row">
            <div class="col-xs-2">
                      
                </div>
                <div class="col-xs-2">
                   <input type="radio" name="gender"
               <?php if (isset($gender) && $gender=="independiente") echo "checked";?>
                        value="independiente">Independiente 

                        </div>
            </div>



            
            <div class="row">
            <div class="col-xs-2">
                    Candidato
                </div>
                <div class="col-xs-2">
                   <select name='candidato' class="required form-control">
                    <option value=""></option>
                        <option value="precidencial">  PRESIDENTE</option>
                        <option value="acalde">ALCALDE</option>
                        <option value="diputado">DIPUTADO</option>
                         </select >
                        </div>
            </div>
           
        <br>  <div class="col-xs-2">
                    Foto
                </div>
                <div>
                   <input  type="file" name="foto_candidato" >
                </div>
            </div></br>

            <div class="row">
            <div class="col-xs-2">
                    Partido politico
                </div>
                <div class="col-xs-2">
                   <select name='partido' class="required form-control">
                    <option value=""></option>
                        <?php 
                
                            $sql = "SELECT id_partido, partido FROM partido;";
                            $datos = consultaD($con, $sql);
                            foreach ($datos as $value) {
                                print "<option value='";
                                print $value['id_partido'];
                                print "'>";
                                print $value['partido'];
                                print "</option>";
                            }                
                        ?>
                         </select >
                        </div>
            </div>
            <div class="row">
                 <div class="col-xs-2">
                  Departamento
                </div>
                <div class="col-xs-2">
                     <select  name = "departamento" id="depar" class="required form-control" >
                     <option></option>
            <?php __ListarEstados(); ?>
         </select>
    
                         
                        </div>
            </div>
            <div class="row">
            <div class="col-xs-2">
                    Municipio
                </div>
                <div class="col-xs-2">
                 <select name = "municipio" id="muni" class="required form-control" >
                   <option value="seleccion"> [selecione]</option>
                   
         </select>
                        </div>
            </div>
          <h4>ELIJA  ESTA OBCION CUANDO SEA PRESIDENTE</h4>
                 <div class="row">
                 <div class="col-xs-2">
                  Presidencia
                </div>
                <div class="col-xs-2">
                     <select id="departamento" name="pais"class="required form-control" >
                     <option value=""></option>
                        <option value="Todo el pais"> TODO EL PAIS </option>
            
         </select>
    
                         
                        </div>
            </div>

                        </div>
            </div>

                 <h4>ELIJA DE PARATAMENTO CUANDO SEA CANDIDATOS PARA DIPUTADOS</h4>
                 <div class="row">
                 <div class="col-xs-2">
                  Departamento
                </div>
                <div class="col-xs-2">
                     <select id="departamento" name="depar_diputado"class="required form-control" >
                     <option></option>
            <?php __ListarEstados(); ?>
         </select>
    
                         
                        </div>
            </div>

                 <h4>ELIJE CUANDO SEA COALICION</h4>

             <div class="row">
            <div class="col-xs-2">
                       
                </div>
                <div class="col-xs-2">
                <input type="radio" name="gender"
<?php if (isset($gender) && $gender=="partidario") echo "checked";?>
value="Cualicion">  Cualicion
       
                </div>
                       
                </div>
        
                <div class="row">
            <div class="col-xs-2">
                    Partido en cualicion 
                </div>
                <div class="col-xs-2">
                   <select  name= "cualicion"class="required form-control">
                    <option value="">seleccione un partido</option>
                        <?php 
                
                            $sql = "SELECT id_partido, partido FROM partido;";
                            $datos = consultaD($con, $sql);
                            foreach ($datos as $value) {
                                print "<option value='";
                                print $value['id_partido'];
                                print "'>";
                                print $value['partido'];
                                print "</option>";
                            }                
                        ?>
                         </select >
                        </div>
            </div>

            

                 <br> <div class="row">
             <div class="col-xs-2">
                    Foto
                </div>
                <div>
                    <input  type="file" name="foto" >
                </div>
            </div></br>
            <div class="row">
       
                <td colspan="2">
                    <input type="submit" name='bot' value='REGISTAR' class="btn btn-primary">

                </div>
            </div>
        </table>
        </form>
    </div>

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
</body>

</html>