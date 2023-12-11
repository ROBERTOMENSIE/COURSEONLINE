<?php
session_start();

include "conexion.php";

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$password = hash('sha512', $password);

$validarIngreso = mysqli_query($conexion, "SELECT * FROM  persona WHERE usuario ='$usuario' and password='$password' ");

if (mysqli_num_rows($validarIngreso) > 0) {
    $_SESSION['usuario']= $usuario;
    header("location: ../home.php");
    exit();
} else {
    echo '
            <script>
            alert("Usuario y/o contraseña incorrecta ¡intente de nuevo!");
            window.location="../login.php"
            </script>
            ';
            exit();
}

?>