
<?php
session_start();
if(isset($_SESSION['usuario'])){


?>
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


  <h1>TE ENCUENTRAS EN EL FORMULARIO DE  INSCRIPCIONES PARA ALCALDES </h1>

  </header>
  
   <nav id="menu">
 <div id="inicio">
      
  <nav>
    <ul>
     
     
        <li><a href="/votacion2/incripcion/alcalde/manejadoralcalde.php?accion=con">MODIFICAR</a></li>
     
     
    </ul>
  </nav>
</div>
</div>

<div id="header">
      <ul class="nav">
        <li><a href="/votacion2/tribunal.php">Inicio </a></li>
          <li><a href="/votacion2/elecciones/elecciones.php">Apertura de elecciones  </a></li>
         <li><a href="/votacion2/partido/partido.php">Partido politico  </a></li>
        <li><a href="">Inscripciones</a>
          <ul>
            <li><a href="/votacion2/incripcion/alcalde/alcalde.php">Alcade</a></li>
            <li><a href="/votacion2/incripcion/presidente/presidente.php">Presidente</a></li>
            <li><a href="/votacion2/incripcion/diputados/diputado.php">Diputado</a></li>
            <li><a href="/votacion2/incripcion/cualicion/cualicion.php">Coaliciones</a>
            </li>
          </ul>
        </li>
        <li><a href="/votacion2/ciudadano/ciudadano.php">Ciudadano</a></li>
          </ul>
    </div>

<?php include 'clases/config.php';
?>
<div id="tex">
<form action="alcalde.php" method="get">
    <p>Ingrese por favor un numero de DUI:
<input type="text" name="palabra" value="buscar"  />
<input type="submit" name="buscador" value="Buscar" class="btn btn-primary" /></p>
</form></div>

 <div class="jumbotron">
        <form action="manejadoralcalde.php?accion=save" method="post"  id="alcalde">
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
                    <input type="text" name="dui" class="required digits form-control"value="<?php echo $row['id_dui']; ?>"required digits>
 </div>
                </div>
                <div class="row">
            
                <div class="col-xs-2">
                  Nombre
                </div>
                <div class="col-xs-2">
                    <input type="text" name="nombre" class="required  form-control"value="<?php echo $row['nombre']; ?>"required>
 </div>
                </div>
 <div class="row">
                 <div class="col-xs-2">
                    Apellido
                </div>
                <div class="col-xs-2">
                    <input type="text" name="apellido" class="required form-control"value="<?php echo $row['apellido']; ?>" required >
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
           <br> <div class="col-xs-2">
                    Partido politico
                 </div>
                <div class="col-xs-2">
                   <select name='partido' class="required form-control">
                    <option value="" required ></option>
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
            </div></br>
            
           <div class="row">
         <div class="col-xs-2">
                    Bandera
                </div>
                <div>
                   <input  type="file" name="bandera" required >
                </div>
            </div></br>
              <div class="row">
            <div class="col-xs-2">
                  Departamento
                </div>
                <div class="col-xs-2">
                     <select  id="depar" name="departamento" class="required form-control" required>
                    <option value=""></option>
                            
            <?php __ListarEstados(); ?>
         </select>
    
                         
                        </div>
            </div>
            <div class="row">

            <div class="row">
            <div class="col-xs-2">
                    Municipio
                </div>
                <div class="col-xs-2">
                 <select name = "municipio" id="muni" class="required form-control"  >
                   <option value="seleccion"> [selecione]</option>
                   
         </select>
                        </div>
            </div>
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
<?php
}else{
  header("location: /votacion2/inicio.php");
}
?>