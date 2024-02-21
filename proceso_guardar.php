<?php

include("conexion.php");

$Imagen = addslashes(file_get_contents($_FILES['imagenNegocio']['tmp_name']));
$nombre = $_POST['businessName'];
$servicio1 = $_POST['service1'];
$servicio2 = $_POST['service2'];
$servicio3 = $_POST['service3'];
$redes = $_POST['socialNetworks'];
$numero = $_POST['numero'];

$query = "INSERT INTO spas(imagen,nombre,servicio_1,servicio_2,servicio_3,redes,numero) VALUES('$Imagen','$nombre','$servicio1','$servicio2','$servicio3','$redes','$numero')";
$resultado = $conn->query($query);

if($resultado){
    echo "Si se inserto";

}
else {
    echo "no se inserto";
}

?>  