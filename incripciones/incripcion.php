<?php
session_start();
if(isset($_SESSION['usuario'])){


?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta meta="description" content="PROTOTIVO DE VOTACIONES" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>EL SALVADOR EN ELECCIONES</title>
  <link rel="stylesheet" href="css/estilo1.css">
  <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos2.css" />
</head>
<body>
 <header>


  <h1>UNA NUEVA FORMA PARA EJERSER TU VOTO</h1>

  </header>
  
   <nav id="menu">
 <div id="inicio">
      
  <nav>
    <ul>
      <li><a href="/votacion2/tribunal.php">INICIO </a></li>
      <li><a href=""></a></li>
     
     
    </ul>
  </nav>
</div>
</div>

<div id="tex">
  <nav id="boton">
 <div id="boton">
      <nav>
       <ul>
      <p> <li><a href="alcalde/alcalde.php">ALCALDE  </a></li> </p>
   <p> <li><a href="presidente/presidente.php">PRESIDENTE</a></li> </p>
   <p> <li><a href="diputados/diputado.php">DIPUTADO </a></li> </p>
   <p> <li><a href="cualicion/cualicion.php">CUALICIONES </a></li> </p>
  
 
     
     

     

         </nav>     
   </DIV>
</div>
</body>

</html>
 <?php
}else{
  header("location: /votacion2/inicio.php");
}
?>