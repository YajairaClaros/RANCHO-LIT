<!DOCTYPE html>
<html lang="en" xml:lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="logo.png">
        <title>Rancho Lit Menu</title>
        <link rel="stylesheet" href="estilos/menu.css">
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
                </ul>

        </div>

        <div id="menu">
            <h1 id="section">Menú</h1>
            <div id="menu_row">
                <div id="menu_col">
                    <h2>Platillos</h2>
                    <div class="box">
                        <div id="image">
                            <a href="CatalogoDePlatillos.php">
                                <img src="menu.jpg">
                            </a>
                        </div>
                    <div>
                        <h3>Hay muchas opciones</h3>
                    </div>
                </div>
            </div>
        </div>

        <div id="menu_row">
            <div id="menu_col">
                <h2>Bebidas</h2>
                <div class="box">
                    <div id="image">
                        <a href="CatalogoDeBebidas.php">
                            <img src="bebidas.jpg">
                        </a>
                    </div>
                <div>
                    <h3>Hay muchas opciones</h3>
                </div>
            </div>
        </div>

        <div id="menu_row">
            <div id="menu_col">
                <h2>Postres</h2>
                <div class="box">
                    <div id="image">
                        <a href="#">
                            <img src="imagenes/postre.jpg">
                        </a>
                    </div>
                <div>
                    <h3>Hay muchas opciones</h3>
                </div>
            </div>
        </div>
    </div>
        
    <style>
            body {
            background-image:  linear-gradient(rgba(0, 0, 0, 0.432), rgba(0,0,0,0.75)),url(imagenes/bg.jpg);
            background-size: cover; /* Para asegurarte de que la imagen cubra todo el fondo */
            background-position: center; /* Para centrar la imagen */
            /* Aquí puedes agregar más estilos si lo deseas */
            height: 220vh;
        }
           
        .navbar{
            width: 85%;
            margin: auto;
            padding: 35px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .logo{
            width: 120px;
            cursor: pointer;
        }
        .navbar ul li{
            list-style: none;
            display: inline-block;
            margin: 0 20px;
            position: relative;
        }
        .navbar ul li a{
            text-decoration: none;
            color: white;
            text-transform: uppercase;
        }
        .navbar ul li::after{
            content: "";
            height: 3px;
            width: 0;
            background: wheat;
            position: absolute;
            left: 0;
            bottom: -10px;
            transition: 0.4s;
        }
        .navbar ul li:hover::after{
            width: 100%;
        }

    </style>
    </body>
</html>
