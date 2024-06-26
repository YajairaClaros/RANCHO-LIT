<!DOCTYPE html>
<html lang="en" xml:lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="logo.png">
        <title>Menú de Platillos</title>
    </head>

    <body >
        <div class="banner">
            <div class="navbar">
                <img src="logoo.png" class="logo" alt="Logo">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="servicios.php">Servicios</a></li>
                    <li><a href="menu.php">Menú</a></li>
                    <li><a href="CatalogoDePlatillos.php">Platillos</a></li>
                    <li><a href="usuario.php">Iniciar Sesión</a></li>
                    <li><a href="contacto.php">Contactanos</a></li>
                </ul>

        </div>

        <section class="products" id=" products">

            <h1 class="heading">Platillos<span> a la vista</span></h1>
        
            <div class="box-container">
                <!-- Producto 1 -->
                <div class="box">
                    <div class="image">
                        <img src="img1.jpg" alt="" />
                        <div class="icons">
                            <a href="platillo1.php" class="see-btn">Ver ingredientes &raquo</a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Taquitos ricos</h3>
                        <div class="price">$7.99 <span>$10.00</span></div>
                    </div>
                </div>
        
                <!-- Producto 2 -->
                <div class="box">
                    <div  class="image">
                        <img src="img2.jpg" alt="" />
                        <div class="icons">
                            <a href="platillo2.php" class="see-btn">Ver ingredientes &raquo</a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Salmón al horno con vegetales asados</h3>
                        <div class="price">$13.99 <span>$20.00</span></div>
                    </div>
                </div>
        
                <!-- Producto 3 -->
                <div class="box">
                    <div class="image">
                        <img src="img3.jpg" alt="" />
                        <div class="icons">
                            <a href="platillo3.php" class="see-btn">Ver ingredientes &raquo</a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Paella española con mariscos y chorizo</h3>
                        <div class="price">$19.99 <span>$22.00</span></div>
                    </div>
                </div>
        
                <!-- Producto 4 -->
                <div class="box">
                    <div class="image">
                        <img src="img4.jpg"/>
                        <div class="icons">
                            <a href="platillo4.php" class="see-btn">Ver ingredientes &raquo</a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Cheesecake de fresa con coulis de frutos rojos</h3>
                        <div class="price">$4.99 <span>$6.00</span></div>
                    </div>
                </div>
        
            </div>
        
        </section>
        
        <style>
            body {
            background-image: url(cata.jpg);
            background-size: cover; /* Para asegurarte de que la imagen cubra todo el fondo */
            background-position: center; /* Para centrar la imagen */
            /* Aquí puedes agregar más estilos si lo deseas */
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

        h1{
            color: antiquewhite;
            text-align: center;
            font-size: xx-large;
            font-weight: bold;
            font-style: italic;
        }

            .products .box-container
            {
                display: flex; 
                flex-wrap: wrap; 
                gap: 1.5rem;
        
            }
        
            .products .box-container .box
            {
                flex: 1 1 28rem;
                box-shadow: 0.5rem 1.5rem rgba(0,0,0,.1);
                border-radius: .5rem;
                border: .1rem solid rgba(0,0,0,.1);
                position: relative; 
            }
            .products .box-container .box .image
            {
                margin-top: 20px;
                position: relative; 
                text-align: center; 
                padding-top: 2rem; 
                overflow: hidden;
            }
            .products .box-container .box .image img
            {
                height: 18rem;
                border-radius: 1.3rem;
            }
            .products .box-container .box:hover .image img
            {
                transform: scale(1.1);
            }
            .products .box-container .box .image a 
            {
                height: 2rem; 
                line-height: 5rem; 
                font-size: 2rem; 
                width: 50%; 
                border-radius: 20px;
                background: transparent; 
                color: whitesmoke;
                text-decoration-line: none;
            }
            .products .box-container .box:hover .image a 
            {
                transition: .3s; 
                text-decoration: underline;
            }
            .products .box-container .box .content
            {
                padding: 2rem; 
                text-align: center; 
        
            }
            .products .box-container .box .content h3
            {
                font-size: 2rem; 
                color: rgb(27, 23, 23); 
                font-weight: bold; 
                
            }
            .products .box-container .box .content .price
            {
                font-size: 2rem; 
                color: antiquewhite; 
                font-weight: bolder; 
                padding-top: 1rem;
            }
            .products .box-container .box .content .price span
            {
                font-size: 1rem; 
                color: dimgrey; 
                font-weight: lighter; 
                text-decoration: line-through;
            } 
        </style>
    </body>
</html>