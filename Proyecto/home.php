<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area personal CHILDISH ARK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preload" href="css/style.css" as="style">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>

<header class="home" style="background-color:#FEC3BF">
    <div class="container__home">
        <div class="logo">
            <a href="#">
                <img src="img/Logo.png" alt="">
            </a>
        </div>
        <div class="menu">
            <nav>
                <ul>

                    <li>
                        <div class="w3-container">
                            <button onclick="document.getElementById('id01').style.display='block'" class="w3-button"><a
                                    href="#">
                                    <img src="img/home/mensaje.png" alt=""></button>

                            <div id="id01" class="w3-modal">
                                <div class="w3-modal-content">
                                    <div class="w3-container">
                                        <span onclick="document.getElementById('id01').style.display='none'"
                                            class="w3-button w3-display-topright">&times;</span>
                                        <p>Some text. Some text. Some text.</p>
                                        <p>Some text. Some text. Some text.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="w3-container">
                            <button onclick="document.getElementById('id01').style.display='block'" class="w3-button"><a
                                    href="#">
                                    <img src="img/home/notificacion.png" alt=""></button>

                            <div id="id01" class="w3-modal">
                                <div class="w3-modal-content">
                                    <div class="w3-container">
                                        <span onclick="document.getElementById('id01').style.display='none'"
                                            class="w3-button w3-display-topright">&times;</span>
                                        <p>Some text. Some text. Some text.</p>
                                        <p>Some text. Some text. Some text.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <p style="color: black "><?php echo $usuario ?></p>

                </ul>
            </nav>
            <!-- Button to Open the Modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                | <img src="img/course/avatar.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill">
            </button>

            <!-- The Modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Cerrar sesión</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            Usted desea cerrar la sesion de su cuenta...
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <a href="Controller/finalizarSesion.php"><button type="button" class="btn btn-danger"
                                    data-bs-dismiss="modal">Aceptar</button></a>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                        </div>

                    </div>
                </div>
            </div>

        </div>
</header>


<body>

    <div class="w3-bar w3-black">
        <button class="w3-bar-item w3-button" onclick="openCity('London')">London</button>
        <button class="w3-bar-item w3-button" onclick="openCity('Paris')">Paris</button>
        <button class="w3-bar-item w3-button" onclick="openCity('Tokyo')">Tokyo</button>
    </div>

    <div id="London" class="w3-container w3-display-container city">
        <span onclick="this.parentElement.style.display='none'"
            class="w3-button w3-large w3-display-topright">&times;</span>
        <h2>London</h2>
        <p>London is the capital city of England.</p>
    </div>

    <div id="Paris" class="w3-container w3-display-container city" style="display:none">
        <span onclick="this.parentElement.style.display='none'"
            class="w3-button w3-large w3-display-topright">&times;</span>
        <h2>Paris</h2>
        <p>Paris is the capital of France.</p>
    </div>

    <div id="Tokyo" class="w3-container w3-display-container city" style="display:none">
        <span onclick="this.parentElement.style.display='none'"
            class="w3-button w3-large w3-display-topright">&times;</span>
        <h2>Tokyo</h2>
        <p>Tokyo is the capital of Japan.</p>
    </div>

    <script>
        function openCity(cityName) {
            var i;
            var x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            document.getElementById(cityName).style.display = "block";
        }
    </script>

</body>

</html>