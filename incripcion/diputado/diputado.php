<?php
session_start();
if(isset($_SESSION['usuario'])){


?>
<?php include './clases/Coneccion.php';?>
<?php include'functions.php'; ?>
<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
        <title>Tribunal Supremo Electoral</title>

        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
        <link rel="stylesheet" type="text/css" href="../css/formulario">
         <script type="text/javascript" src="js/jquery-latest.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <style type="text/css">



        </style>

    </head>
    
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
    <script src="./libs/jquery-2.1.0.js"></script>
    <link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
    <script src="./libs/validacion/jquery.validate.min.js"></script>
    <script src="./libs/validacion/messages.js"></script>
    <script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
    </head>
    
    <body>  
    
 <header>


<marquee>  <h1>Votar En Linea Es fácil</h1></marquee>


  </header>
    
    <div class="container">
    <nav role="navigation" class="navbar navbar-inverse">
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <ul class="nav navbar-nav">
          <a href="logout.php" class="navbar-brand">Salir</a>
           <a href="tribunal.php" class="navbar-brand">Ayuda</a>
            <a href="/votacion2/elecciones/elecciones.php"  class="navbar-brand">Apertura De Elecciones</a>
  
        </div> 
           
        


        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/votacion2/partido/partido.php">Partido Politico</a></li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Inscripciones<b class="caret"></b></a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="/votacion2/incripcion/presidente/presidente.php">Presidente</a></li>
                        <li><a href=" /votacion2/incripcion/diputado/diputado.php ">Diputado</a></li>
                        
                <li><a href="  /votacion2/incripcion/alcalde/alcalde.php">Alcalde</a></li>
                
                
                <li><a href=" /votacion2/incripcion/coalicion/coalicion.php ">Coalision</a></li>
                    
                        <li><a class="active"><a href="informacion.html">Informacion</a></li>
                    </ul>
                </li>
                <li><a href="/votacion2/ciudadano/ciudadano.php">Ciudadano</a></li>
                <li><a href="Contacto.html">Contacto</a></li>
            </ul>
            <form role="search" class="navbar-form navbar-right">
               <div class="form-group">
                    <input type="text" placeholder="Search" class="form-control">
               </div>
           </form>
        </div>
    </nav>
</div>

<div id="contenedor">

 <div id= "Bienvenidos/as">
      <figure>
  </figure>
</div>


   <nav id="menu">
 <div id="inicio">
      
  <nav>
    <ul>
       <li><a href="/votacion2/incripcion/diputados/manejadordiputado.php?accion=con">Modificar</a></li>
     
     
    </ul>
   
  </nav>
</div>
  
    <center><h1>Inscripcion De Candidato Diputado</h1></center>
  <body>

 

<?php include 'clases/config.php';
?>

<center><div id="tex">
<form action="diputado.php" method="get">
    <p>Ingre Su Número De DUI:
<input type="text" name="palabra" value="buscar"  />
<input type="submit" name="buscador" value="Buscar" class="btn btn-primary" /></p>
</form></div></center>

<center> <div class="jumbotron">
        <form action="manejadordiputado.php?accion=save" method="post" id="candidato">
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
                    <input type="text" name="dui" class="required digits form-control"value="<?php echo $row['id_dui']; ?>">
 </div>
                </div>
                <div class="row">
            
                <div class="col-xs-2">
                  Nombre
                </div>
                <div class="col-xs-2">
                    <input type="text" name="nombre" class="required  form-control"value="<?php echo $row['nombre']; ?>">
 </div>
                </div>
 <div class="row">
                 <div class="col-xs-2">
                    Apellido
                </div>
                <div class="col-xs-2">
                    <input type="text" name="apellido" class="required form-control"value="<?php echo $row['apellido']; ?>">
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
            </div></br>
            
           <div class="row">
         <div class="col-xs-2">
                    Bandera
                </div>
                <div>
                   <input  type="file" name="bandera" >
                </div>
            </div></br>

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
                <td colspan="2">
                    <input type="submit" name='bot' value='Registrar' class="btn btn-primary"></center>

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