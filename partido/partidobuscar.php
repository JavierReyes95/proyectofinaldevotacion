
<?php include './clases/Coneccion.php';?>
<pre>
<?php  
$sql ="SELECT * FROM Partido WHERE id_partido ='".$_REQUEST['id_partido']."';";
        $datos= consultaD($con, $sql,3)
       ?>
     </pre>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  
  <title>EL SALVADOR EN ELECCIONES</title>
  <link rel="stylesheet" href="css/estilo1.css">
  <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilo3.css" />


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


  <h1>UNA NUEVA FORMA PARA EJERSER TU VOTO</h1>

  </header>
  
   <nav id="menu">
 <div id="inicio">
      
  <nav>
    <ul>
      <li><a href="/votacion2/tribunal.php">INSCRIPCIONES</a></li>
      <li><a href="manejadorpartido.php?accion=con">MODIFICAR</a></li>
     
     
    </ul>
  </nav>
</div>
</div>


    <div class="jumbotron">
       <form action="modificarpartido.php"  method="post" id="partido">
            
       

  <div class="row">
            
                <div class="col-xs-2">
                  Dui
</div>
                <div class="col-xs-2">
                  <input type="hidden" name="id_partido" 
                    value='<?php print $datos[0][0]?>'>
        <input type="text" name="id_dui" class="required digits form-control"value='<?php print $datos[0][1]?>'>
 </div>
                </div>
                <div class="row">
            
                <div class="col-xs-2">
                  Rezponsable
                </div>
                <div class="col-xs-2">
                    <input type="text" name="responsable" class="required  form-control"value='<?php print $datos[0][2]?>'>
 </div>
                </div>
 
 
                
            <div class="row">
              <div class="col-xs-2">
                  Partido
                </div>
                <div class="col-xs-2">
                    <input type="text" name="partido" class="required form-control" required value='<?php print $datos[0][4]?>'>
                </div>
                </div>
                   
                    <div class="row">
            <div class="col-xs-2">
                    Bandera
                </div>
                <div>
                    <input  type="file" name="bandera" required value='<?php print $datos[0][3]?>'>  
                </div>
            </div>
            <div class="row">
                <td colspan="2">
                    <input type="submit" name='bot' value='REGISTAR' class="btn btn-primary">
                </div>
            </div>
        </table>
        </form>

    



</body>

</html>