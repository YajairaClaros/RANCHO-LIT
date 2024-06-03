<!DOCTYPE html>
<html lang="en" xml:lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contacto</title>
        <link rel="stylesheet" href="estilos/contstyle.css">
        <link rel="icon" type="image/png" href="logo.png">
    </head>

    <body>

        <div class="banner">
            <div class="navbar">
                <img src="logoo.png" class="logo" alt="Logo">
                <ul>
                    <li><a href="Inicio.php">Inicio</a></li>
                    <li><a href="servicios.php">Servicios</a></li>
                    <li><a href="menu.php">Menú</a></li>
                    <li><a href="CatalogoDePlatillos.php">Platillos</a></li>
                    <li><a href="usuario.php">Iniciar Sesión</a></li>
                    <li><a href="contacto.php">Contactanos</a></li>
                </ul>
            </div>
        </div>

        <div class = "form-container">
            <h2>Contactanos</h2>
            <p>
                <a href="https://forms.gle/t4J64YwXArm21eus7" class="estilo-link"> Comentanos tu duda.</a>
            </p>

            <form method="post" autocomplete="off">

                <div class="form-group">

                    <div class="form-content">
                        <label for="name">Nombre</label>
                        <input type="text" id="name" name="name" placeholder="Nombre">

                    </div>

                    <div class="form-content">
                        <label for="email">Correo</label>
                        <input type="email" id="email" name="email" placeholder="Correo">

                    </div>
                </div>

                <div class="form-group">

                    <div class="form-content">
                        <label for="direction">Direccion</label>
                        <input type="text" id="direction" name="direction" placeholder="Direccion">

                    </div>

                    <div class="form-content">
                        <label for="phone">Telefono</label>
                        <input type="tel" id="phone" name="phone" placeholder="Telefono">

                    </div>
                </div>

                <label for="message">Mensaje</label>
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Mensaje" ></textarea>

                <input class="btn-enviar" type="submit" name="contact" value="ENVIAR MENSAJE">


            </form>

        </div>

        <?php

        include("contactocon.php")
        ?>


    </body>
</html>