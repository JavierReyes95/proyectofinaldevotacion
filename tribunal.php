
<?php
session_start();
if(isset($_SESSION['usuario'])){


?>
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
            <ul class="nav navbar-nav">
          <a href="logout.php" class="navbar-brand">Salir</a>
           <a href="tribunal.php" class="navbar-brand">Ayuda</a>
            <a href="/votacion2/elecciones/elecciones.php"  class="navbar-brand">Apertura De Elecciones</a>
  
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
                
                
                <li><a href=" /votacion2/cualicion/cualision/cualision.php ">Coalision</a></li>
                    
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
 <center><img src="img/esa.jpg"></img></center>
  </figure>
</div>
<div id="tex">
 <marquee> <center><h2> Ayuda Del Sistema De Votacion Del Tribunal Supremo Electoral </h2></center></marquee> 

  <a><h2><li> Para El Tribunal.</li></h2></a>


<p>Bienvenidos/as  a este  sistema de inscripción, de  los  candidatos  a elecciones  en este nuevo año electoral,
 a continuacion le  explicaremos  cada funcion de  este  sistema paso a  paso: </p>

 <p>1- Antes  de  iniciar  con las inscripciones correspondientes,  se debe de verificar  que todos los ciudadanos esten inscritos,
    si no están registrados  en la base de datos se debe de hacer la respectiva inscripción.  </p>
    <p>2- Luego de  haber  registrado  los  ciudadanos  debemos de  aperturar las elecciones, en el menú  encontraremos 
     esta opción como aperturas  de  elección,  donde  se elegirá  que tipos  de eleccion se está realizando, como las  siguientes:</p> 
    <a><li> <p> *Presidente </p></a></li>
    <a><li><p>*Diputados</p></a></li>
     <a><li><p> *Alcalde  </p></a></li>
      <p>Donde  al final se pondrá el  año electoral  que se está   realizando. </p>

      <p>3- Se  registraran  los  partidos  políticos  que  estarán en elecciones,  
       <p> Primeramente se tendrá que ingresar  el número de DUI del representante  del partido político a  participar  en las  elecciones.</p>
        <p>ingresara el nombre  del partido político con su respectiva bandera, donde  tendrá también  el derecho de  modificar  cuando se haya equivocado a la hora de registrar la opción la  encontrara  en el menú como  partido político. </p>

<p>4- Se registrara los candidatos en elecciones tanto como:</p>
<a><li><p>  *Presidente</p></a></li>
<a><li><p> *Diputado</p></a></li>
 <a><li><p> *Alcalde</p></a></li>
 <p> y  se registrara  también a los candidatos  que participan en coaliciones, esta  opción  la encontraremos en el menú inscripciones ,
   tendrá  el derecho de modificar  cuando ocurra un error  y podrá eliminar si  el candidato se retira  de la eleccion </p>

    <p>5- Finalmente  se  cerrara  las  inscripcion.</p>

    <p>Esto es todo sobre  la explicación sobre  el funcionamiento de  este  sistema de  votación</p> 

<a><h2><li> Para El Ciudadano.</li></h2></a>
</div>


</body>

</html>
<?php
}else{
  header("location: inicio.php");
}
?>