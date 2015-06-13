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
      
      <li><a href="Partido.php">FORMULARIO DE INSCRIPCION</a></li>
     
     
    </ul>
  </nav>
</div>
</div>
  <?php
  include './clases/coneccion.php';
  include './clases/partido.php';
  include './clases/controladorpartido.php';

  $partidoA = new controladorpartido();
 
  $accion = $_REQUEST['accion'];
  switch ($accion){
    case 'save':

    if(isset($_REQUEST['bot'])){

     
$rutaEnServidor="imagenes";
@$rutaTemporal=$_FILES['bandera']['tmp_name'];
@$nombreImagen=$_FILES['bandera']['name'];
$rutaEnServidor=$rutaEnServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal,$rutaEnServidor.'/'.$nombreImagen);


      $partidoA->setId_partido('null');
      $partidoA->setId_dui($_REQUEST['id_dui']);
      $partidoA-> setResponsable($_REQUEST['responsable']);
      $partidoA->setBandera($rutaEnServidor);
      $partidoA->setPartido($_REQUEST['partido']);

      $datosObj=array(  
           $partidoA->getId_partido(),
            $partidoA->getId_dui(),
            $partidoA->getResponsable(),
           $partidoA->getBandera(),
            $partidoA->getPartido()
        );
      print $partidoA->guadarDatos($con,$datosObj);
      print '<a href=\'manejadorpartido.php?accion=con\'>Ver datos</a>';
    }else{
      print 'NO SE HA ENVIADO DATOS';
    }
    break;
    case'con':
    $sql = 'SELECT * FROM partido';
    $datoss = consultaD($con,$sql);

     print imprimetabla($datoss,"partido","table table-bordered table-striped",1);
        break;
        default:
        print 'NO HAY ACCION QUE REALIZA';
        break;
      }
     
  ?>
  </body>
</html>
