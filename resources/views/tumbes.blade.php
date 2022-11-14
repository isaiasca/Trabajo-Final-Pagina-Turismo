<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUMBES</title>
</head>
<body>
    <!--inicio del encabezado-->
    <style>
        body{
            background-color: #0a1a2a;
        }
        #conteiner-login{
            margin-top: 25px;
            font-size: 20px;
            text-decoration: none;
            padding-left: 14px;
            padding-right: 14px;
            border: 1px solid #1f53c5;
            box-shadow: 0px 0px 5px  #1f53c5;
            margin: 10px;
        }
        #login{
            margin-top: 25px;
            text-align: right;
            margin-right: -1350px;
        }
        #encabezado{
            text-align: right;
            
        }
        .img-encabezado{
            width: 200px;
            margin-left: -200px;
        }
        .lista{
            float: left;
            list-style: none;
            padding: 10px;
        }
        .conteiner-lista-com{
            font-size: 18px;
            float: right;
            margin-top: 15px;
            margin-right: 500px;
            
        }
        .link-lista{
            text-decoration: none;
            font-family: garamot;
            font-weight: 600;
            color: #1f53c5;
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
            background-color: #0a141d;
            transition: 0.5s;
        }
        .main-menu{
            
            justify-content: center;
        }
        
    </style>
    <header id="header">
        <div id="encabezado" class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">          
            @if (Route::has('login'))
                <div id="login" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                        
                    @else
                        
                        <a id="conteiner-login" href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a id="conteiner-login" href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
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
                <img src="https://www.turiweb.pe/wp-content/uploads/2020/07/tumbes-160720.jpg" class="img-cuzco" alt="">
        </div>
        <div class="conteiner-text">
            <h1 class="titulo-cuzco">TUMBES</h1>
            <P class="p-cuzco">Todo una semana|Lima a Tumbes</P>
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
            color: white;
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
            height: 500px;
            border: 1px solid #001D6E;
            background-color: transparent;
            margin: 5px;
        }
        .conteiner-sitios-2{
            float: left;
            width: 280px;
            height: 500px;
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
            color: white;
        }
        .p-sitios-1{
            font-size: 18px;
            margin-top: 8px;
            font-family: Times;
            color: white;
        }
        .p-sitios-pri{
            margin-top: 24px;
            font-size: 18px;
            font-family: Times;
            color: white;
        }
        
    </style>
    <div class="titulo-sitios">
        <h5 class="titulo-buscado">¡Lugares a conocer!</h5>
    </div>
    <div class="sitios">
        <div class="conteiner-sitios-1">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpNa2GEJa2MIgqaCbnkE2zzxk_pfS4Yi3hZ4T9DZJ4GXsUWoN1LeAIynl6QAUnkw52c-U&usqp=CAU" class="img-sitios" alt="">
            <h1 class="Titulo-sitios">Plaza Armas de tumbes</h1>
            <p class="p-sitios-pri">♥ Ubicación: Centro de tumbes</p>
            <p class="p-sitios-1">♥ Entra: Libre</p>
            <p class="p-sitios">Tiene una concha acústica decorada con mosaicos coloridos.</p>
        </div>
        <div class="conteiner-sitios-1">
            <img src="https://media-cdn.tripadvisor.com/media/photo-s/0c/d0/0c/1d/balneario-de-punta-sal.jpg" class="img-sitios" alt="">
            <h1 class="Titulo-sitios">Balneario de punta sal</h1>
            <p class="p-sitios-pri">♥ Ubicación: 80km de tumbes</p>
            <p class="p-sitios-1">♥ Entrada: Libre</p>
            <p class="p-sitios">Esta considerado como la mejor playa de la region.</p>
        </div>
        <div class="conteiner-sitios-1">
            <img src="https://mochileros.org/nelson/wp-content/uploads/2011/05/puerto_pizarro_peru_manglares.jpg" class="img-sitios" alt="">
            <h1 class="Titulo-sitios">Manglares e islas de puerto pizarro</h1>
            <p class="p-sitios-pri">♥ Ubicacion: Costa noreste</p>
            <p class="p-sitios-1">♥ Entrada: Libre</p>
            <p class="p-sitios">Son célebres por sus conchas negras y moluscos, ofrecen cualidades afrodisiacas.</p>
        </div>
        <div class="conteiner-sitios-2">
            <img src="https://walac.pe/wp-content/uploads/2017/08/amotape1.jpg" class="img-sitios" alt="">
            <h1 class="Titulo-sitios">Parque nacional cerros de amotape</h1>
            <p class="p-sitios-pri">♥ Ubicación: Norte de perú</p>
            <p class="p-sitios-1">♥ Entra: S/40 peruanos y S/70 extranjeros</p>
            <p class="p-sitios">Es el mejor ejemplo conservado de boques secos ecuatoriales.</p>
        </div>
        <div class="conteiner-sitios-2">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTw4S_b_NuGF4l0upsv8efS5CDjFCeEv4pBc1zmKpmzo0qzEf0kJqXYWhEukcHSmvayZD0&usqp=CAU" class="img-sitios" alt="">
            <h1 class="Titulo-sitios">Santuario nacional los manglares de tumbes</h1>
            <p class="p-sitios-pri">♥ Ubicaión: Costa pacífica del país</p>
            <p class="p-sitios-1">♥ Entra: S/10 peruanos y extrngeros</p>
            <p class="p-sitios">es un área protegida del Perú que abarca una porción de la ecorregión del Golfo de Guayaquil.</p>
        </div>
        <div class="conteiner-sitios-2">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/Catedraltumbes.JPG/1200px-Catedraltumbes.JPG" class="img-sitios" alt="">
            <h1 class="Titulo-sitios">Catedral de tumbes</h1>
            <p class="p-sitios-pri">♥ Ubicaión: En la plaza mayor</p>
            <p class="p-sitios-1">♥ Entra: Libre</p>
            <p class="p-sitios">Propiedad de la Iglesia católica ubicado en la localidad de Tumbes en el departamento del mismo nombre al norte del país.</p>
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
            color: white;
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
            color: white;
        }
        .p-comida-primary{
            font-size: 18px;
            margin-top: 20px;
            font-family: Times;
            color: white;
        }
    </style>

    
    <div class="comida">
        <div class="titulo-primary">
            <h5 class="titulo-tradicionales">¡COMIDAS TRADICIONALES DE TUMBES!</h5>
        </div>
        <div class="conteiner-comida-1">
            <img src="https://comidasperuanas.net/wp-content/uploads/2019/11/Ceviche-de-Conchas-Negras.jpg" class="img-comida" alt="">
            <h1 class="titulo-comida">Ceviche de conchas negras</h1>
            <p class="p-comida-primary">Este plato típico de Tumbes es preparado con conchas negras, ajíes rojos, ajíes amarillos, cebolla y limón.</p>
        </div>
        <div class="conteiner-comida-1">
            <img src="https://mejorconsalud.as.com/wp-content/uploads/2015/06/algondigas-de-cangrejo.jpg" class="img-comida" alt="">
            <h1 class="titulo-comida">Albóndigas de pulpa de cangrejo</h1>
            <p class="p-comida-primary">Es un plato elaborado en base a pulpa de cangrejo, ketchup, queso fresco, requesón, pan rallado, aceite de oliva y condimentos.</p>
        </div>
        <div class="conteiner-comida-1">
            <img src="https://i.ytimg.com/vi/sEujIQfCFws/maxresdefault.jpg" class="img-comida" alt="">
            <h1 class="titulo-comida">Chupe de cangrejo</h1>
            <p class="p-comida-primary">Considerado como un restituyente de energía luego de una noche de fiesta.</p>
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
                        <img src="https://www.turiweb.pe/wp-content/uploads/2020/07/tumbes-160720.jpg" class="img-pie-pagina" alt="">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2 class="titulo-precio">Precio</h2>
                <p>TODO UNA SEMANA|LIMA A TUMBES</p>
                <div class="box-descuento">
                    <p class="precio">S/.1999.00</p>
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