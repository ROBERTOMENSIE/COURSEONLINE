<?php

include "conexion.php";
$id = 1;
$nombre = $_POST['nombres'];
$apellido = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$sexo = $_POST['sexo'];
$email = $_POST['email'];
$password = $_POST['password'];
$usuario = $_POST['usuario'];

$password = hash('sha512', $password);

$sql = "INSERT INTO persona (nombre, apellido, telefono, sexo, email, usuario, password)
    VALUES('$nombre', '$apellido', '$telefono', '$sexo', '$email', '$usuario', '$password')";


$verificarUsuario = mysqli_query($conexion, "SELECT * FROM persona WHERE usuario ='$usuario' ");
if (mysqli_num_rows($verificarUsuario) > 0) {
    echo '
        <script>
        alert("Ya existe un usuario con los datos ingresados");
        window.location="../login.php"
        </script>
        ';
    exit();
}


if ($conexion->query($sql) === TRUE) {
    echo '
        <script>
        alert("Usuario registrado...");
        window.location="../login.php"
        </script>
        ';
} else {
    echo '
        <script>
        alert("Error, intentalo de nuevo...");
        window.location="../login.php"
        </script>
        ';
}

$conexion->close();

?>