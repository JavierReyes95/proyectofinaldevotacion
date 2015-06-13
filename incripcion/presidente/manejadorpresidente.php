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
     
      <li><a href="/votacion2/incripcion/presidente/presidente.php">FORMULARIO DE INSCRIPCION</a></li>
     
     
    </ul>
  </nav>
</div>
</div>

<?php
include './clases/coneccion.php';
  include './clases/presidente.php';
  include './clases/controlarpresidente.php';
  
   $presidenteA = new  controlarpresidente();
 $accion = $_REQUEST['accion'];
  switch ($accion){
    case 'save':
     if(isset($_REQUEST['bot'])){
     $presidenteA->setId_presidente('null');
     $presidenteA->setId_dui($_REQUEST['dui']);
     $presidenteA->setNombre($_REQUEST['nombre']);
     $presidenteA->setApellido($_REQUEST['apellido']);
     $presidenteA->setPartido($_REQUEST['partido']);
     $presidenteA->setBandera($_REQUEST['bandera']);
     $presidenteA->setCandidato($_REQUEST['pais']);
     $datosObj=array(
         $presidenteA->getId_presidente(),
         $presidenteA->getId_dui(),
         $presidenteA->getNombre(),
         $presidenteA->getApellido(),
         $presidenteA->getPartido(),
         $presidenteA->getBandera(),
         $presidenteA-> getCandidato()
      );
      print $presidenteA->guardarDatos($con,$datosObj);
       print '<a href=\'manejadorpresidente.php?accion=con\'>Ver datos</a>';
 
    }else{
      
      print 'NO SE HA ENVIADO DATOS';
   
    }
    break;
    case'con':
    $sql = 'SELECT * FROM presidente';
    $datoss = consultaD($con,$sql);

     print imprimetabla($datoss,"presidente","table table-bordered table-striped",1);
        break;
        default:
        print 'NO HAY ACCION QUE REALIZA';
        break;
      }
     
  ?>
  </body>
</html>
