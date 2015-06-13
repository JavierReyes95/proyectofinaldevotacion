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
     
      <li><a href="/votacion2/incripcion/alcalde/alcalde.php">FORMULARIO DE INSCRIPCION</a></li>
     
     
    </ul>
  </nav>
</div>
</div>

<?php
include './clases/coneccion.php';
  include './clases/alcalde.php';
  include './clases/controladoralcalde.php.';
  
   $alcaldeA = new controladoralcalde();
 $accion = $_REQUEST['accion'];
  switch ($accion){
    case 'save':
     if(isset($_REQUEST['bot'])){
     $alcaldeA->setId_alcalde('null');
     $alcaldeA->setId_dui($_REQUEST['dui']);
     $alcaldeA->setNombre($_REQUEST['nombre']);
     $alcaldeA->setApellido($_REQUEST['apellido']);
      $alcaldeA->setPartido($_REQUEST['partido']);
      $alcaldeA->setBandera($_REQUEST['bandera']);
      $alcaldeA->setDepartamento($_REQUEST['departamento']);
      $alcaldeA->setMunicipio($_REQUEST['municipio']);
     $datosObj=array(
        $alcaldeA ->getId_alcalde(),
        $alcaldeA-> getId_dui(),
        $alcaldeA-> getNombre(),
        $alcaldeA->getApellido(),
        $alcaldeA->getPartido(),
        $alcaldeA-> getBandera(),
        $alcaldeA->getDepartamento(),
        $alcaldeA-> getMunicipio());
      print $alcaldeA->guardarDatos($con,$datosObj);
       print '<a href=\'manejadoralcalde.php?accion=con\'>Ver datos</a>';
 
    }else{
      
      print 'NO SE HA ENVIADO DATOS';
   
    }
    break;
    case'con':
    $sql = 'SELECT * FROM alcalde';
    $datoss = consultaD($con,$sql);

     print imprimetabla($datoss,"alcalde","table table-bordered table-striped",1);
        break;
        default:
        print 'NO HAY ACCION QUE REALIZA';
        break;
      }
     
  ?>
  </body>
</html>
