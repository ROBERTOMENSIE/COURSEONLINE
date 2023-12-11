<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="css/normalize.css" as="style">
    <link href="css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <title>Iniciar sesión </title>
</head>

<body class="body">
    <header style="background-color:#FEC3BF">
        <div class="container__header">
            <div class="logo">
                <a href="#">
                    <img src="img/Logo.png" alt="">
                </a>
            </div>

    </header>

    <main class="main">

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="Controller/signinController.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Nombre de usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="password">
                    <button>Entrar</button>
                </form>

                <!--Register-->
                <form action="Controller/registerController.php" method="POST" class="formulario__register">
                    <h2>Regístrarse</h2>
                    <input type="text" placeholder="Nombres" name="nombres">
                    <input type="text" placeholder="Apellido" name="apellidos">
                    <input type="text" placeholder="Correo Electronico" name="email">
                    <input type="text" placeholder="telefono" name="telefono">
                    <input type="text" placeholder="sexo" name="sexo">
                    <input type="text" placeholder="Nombre de usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="password">
                    <button>Regístrarse</button>
                </form>
            </div>
        </div>
    </main>

    <script src="script.js"></script>

</body>

</html>