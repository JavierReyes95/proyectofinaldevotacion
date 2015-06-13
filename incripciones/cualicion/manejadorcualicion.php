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
     
      <li><a href="/votacion2/incripcion/cualicion/cualicion.php">FORMULARIO DE INSCRIPCION</a></li>
     
     
    </ul>
  </nav>
</div>
</div>

<?php
include './clases/coneccion.php';
  include './clases/cualicion.php';
  include './clases/controladorcualicion.php';
  
   $cualicionA= new controladorcualicion();
 $accion = $_REQUEST['accion'];
  switch ($accion){
    case 'save':
     if(isset($_REQUEST['bot'])){
     $cualicionA-> setId_cualicon('null');
     $cualicionA->setDui($_REQUEST['dui']);
     $cualicionA-> setNombre($_REQUEST['nombre']);
      $cualicionA->setApellido($_REQUEST['apellido']);
      $cualicionA->setTipo_candidato($_REQUEST['candidato']);
      $cualicionA->setPartido($_REQUEST['partido']);
       $cualicionA->setPartido_dos($_REQUEST['partido_dos']);
      $cualicionA->setBandera($_REQUEST['bandera']);
      $cualicionA->setDepartamento($_REQUEST['departamento']);
       @$cualicionA->setMunicipio($_REQUEST['municipio']);
        @$cualicionA->setPartido_tres($_REQUEST['partido_tres']);
      @$cualicionA->setPartido_cuatro($_REQUEST['partido_cuatro']);
       @$cualicionA->setCoalicion($_REQUEST['coalicion']);
     $datosObj=array(
        $cualicionA -> getId_cualicion(),
        $cualicionA->  getDui(),
        $cualicionA-> getNombre(),
        $cualicionA->getApellido(),
        $cualicionA->getTipo_candidato(),
        $cualicionA->  getPartido(),
        $cualicionA->  getPartido_dos(),
        $cualicionA-> getBandera(),
        $cualicionA->getDepartamento(),
        $cualicionA->getMunicipio(),
        $cualicionA->getPartido_tres(),
        $cualicionA->getPartido_cuatro(),
        $cualicionA-> getCoalicion());
      print $cualicionA->guadarDatos($con,$datosObj);
       print '<a href=\'manejadorcualicion.php?accion=con\'>Ver datos</a>';
 
    }else{
      
      print 'NO SE HA ENVIADO DATOS';
   
    }
    break;
    case'con':
    $sql = 'SELECT * FROM cualicion';
    $datoss = consultaD($con,$sql);

     print imprimetabla($datoss,"cualicion","table table-bordered table-striped",1);
        break;
        default:
        print 'NO HAY ACCION QUE REALIZA';
        break;
      }
     
  ?>
  </body>
</html>
