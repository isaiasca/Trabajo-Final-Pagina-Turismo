<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HUÁNUCO</title>
</head>
<body>
    <!--inicio del encabezado-->
    <style>
        .img-encabezado{
            width: 200px;
            margin-left: 100px;
        }
        .lista{
            float: left;
            list-style: none;
            padding: 10px;
        }
        .conteiner-lista-com{
            float: right;
            margin-top: 0px;
            margin-right: 200px;
            
        }
        .link-lista{
            text-decoration: none;
            font-family: garamot;
            font-weight: 600;
            color: #3C4048;
            cursor: pointer;
            margin: 0 1rem;
        }
        .lista:hover .link-lista{
            color: #3A8891;
        }
        #header{
            height: auto;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            justify-content: space-between;
            padding: 0 5%;
            box-sizing: border-box;
            height: 70px;
            background-color: beige;
            transition: 0.5s;
        }
        .main-menu{
            
            justify-content: center;
        }
        
    </style>
    <header id="header">
        <img src="https://www.estudionovaidea.com/images/travel-zone.png" class="img-encabezado" alt="">
        <nav class="conteiner-lista-com">
            <ul class="main-menu">
                <li class="lista"><a href="principal" class="link-lista">Home</a></li>
                <li class="lista"><a href="" class="link-lista">Quienes somos</a></li>
                <li class="lista"><a href="" class="link-lista">Oferta</a></li>
                <li class="lista"><a href="" class="link-lista">Tours</a></li>
            </ul>
        </nav>
    </header>

    <!--fin del encabezado-->

    <!--comenzamos con la imagen de inicio-->
    <style>
        *{
            margin: 0 ;
        }
        .conteiner-img{
            width: 100%;
            overflow: hidden;
            position: relative;
            text-align: center;
            margin-top: 75px;
        }
        
        .img-cuzco{
            width: 69%;
            text-align: center;
        }
        .conteiner-img .titulo-cuzco{
            position: absolute;
            font-size: 25px;
            text-shadow: 1px 1px 1px black;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }
        .conteiner-img .p-cuzco{
            position: absolute;
            font-size: 30px;
            text-shadow: 1px 1px 1px black;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }
    </style>
    <section class="conteiner-img">
        <div class="img-principal">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Font_del_Parc_de_San_Sebasti%C3%A1n_amb_l%27esgl%C3%A9sia_de_San_Sebasti%C3%A1n_darrera_a_Hu%C3%A1nuco.jpg/1200px-Font_del_Parc_de_San_Sebasti%C3%A1n_amb_l%27esgl%C3%A9sia_de_San_Sebasti%C3%A1n_darrera_a_Hu%C3%A1nuco.jpg" class="img-cuzco" alt="">
        </div>
        <div class="conteiner-text">
            <h1 class="titulo-cuzco">HUÁNUCO</h1>
            <P class="p-cuzco">Todo una semana|Lima a Huánuco</P>
        </div>
    </section>
    <!--final de imagen de inicio-->

    <!--comenzamos sitios-->
    <style>
        .titulo-sitios{
            margin-top: 50px;
            text-align: center;
        }
        .titulo-buscado{
            font-size: 35px;
            font-family: "Garamod", cursive;
            
        }
        .sitios{
            margin-left: 317px;
            margin-right: 317px;
            align-items: center;
            margin-top: 45px;
        }
        .img-sitios{
            width: 100%;
            height: 200px;
        }
        .conteiner-sitios-1{
            float: left;
            width: 280px;
            height: 450px;
            border: 1px solid #001D6E;
            background-color: transparent;
            margin: 5px;
        }
        .conteiner-sitios-2{
            float: left;
            width: 280px;
            height: 450px;
            border: 1px solid #001D6E;
            background-color: transparent;
            margin: 5px;
            margin-bottom: 60px;
        }
        .Titulo-sitios{
            font-size: 25px;
            margin-top: 12px;
            text-align: center;
            color: #474E68;
            font-family: "Garamod", cursive;
        }
        .p-sitios{
            font-size: 18px;
            margin-top: 20px;
            font-family: Times;
        }
        .p-sitios-1{
            font-size: 18px;
            margin-top: 8px;
            font-family: Times;
        }
        .p-sitios-pri{
            margin-top: 24px;
            font-size: 18px;
            font-family: Times;
        }
        
    </style>
    <div class="titulo-sitios">
        <h5 class="titulo-buscado">¡Lugares a conocer!</h5>
    </div>
    <div class="sitios">
        <div class="conteiner-sitios-1">
            <img src="https://www.machupicchu-tours-peru.com/wp-content/uploads/2014/01/cusco-1.jpg" class="img-sitios" alt="">
            <h1 class="Titulo-sitios">Plaza Armas de Cuzco</h1>
            <p class="p-sitios-pri">♥ Ubicación: Centro de cuzco</p>
            <p class="p-sitios-1">♥ Entra: Libre</p>
            <p class="p-sitios"> En la plaza de armas se realizaba la celebracion del Inti Raymi.</p>
        </div>
        <div class="conteiner-sitios-1">
            <img src="https://www.raptravel.org/images01/informacion-util-del-cusco/templo-de-coricancha-city-tours-en-cusco.jpg" class="img-sitios" alt="">
            <h1 class="Titulo-sitios">Qoricancha</h1>
            <p class="p-sitios-pri">♥ Ubicación: A 2 cuadras de plaza de armas de cuzco</p>
            <p class="p-sitios-1">♥ Entrada: S/15 adultos, S/8 estudiantes e niños(de 10 años)</p>
            <p class="p-sitios">Vas a poder conocermaxima expresión de arquitectura Inca.</p>
        </div>
        <div class="conteiner-sitios-1">
            <img src="https://upload.wikimedia.org/wikipedia/commons/2/2b/Cusco_Piedra_de_los_doce_angulos.jpg" class="img-sitios" alt="">
            <h1 class="Titulo-sitios">La piedra de 12 ángulos</h1>
            <p class="p-sitios-pri">♥ Ubicacion: A 1 cuadra y media de la plaza de armas de cuzco</p>
            <p class="p-sitios-1">♥ Entrada: Libre</p>
            <p class="p-sitios">Se dice que si se retirará toda la cuadra se vendía abajo.</p>
        </div>
        <div class="conteiner-sitios-2">
            <img src="https://cersa.org.pe/capacitaciones/sites/default/files/Sac2.jpg" class="img-sitios" alt="">
            <h1 class="Titulo-sitios">Sacsayhuamán</h1>
            <p class="p-sitios-pri">♥ Ubicación: Noreste de la ciudad de cuzco</p>
            <p class="p-sitios-1">♥ Entra: S/40 peruanos y S/70 extranjeros</p>
            <p class="p-sitios">Es una fortaleza Inca a base de rocas inmensas.</p>
        </div>
        <div class="conteiner-sitios-2">
            <img src="https://www.peru.travel/Contenido/General/Imagen/es/302/1.1/Vinicunca.jpg" class="img-sitios" alt="">
            <h1 class="Titulo-sitios">Vinicunca</h1>
            <p class="p-sitios-pri">♥ Distancia: 3hr en carro y 40 min caminando</p>
            <p class="p-sitios-1">♥ Entra: S/10 peruanos y extrngeros</p>
            <p class="p-sitios">Vinicunca es famosa por sus colores similares al arcoíris.</p>
        </div>
        <div class="conteiner-sitios-2">
            <img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/Machu_Picchu%2C_Peru_%282018%29.jpg" class="img-sitios" alt="">
            <h1 class="Titulo-sitios">Machu Picchu</h1>
            <p class="p-sitios-pri">♥ Distancia: 11 hr aproximadamente en carro</p>
            <p class="p-sitios-1">♥ Entra: S/10 peruanos y extrngeros</p>
            <p class="p-sitios">Una de las 7 maravillas del mundo moderno.</p>
        </div>
    </div>

    <!--comenzamos comida-->
    <style>
         .titulo-primary{
            margin-bottom: 45px;
            text-align: center;
        }
        .titulo-tradicionales{
            font-size: 35px;
            font-family: "Garamod", cursive;
            
        }
        .comida{
            margin-left: 317px;
            margin-right: 317px;
            align-items: center;
        }
        .img-comida{
            width: 100%;
            height: 200px;
        }
        .conteiner-comida-1{
            float: left;
            width: 280px;
            height: 450px;
            border: 1px solid #001D6E;
            background-color: transparent;
            margin: 5px;
            margin-bottom: 100px;
        }
        .titulo-comida{
            font-size: 25px;
            margin-top: 12px;
            text-align: center;
            color: #474E68;
            font-family: "Garamod", cursive;
        }
        .p-comida{
            font-size: 18px;
            margin-top: 10px;
            font-family: Times;
        }
        .p-comida-primary{
            font-size: 18px;
            margin-top: 20px;
            font-family: Times;
        }
    </style>

    
    <div class="comida">
        <div class="titulo-primary">
            <h5 class="titulo-tradicionales">¡COMIDAS TRADICIONALES DE CUZCO!</h5>
        </div>
        <div class="conteiner-comida-1">
            <img src="https://www.perurail.com/wp-content/uploads/2020/09/manco-capac-el-primer-inca.jpg" class="img-comida" alt="">
            <h1 class="titulo-comida">Chiri Uchu</h1>
            <p class="p-comida-primary">Es considerado el plato bandera del cusco.</p>
            <p class="p-comida">Significa ají frio o picante frio en quechua, es una mezcla entre la costa, sierra y selva.</p>
        </div>
        <div class="conteiner-comida-1">
            <img src="https://recetascocinaperuana.com/wp-content/uploads/2020/06/chairo.jpg" class="img-comida" alt="">
            <h1 class="titulo-comida">Chairo</h1>
            <p class="p-comida-primary">El Chairo es una deliciosa sopa andina, su nombre de origen quechua y aymara que significa "tipo de vianda".</p>
        </div>
        <div class="conteiner-comida-1">
            <img src="https://s3.amazonaws.com/menuperu.pe/media/receta/Kapschi+asopado+de+hongos+y+setas-1996.jpeg" class="img-comida" alt="">
            <h1 class="titulo-comida">Kapchi de Setas</h1>
            <p class="p-comida-primary">El piqueo típico de las quintas de cuzco.</p>
            <p class="p-comida">Este platillo es consumo en tiempos de inverno para reponer el cuerpo humano.</p>
        </div>
    </div>
    <!--fin comida-->

    <!--comenzamos pie de pagina-->
    <style>
        .pie-pagina{
            width: 100%;
            background-color: #0a141d;
            overflow: hidden;
            margin-top: 100px;
        }
        .pie-pagina .conteiner-pie-primary{
            width: 100%;
            max-width: 1200px;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 250px;
            padding: 45px 0px;
        }
        .pie-pagina .conteiner-pie-primary .box figure{
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .pie-pagina .conteiner-pie-primary .box figure img{
            width: 250px;
        }
        .pie-pagina .conteiner-pie-primary .box h2{
            color: white;
            margin-bottom: 25px;
            font-size: 18px;
        }
        .pie-pagina .conteiner-pie-primary .box .titulo-precio{
            color: white;
            margin-bottom: 25px;
            font-size: 25px;
        }
        .pie-pagina .conteiner-pie-primary .box p{
            color: #efefef;
            margin-bottom: 30px;
        }
        .pie-pagina .conteiner-pie-primary .red-social a{
            display: inline-block;
            text-decoration: none;
            width: 45px;
            height: 45px;
            line-height: 45px;
            color: #fff;
            margin-right: 10px;
            background-color: #0d2033;
            text-align: center;
            transition: all 300ms ease;
        }
        .pie-pagina .conteiner-pie-primary .red-social a:hover{
            color: aqua;
        }
        .pie-pagina .conteiner-pie-second{
            background-color: #0a1a2a;
            padding: 15px 10px;
            text-align: center;
            color: #fff;
        }
        .pie-pagina .conteiner-pie-second{
            font-size: 15px;
        }
        .pie-pagina .conteiner-pie-primary .box .box-descuento{
            font-family: "Candara";
            font-weight: bold;
            font-size: 20px;
            text-align: center;
            padding: 2px;
            border-radius: 11px;
            /*background-color: #404258;*/
            background-color: #6B728E;
        }
        .pie-pagina .conteiner-pie-primary .box .precio{
            color: #9ED5C5;
        }
        .pie-pagina .conteiner-pie-primary .box .titulo-reserva{
            color: white;
            margin-bottom: 13px;
            font-size: 25px;
        }
        .pie-pagina .conteiner-pie-primary .box .btn-reservar{
            text-decoration: none;
            color: #9ED5C5;
            font-family: "Didot", cursive;
            padding: 10px;
        }
        .pie-pagina .conteiner-pie-primary .box .conteiner-btn-reservar{
            text-align: center;
            font-size: 23px;
            padding: 10px;
            margin-bottom: 18px;
            background-color: #6B728E;
            border-radius: 10px;
            overflow: hidden;
        }
    </style>
    <footer class="pie-pagina">
        <div class="conteiner-pie-primary">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="https://media.viajando.travel/p/6c685a37a1c8611b51532b6d1ee3b53c/adjuntos/277/imagenes/000/423/0000423605/1200x675/smart/cuscojpeg.jpeg" class="img-pie-pagina" alt="">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2 class="titulo-precio">Precio</h2>
                <p>TODO UNA SEMANA|LIMA A HUÁNUCO</p>
                <div class="box-descuento">
                    <p class="precio">S/.7999.00</p>
                </div>
                
            </div>
            <div class="box">
                <h1 class="titulo-reserva">Reservar</h1>
                <div class="conteiner-btn-reservar">
                    <a href="reservar" class="btn-reservar">
                        Reservar
                    </a>
                </div>
                
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="https://twitter.com/?lang=es"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                    </svg></a>

                    <a href="https://es-la.facebook.com/"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                    </svg></a>

                    <a href="https://www.instagram.com/"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                    </svg></a>
                </div>
            </div>
        </div>
        <div class="conteiner-pie-second">
            <small>&copy; 2022 <b>Travel Zone</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
</body>
</html>