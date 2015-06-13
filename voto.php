

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
    <body> 
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
  
  <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
    <script src="./libs/jquery-2.1.0.js"></script>
    <link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
    <script src="./libs/validacion/jquery.validate.min.js"></script>
    <script src="./libs/validacion/messages.js"></script>
    <script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
  
  <script  type = "text/javascript"  src = "http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" > </script>
 <link href="jquery.keypad.css" rel="stylesheet">
<style>
#inlineKeypad { width: 10em; }
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="jquery.plugin.js"></script>
<script src="jquery.keypad.js"></script>
<script>
$(function () {
  $('#defaultKeypad').keypad();
  $('#inlineKeypad').keypad({onClose: function() {
    alert($(this).val());
  }});
});
</script>
               
</head>
    <body >  
 

<div id="contenedor">

 <div id= "Bienvenidos/as">
      <figure>
  </figure>
</div>
<div id="tex">
 <nav id="menu">
 <div id="inicio">
      
  <nav>
    <ul>
    
   
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
          <a href="voto.php" class="navbar-brand">Votante</a>
      <a href="voto.php">Votante</a>
     
     
    </ul>
  </nav>
</div>
</div>


<center> <div class="jumbotron">
        <form action="voto.php" method="post" id="voto">
            <table class="table-bordered">
            <div class="row">
            
                <div class="col-xs-2">
                    Ingrese su Dui:
                </div>
                <div class="col-xs-2">
                    <input type="text"  id="defaultKeypad"   name="dui" class="required digits form-control"required>
                </div>
            </div>
            <div class="row">
                <td colspan="2">
                    <input type="submit" name='bot' value='Buscar' class="btn btn-primary"> </center>
         
                </div>
            </div>
        </table>
        </form>

    
</body>

</html>
