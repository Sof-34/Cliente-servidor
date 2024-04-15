<?php
$tipo_denuncia = $_POST["tipo_denuncia"];
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$genero = $_POST["genero"];
$descripcion = $_POST["descripcion"];

echo "Tipo Denuncia: $tipo_denuncia <br>";
echo "Nombre: $nombre <br>";
echo "Email: $email <br>";
echo "Telefono: $telefono <br>";
echo "Genero: $genero <br>";
echo "Descripcion: $descripcion <br>";
?>