<html>
<head>
<meta charset="utf-8">
<meta http-aquiv="X-UA-Complatible" content="IE=edge">
<title>borrar registro</title>
<link rel="stylesheet"  href="./libs/bootstrap/cc/bootstrap.css">
<script src="./libs/jquery-2.1.0.js"></script>
<link rel="stylesheet"  href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
<script src="./libs/validacion/jquery.validate.min.js"></script>
<script src="./libs/validacion/messages.js"></script>
<script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
</head>

<body>
<?php


  include './clases/coneccion.php';
  include './clases/coalicion.php';
  include './clases/controladorcoalicion.php';
  
  $sql ="DELETE FROM coalicion WHERE id_coalicion=".$_REQUEST['id_coalicion'].";";
    print "<div id='dialogo' title='Exito' style='display: none;'>";
    print '<p>Mensaje: ';
    print consultaA($con, $sql);
    print '<span class="badge glyphicon glyphicon-ok"></span></p>';
    print '<a href=\'manejadorcoalicion.php?accion=con\'>Ver datos</a>';
    print "</div>";
?>
<script>
$(document).ready(function(){
   $("#dialogo").dialog();
});
</script>
      </body>
</html>