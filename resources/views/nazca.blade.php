<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NAZCA</title>
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
                <img src="https://1.bp.blogspot.com/-2Ffhhra459M/YSvG3Cl1lSI/AAAAAAABwJs/SYaXc5FfFOMhjY1V2lgy_PEkQ60d5Gp7ACLcBGAsYHQ/s640/nasca-plaza.jpg" class="img-cuzco" alt="">
        </div>
        <div class="conteiner-text">
            <h1 class="titulo-cuzco">NAZCA</h1>
            <P class="p-cuzco">Todo una semana|Lima a Nazca</P>
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
            <img src="https://upload.wikimedia.org/wikipedia/commons/b/b2/Pileta_plaza_de_armas_de_Nasca.jpg" class="img-sitios" alt="">
            <h1 class="Titulo-sitios">Plaza Armas de Nazca</h1>
            <p class="p-sitios-pri">♥ Ubicación: Centro de Nazca</p>
            <p class="p-sitios-1">♥ Entra: Libre</p>
            <p class="p-sitios"> Muy activa debido a la gran afluencia de visitantes que llegan a diario a conocer las Líneas de Nazca.</p>
        </div>
        <div class="conteiner-sitios-1">
            <img src="https://picchutravel.com/wp-content/uploads/las-lineas-de-nazca.jpg" class="img-sitios" alt="">
            <h1 class="Titulo-sitios">Lineas de Nazca</h1>
            <p class="p-sitios-pri">♥ Ubicación: 15 min de nazca</p>
            <p class="p-sitios-1">♥ Entrada: S/3 desde mirador</p>
            <p class="p-sitios">Estos antiguos geoglifos que habitan en el desierto de las ciudades de Nasca y Palpa.</p>
        </div>
        <div class="conteiner-sitios-1">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4e/Nazca-chauchilla-c03.jpg/350px-Nazca-chauchilla-c03.jpg" class="img-sitios" alt="">
            <h1 class="Titulo-sitios">Cementerio Chauchilla</h1>
            <p class="p-sitios-pri">♥ Ubicacion: 30 km de nazca</p>
            <p class="p-sitios-1">♥ Entrada: S/ 10 general</p>
            <p class="p-sitios"> Se trata de una necrópolis de época preincaica.</p>
        </div>
        <div class="conteiner-sitios-2">
            <img src="https://arquitecturayempresa.es/sites/default/files/imagenes/noticia/arquitectura_acueductos_de_nazca_cantalloc_diego_delso_1974.jpg" class="img-sitios" alt="">
            <h1 class="Titulo-sitios">Acueductos de Nazca</h1>
            <p class="p-sitios-pri">♥ Ubicación: 30 km de nazca</p>
            <p class="p-sitios-1">♥ Entra: S/10 general</p>
            <p class="p-sitios">Caracterizado por ser un sistema hidrográfico que nace únicamente en base a las precipitaciones que ocurren en las montañas de la parte alta.</p>
        </div>
        <div class="conteiner-sitios-2">
            <img src="https://upload.wikimedia.org/wikipedia/commons/d/da/Cahuachi_14.jpg" class="img-sitios" alt="">
            <h1 class="Titulo-sitios">Cahuachi</h1>
            <p class="p-sitios-pri">♥ Distancia: 26 km de nazca</p>
            <p class="p-sitios-1">♥ Entra: S/10 peruanos y extrngeros</p>
            <p class="p-sitios">Era un centro ceremonial de la cultura Nazca que vivió su época de esplendor entre el año 1 y el 500.</p>
        </div>
        <div class="conteiner-sitios-2">
            <img src="data:image/jpeg;base64,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" class="img-sitios" alt="">
            <h1 class="Titulo-sitios">Cerro Blanco</h1>
            <p class="p-sitios-pri">♥ Distancia: 20km de nazca</p>
            <p class="p-sitios-1">♥ Entra: S/100 con guia</p>
            <p class="p-sitios">Es una enorme duna de Perú situada en el valle de Nazca en el departamento de Ica.</p>
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
            <h5 class="titulo-tradicionales">¡COMIDAS TRADICIONALES DE NAZCA!</h5>
        </div>
        <div class="conteiner-comida-1">
            <img src="https://comeperuano.b-cdn.net/wp-content/uploads/2020/02/receta-sopa-seca-chinchana.jpg" class="img-comida" alt="">
            <h1 class="titulo-comida">Sopa Seca</h1>
            <p class="p-comida-primary">Un aderezo de ají colorado con ajos y cebolla a la que se le agrega un poco de agua y fideos largos o spagueti se parece mas a un segundo.</p>
        </div>
        <div class="conteiner-comida-1">
            <img src="https://www.comedera.com/wp-content/uploads/2021/08/carapulcra-peruana.jpg" class="img-comida" alt="">
            <h1 class="titulo-comida">Carapulcra</h1>
            <p class="p-comida-primary">Papa seca sancochada y guisada con carnes de chancho y gallina, ají panca y mirasol, ajos y otras especias.</p>
        </div>
        <div class="conteiner-comida-1">
            <img src="http://4.bp.blogspot.com/-wN4oQSV5Sts/UZ1qG1-OhMI/AAAAAAAACTc/UgCKJbGR7zA/s1600/chupe+de+pallares+verdes.jpg" class="img-comida" alt="">
            <h1 class="titulo-comida">Chupe de Pallares Verdea</h1>
            <p class="p-comida-primary">Pallares remojados cocidos en un aderezo de cebollas cuando esta cocinado se le agrega abundante queso y leche.</p>
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
                        <img src="https://1.bp.blogspot.com/-2Ffhhra459M/YSvG3Cl1lSI/AAAAAAABwJs/SYaXc5FfFOMhjY1V2lgy_PEkQ60d5Gp7ACLcBGAsYHQ/s640/nasca-plaza.jpg" class="img-pie-pagina" alt="">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2 class="titulo-precio">Precio</h2>
                <p>TODO UNA SEMANA|LIMA A NAZCA</p>
                <div class="box-descuento">
                    <p class="precio">S/.5999.00</p>
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