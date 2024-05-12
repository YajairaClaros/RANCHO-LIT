<!DOCTYPE html>
<html lang="en" xml:lang="en">

    <head>
        <title>RANCHO LIT</title>
        <link rel="stylesheet" href="usuestilo.css">
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
                </ul>

        </div>
        
        <div class="wrapper">
            <form action="">
                <h1>Inicia sesión</h1>
                <div class="input-box">
                    <input type="text" placeholder="Usuario" required>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Contraseña" required>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox"> Remember me</label>
                    <a href="#">¿Olvidaste la contraseña?</a>
                </div>

                <button type="submit" class="btn">Iniciar</button>

                <div class="register-link">
                    <p>¿No tienes una cuenta?<a href="#"> Registrate</a></p>

                </div>
            </form>
            
        </div>

        <div class="btnregresar">
            <p><a class="btn-regresar" href="Inicio.php"><span></span>REGRESAR AL INICIO</a></p>
        </div>

    </body>
</html>