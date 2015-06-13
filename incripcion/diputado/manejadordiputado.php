<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" >
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
    <link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
    <script src="./libs/validacion/jquery.validate.min.js"></script>
    <script src="./libs/validacion/messages.js"></script>
    <script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
    </head>
<body>

  <h1></h1>

  </header>
  
   <nav id="menu">
 <div id="inicio">
      
  <nav>
    <ul>
     
      <li><a href="/votacion2/incripcion/diputados/diputado.php">FORMULARIO DE INSCRIPCION</a></li>
     
     
    </ul>
  </nav>
</div>
</div>

<?php
include './clases/coneccion.php';
  include './clases/diputado.php';
  include './clases/controladordiputado.php';
  
   $diputadoA = new  controladordiputado();
 $accion = $_REQUEST['accion'];
  switch ($accion){
    case 'save':
     if(isset($_REQUEST['bot'])){
     $diputadoA->setId_diputado('null');
     $diputadoA->setId_dui($_REQUEST['dui']);
     $diputadoA->setNombre($_REQUEST['nombre']);
      $diputadoA->setApellido($_REQUEST['apellido']);
      $diputadoA->setPartido($_REQUEST['partido']);
      $diputadoA->setBandera($_REQUEST['bandera']);
      $diputadoA->setDepartamento($_REQUEST['departamento']);
     $datosObj=array(
        $diputadoA -> getId_diputado(),
        $diputadoA-> getId_dui(),
        $diputadoA-> getNombre(),
        $diputadoA->getApellido(),
        $diputadoA->getPartido(),
        $diputadoA-> getBandera(),
        $diputadoA->getDepartamento());
      print $diputadoA->guadarDatos($con,$datosObj);
       print '<a href=\'manejadordiputado.php?accion=con\'>Ver datos</a>';
 
    }else{
      
      print 'NO SE HA ENVIADO DATOS';
   
    }
    break;
    case'con':
    $sql = 'SELECT * FROM diputado';
    $datoss = consultaD($con,$sql);

     print imprimetabla($datoss,"diputado","table table-bordered table-striped",1);
        break;
        default:
        print 'NO HAY ACCION QUE REALIZA';
        break;
      }
     
  ?>
  </body>
</html>
