
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
     
      <li><a href="ciudadano.php">FORMULARIO DE INSCRIPCION</a></li>
     
    </ul>
  </nav>
</div>
</div>
<?php
  include './clases/coneccion.php';
 include './clases/ciudadano.php';
  include './clases/ciudadanocontrolador.php';

 

$ciudadanoA = new ciudadanocontrolador();
     $accion = $_REQUEST['accion'];
  switch ($accion) {
        case 'save':
    if(isset($_REQUEST['bot'])){
     $ciudadanoA->setId_dui($_REQUEST['dui']);
     $ciudadanoA->setNombre($_REQUEST['nombre']);
    $ciudadanoA->setApellido($_REQUEST['apellido']);
 $ciudadanoA->setGenero($_REQUEST['genero']);
   $ciudadanoA->setFecha_nacimiento($_REQUEST['fecha_nacimiento']);
   $ciudadanoA->setId_departamento($_REQUEST['id_departamento']);
  $ciudadanoA->setId_municipio($_REQUEST['id_municipio']);
 $ciudadanoA->setFecha_expedicion($_REQUEST['fecha_expedicion']);
 $ciudadanoA->setDepar_expedicion($_REQUEST['depar_expedicion']);
 $ciudadanoA->setMun_expedicion($_REQUEST['mun_expedicion']);
 $ciudadanoA->setFecha_expiracion($_REQUEST['fecha_expiracion']);
 $ciudadanoA->setDireccion($_REQUEST['direccion']);
 $ciudadanoA->setDepar_direccion($_REQUEST['depar_direccion']);
 $ciudadanoA->setMun_direccion($_REQUEST['mun_direccion']);
         $datosObj=array(
           $ciudadanoA->getId_dui(),
           $ciudadanoA->getNombre(),
           $ciudadanoA->getApellido(),
           $ciudadanoA->getGenero(),
          $ciudadanoA->getFecha_nacimiento(),
          $ciudadanoA->getId_departamento(),
          $ciudadanoA->getId_municipio(),
          $ciudadanoA->getFecha_expedicion(),
          $ciudadanoA->getDepar_expedicion(),
          $ciudadanoA->getMun_expedicion(),
          $ciudadanoA->getFecha_expiracion(),
          $ciudadanoA->getDireccion(),
          $ciudadanoA->getDepar_direccion(),
          $ciudadanoA->getMun_direccion());
           print $ciudadanoA ->guardarDatos($con,$datosObj);
           print '<a href=\'manejadorciudadano.php?accion=con\'>Ver datos</a>';
       }else{
           print 'No se ha enviado datos ';
       }
        break;
    case 'con':        
        $sql = 'SELECT * FROM ciudadano';
        $datoss =  consultaD($con, $sql);

        print imprimetabla($datoss,"ciudadano","table table-bordered table-striped",1);
        break;
        default:
        print 'No hay Accion que realizar';
        break;
      }
      


 ?>  
     </body>
</html>

 

    
