<?php
session_start();
if(isset($_SESSION['usuario'])){


?>
<?php include './clases/Coneccion.php';?>
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
    <body  >  
    
 
    <div class="container">
    <nav role="navigation" class="navbar navbar-inverse">
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
          <a href="logout.php" class="navbar-brand">Salir</a>
        </div> 
            <a href="tribunal.php" class="navbar-brantd">Ayuda</a>
        </div>
         <a href="/votacion2/elecciones/elecciones.php" class="navbar-brand">Apertura De Elección</a>
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
<center> <h1>Elije El Peridio De Elección</h1></center>

  
    
  <body>

         <center>   <div class="jumbotron">
        <form action="manejadoreleccion.php?accion=save" method="post" id="eleciones">
            <table class="table-bordered">
            <div class="row">
            
                   <div class="col-xs-3">
                    Presidenciales
                </div>
                <div class="col-xs-2">
                    <input type="CHECKBOX" name="Presidenciales" value="Presidencial" class="required digits form-control" >
                </div>
                 </div>
              
               <div class="row">
                  <div class="col-xs-3">
                    Municipales
                </div>
                <div class="col-xs-2">
                    <input type="CHECKBOX" name="municipales" value="Municipal" class="required digits form-control" >
                </div>
                 </div>

                      <div class="row">
                 <div class="col-xs-3">
                    Asamblea
                </div>
                <div class="col-xs-2">
                    <input type="CHECKBOX" name="asamblea"  value="Asamblea" class="required digits form-control" >
                </div>
                 </div>

                  <div class="row">
                 <div class="col-xs-3">
                    Año
                </div>
                <div class="col-xs-2">
                    <input type="tex" name="año" class="required digits form-control" required digits>
                </div>
                 </div>

                 <div class="row">
       
                <td colspan="2">
                   <input type="submit" name='bot' value='Ingresar' class="btn btn-primary"></center>

                </div>
            </div>
        </table>
        </form>
    </div>


  </body>

  </html>
  <?php
}else{
  header("location: /votacion2/inicio.php");
}
?>