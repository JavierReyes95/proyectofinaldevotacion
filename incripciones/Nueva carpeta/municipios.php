<?php

$host = 'localhost';
$base = 'tribunal';
$usuario = 'root';
$password ='';
try{
	$conn = new PDO('mysql:host='.$host.';dbname='.$base.'', $usuario, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn->exec("SET CHARACTER SET utf8");
}catch(PDOException $e){
	echo "ERROR: " . $e->getMessage();
}
$municipio = $_POST['municipio'];
 $sql = $conn->prepare('SELECT * FROM municipio WHERE id_departamento='.$municipio.' ');
    $sql->execute();
    $resultado = $sql->fetchAll();
    foreach ($resultado as $row) {
        echo "<option value='".$row['id_municipio']."'>".$row['municipio']."</option>";
  }
