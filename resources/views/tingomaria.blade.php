<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tingo María</title>
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
                <img src="https://elcomercio.pe/resizer/rJ_stzLvYw-NWlJkC8-pxijRX-M=/1200x900/smart/filters:format(jpeg):quality(75)/arc-anglerfish-arc2-prod-elcomercio.s3.amazonaws.com/public/EZHTSW4PEFHUBES2XS7AT6X4KM.jpg" class="img-cuzco" alt="">
        </div>
        <div class="conteiner-text">
            <h1 class="titulo-cuzco">TINGO MARÍA</h1>
            <P class="p-cuzco">Todo una semana|Lima a Tingo María</P>
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
            <img src="https://d1bvpoagx8hqbg.cloudfront.net/originals/el-corazon-ciudad-6213d9cd355c3c764a6ab4248a777915.jpg" class="img-sitios" alt="">
            <h1 class="Titulo-sitios">Plaza Armas de Tingo María</h1>
            <p class="p-sitios-pri">♥ Ubicación: Centro de tingo maría</p>
            <p class="p-sitios-1">♥ Entra: Libre</p>
            <p class="p-sitios"> Formado por un arco que expresa la puerta de entrada a la Amazonía Peruana.</p>
        </div>
        <div class="conteiner-sitios-1">
            <img src="https://blog.redbus.pe/wp-content/uploads/2019/12/cueva-de-las-lechuzas-25513-xl-1280x720.jpg" class="img-sitios" alt="">
            <h1 class="Titulo-sitios">Cueva de las Lechuzas</h1>
            <p class="p-sitios-pri">♥ Ubicación: 6 km de tingo maría</p>
            <p class="p-sitios-1">♥ Entrada: s/5 huánuco y S/15 visitantes</p>
            <p class="p-sitios">La cueva es habitada por guácharos y murciélagos.</p>
        </div>
        <div class="conteiner-sitios-1">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdMkl1ctgJPPea0O0sPPBde3OASdQafzfc0g&usqp=CAU" class="img-sitios" alt="">
            <h1 class="Titulo-sitios">La Bella Durmiente</h1>
            <p class="p-sitios-pri">♥ Ubicacion: 25 min carro</p>
            <p class="p-sitios-1">♥ Entrada: Libre</p>
            <p class="p-sitios">Es una montaña con forma de mujer.</p>
        </div>
        <div class="conteiner-sitios-2">
            <img src="https://1.bp.blogspot.com/-UZf7G9jQOfg/Xt5jylhfZ3I/AAAAAAAAAco/5t9M_BRcyoEAqLIkua4Kt1Lp5hdfAf_FgCLcBGAsYHQ/s1600/aguas%2Bsulforosas.jpg" class="img-sitios" alt="">
            <h1 class="Titulo-sitios">Balneario de las Aguas Sulfurosas</h1>
            <p class="p-sitios-pri">♥ Ubicación: 10 min en carro</p>
            <p class="p-sitios-1">♥ Entra: S/5 general</p>
            <p class="p-sitios">Es una piscina que sus aguas es azufre.</p>
        </div>
        <div class="conteiner-sitios-2">
            <img src="https://turismoi.pe/uploads/photo/version3/photo_file/74118/optimized_30.jpg" class="img-sitios" alt="">
            <h1 class="Titulo-sitios">Cueva de Huayna Cápac</h1>
            <p class="p-sitios-pri">♥ Distancia: 25 km de tingo maría</p>
            <p class="p-sitios-1">♥ Entra: S/75 con guia</p>
            <p class="p-sitios">Discurren aguas cristalinas formando pozas, mantos y cascadas subterráneas ingresando a las profundidades de la tierra</p>
        </div>
        <div class="conteiner-sitios-2">
            <img src="https://1.bp.blogspot.com/-qF9Lbsu4aW4/Xt5kaDgZlCI/AAAAAAAAAcw/I80ZwiMgXiElwjyaScbAZ1OpD1AU3lRvwCLcBGAsYHQ/s400/la%2Balcantarilla.jpg" class="img-sitios" alt="">
            <h1 class="Titulo-sitios">Balneario las Alcantarillas</h1>
            <p class="p-sitios-pri">♥ Distancia: 5 km de tingo maría</p>
            <p class="p-sitios-1">♥ Entra: S/5 peruanos y extrngeros</p>
            <p class="p-sitios">es un conjunto de piscinas y caídas de agua de origen artificial que, en la actualidad, es bastante popular entre la juventud de la zona.</p>
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
            <img src="https://comidasperuanas.net/wp-content/uploads/2017/07/Tacacho-con-cecina.jpg" class="img-comida" alt="">
            <h1 class="titulo-comida">Tacacho con Cecina</h1>
            <p class="p-comida-primary">Es una preparación a base de plátano verde frito o asado, machacado y mezclado con grasa de cerdo, generalmente servido con cecina, que es la carne de cerdo seca.</p>
        </div>
        <div class="conteiner-comida-1">
            <img src="https://comidasperuanas.net/wp-content/uploads/2020/10/Patarashca.jpg" class="img-comida" alt="">
            <h1 class="titulo-comida">Patarashca</h1>
            <p class="p-comida-primary">Se prepara con cualquier pescado local. Se envuelve en una hoja de plátano y se puede preparar a la parrilla.</p>
        </div>
        <div class="conteiner-comida-1">
            <img src="https://media-cdn.tripadvisor.com/media/photo-s/01/52/a0/69/nina-juane.jpg" class="img-comida" alt="">
            <h1 class="titulo-comida">Nina Juanen</h1>
            <p class="p-comida-primary">El nombre viene gracias de el siuca culantro, que es una hierba muy parecida en sabor al culantro, pero es de hojas grandes y ligeramente picante.</p>
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
                        <img src="https://elcomercio.pe/resizer/rJ_stzLvYw-NWlJkC8-pxijRX-M=/1200x900/smart/filters:format(jpeg):quality(75)/arc-anglerfish-arc2-prod-elcomercio.s3.amazonaws.com/public/EZHTSW4PEFHUBES2XS7AT6X4KM.jpg" class="img-pie-pagina" alt="">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2 class="titulo-precio">Precio</h2>
                <p>TODO UNA SEMANA|LIMA A TINGO MARÍA</p>
                <div class="box-descuento">
                    <p class="precio">S/.2999.00</p>
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