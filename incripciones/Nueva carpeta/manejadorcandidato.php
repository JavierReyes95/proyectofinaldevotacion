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
     
      <li><a href="inscripcion.php">FORMULARIO DE INSCRIPCION</a></li>
     
     
    </ul>
  </nav>
</div>
</div>

<?php
include './clases/coneccion.php';
  include './clases/candidato.php';
  include './clases/controladorcandidato.php';
  
   $candidatoA = new controladorcandidato();
 $accion = $_REQUEST['accion'];
  switch ($accion){
    case 'save':
     if(isset($_REQUEST['bot'])){
      $candidatoA->setId_candidato('NULL');
        $candidatoA-> setDui_candidato($_REQUEST['dui_candidato']);
      $candidatoA->setNombre_candidato($_REQUEST['nombre_candidato']);
      $candidatoA->setApellido_candidato($_REQUEST['apellido_candidato']);
      $candidatoA->setTipo_cantidato($_REQUEST['gender']);
      $candidatoA->setFoto_candidato($_REQUEST['foto_candidato']);

      $candidatoA->setCandidato($_REQUEST['candidato']);
      $candidatoA->setPartido_candidato($_REQUEST['partido']);
      $candidatoA->setDepartamento_candidato($_REQUEST['departamento']);
      $candidatoA->setMunicipio_candidato($_REQUEST['municipio']);
    $candidatoA->setcualicion($_REQUEST['cualicion']);
      $candidatoA->setPais($_REQUEST['pais']);
      $candidatoA->setDepar_diputado($_REQUEST['depar_diputado']);
       
       $datosObj=array(
         $candidatoA->getId_candidato(),
         
          $candidatoA->getDui_candidato(),
         $candidatoA->getNombre_candidato(),
         $candidatoA->getApellido_candidato(),
         $candidatoA->getTipo_candidato(),
         $candidatoA->getFoto_candidato(),
         $candidatoA-> getCandidato(),
         $candidatoA->getPartido_candidato(),
         $candidatoA->getDepartamento_candidato(),
         $candidatoA->getMunicipio_candidato(),
         $candidatoA->getCualicion(),
         $candidatoA->getPais(),
         $candidatoA->getDepar_diputado());
        print $candidatoA->guardarDatos($con,$datosObj);
       print '<a href=\'manejadorcandidato.php?accion=con\'>Verd datos</a>';
 
    }else{
      
      print 'NO SE HA ENVIADO DATOS';
   
    }
    break;
    case'con':
    $sql = 'SELECT * FROM candidato';
    $datoss = consultaD($con,$sql);

     print imprimetabla($datoss,"candidato","table table-bordered table-striped",1);
        break;
        default:
        print 'NO HAY ACCION QUE REALIZA';
        break;
      }
     
  ?>
  </body>
</html>
