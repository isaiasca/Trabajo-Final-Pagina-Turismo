<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turismo</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="antialiased">
    <!--comienzo de encabezado-->
        <style>
            body{
                background-color: #0a1a2a;
            }
            #login{
                text-align: right;
                margin-right: 90px;
                text-decoration: none;
            }
            #conteiner-encabezado{
                text-align: center;
                margin-top: -50px;
                margin-bottom: -20px;
                
            }
            .titulo-encabezado{
                font-size: 19px;
                text-decoration: none;
                padding-left: 15px;
            }
            #conteiner-login{
                font-size: 20px;
                text-decoration: none;
                padding-left: 14px;
                padding-right: 14px;
                border: 1px solid #1f53c5;
                text-align: center;
                margin: 10px;
                box-shadow: 0px 0px 5px  #1f53c5;
            }
            .img-header{
                width: 15%;
                height: 80px;
                margin-top: -50px;
                margin-bottom: -15px;
                margin-left: 40px;
            }
            #encabezado{
                background-color: #0a141d;
            }
        </style>
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
                <div id="conteiner-encabezado">
                        <a href="http://127.0.0.1:8000/principal" class="titulo-encabezado">HOME</a>
                        <a href="#" class="titulo-encabezado">QUIENES SOMOS</a>
                        <a href="#" class="titulo-encabezado">OFERTA</a>
                        <a href="#" class="titulo-encabezado">TOURS</a> 
                </div>
                <div class="conteiner-img">
                    <img src="https://www.estudionovaidea.com/images/travel-zone.png" alt="" class="img-header">
                </div>
            @endif
        </div>
    <!--fin encabezado--> 

    <!--comenzamos carusel-->
    <style>
        
        .body{
            margin: 0;
            background-attachment: fixed;
        }
        .carousel-inner{
            width: 100%;
            height: 500px;
        }
        .img-caru{
            width: 100%;
            height: 500px;
        }
        .titulo-primary{
            font-size: 30px;
            font-weight: bold;
            font-family: "Garamod", cursive ;
            text-shadow: 1px 1px 1px white;
            text-align: center;
            color: black;
        }
        .p-primary{
            font-size: 18px;
            font-family: Helvetica, Arial, sans-serif;
            font-weight: bold;
            text-align: center;
            text-shadow: 1px 1px 1px blue;
            color: white;
        }
        
        .conteiner-text-primary{
            background-color: transparent;
            border: 1px solid #404258;
            box-shadow: 0 10px 30px #404258;
            width: 400px;
            height: 150px;
            border-radius: 5px;
            
        }
        .titulo-second{
            font-size: 30px;
            font-weight: bold;
            font-family: "Garamod", cursive ;
            text-shadow: 1px 1px 1px skyblue;
            text-align: center;
            color: #CDF0EA;
        }
        .p-second{
            font-size: 18px;
            font-family: Helvetica, Arial, sans-serif;
            font-weight: bold;
            text-align: center;
            text-shadow: 1px 1px 1px black;
            color: #7DEDFF;
        }
        .conteiner-text-second{
            background-color: transparent;
            border: 1px solid #7E97A6;
            box-shadow: 0 10px 30px #7E97A6;
            width: 400px;
            height: 150px;
            border-radius: 5px;
            
        }
        .titulo-third{
            font-size: 30px;
            font-weight: bold;
            font-family: "Garamod", cursive ;
            text-shadow: 1px 1px 1px skyblue;
            text-align: center;
            color: #CDF0EA;
        }
        .p-third{
            font-size: 18px;
            font-family: Helvetica, Arial, sans-serif;
            font-weight: bold;
            text-align: center;
            text-shadow: 1px 1px 1px black;
            color: #7DEDFF;
        }
        .conteiner-text-third{
            background-color: transparent;
            border: 1px solid #7E97A6;
            box-shadow: 0 10px 30px #7E97A6;
            width: 400px;
            height: 150px;
            border-radius: 5px;
        }
        
        .carousel-caption{
            top: 145px;
        }
       
        
    </style>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-interval="2000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://64.media.tumblr.com/5ff25d98433b11c21e8cbbc5d2cab4c7/tumblr_oci8wjX50N1ru4ig7o1_500.gif" class="img-caru" alt="...">
                <div class="carousel-caption d-none d-md-block ">
                    <div class="conteiner-text-primary">
                        <h5 class="titulo-primary">¡ESTÁS LISTO PARA TUS VACACIONES!</h5>
                        <p class="p-primary">Te mostramos los lugares mas populares para ir de vacaciones</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://cdn.pixabay.com/photo/2020/04/22/00/05/moon-5075057_960_720.jpg" class="img-caru" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <div class="conteiner-text-second">
                        <h5 class="titulo-second">¡VAMOS CON LA FAMILIA!</h5>
                        <p class="p-second">Vas a pasar buenos momentos con tu famalia para que cuentes a tus nietos</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images5.alphacoders.com/101/1017064.jpg" class="img-caru" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <div class="conteiner-text-third">
                        <h5 class="titulo-third">¡ESCAPATE A UN LUGAR SEGURO!</h5>
                        <p class="p-third">Tenemos todo lo que necesitas para tus vacaciones</p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- fin carusel con sus estilos -->


    <!-- comenzamos con los sitios turisticos -->
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
        
        .img-sitios{
            width: 100%;
            height: 350px; 
        }

        .sitios{
            margin-left: 245px;
            margin-right: 245px;
            margin-top: 45px;
        }
        .conteiner-sitios-1{
            display: inline-block;
            width: 500px;
            height: 550px;
            border: 1px solid #001D6E;
            background-color: transparent;
            margin: 5px;
        }
        .conteiner-sitios-2{
            display: inline-block;
            margin-top: 15px;
            width: 500px;
            height: 550px;
            border: 1px solid #001D6E;
            background-color: transparent;
            margin: 5px;
        }
        .conteiner-sitios-3{
            display: inline-block;
            margin-top: 15px;
            width: 500px;
            height: 550px;
            border: 1px solid #001D6E;
            background-color: transparent;
            margin: 5px;
        }
        .titulo-hua{
            font-size: 33px;
            color: #069A8E;
            font-family: "Garamod", cursive;
        }
        .p-hua{
            font-size: 19px;
            text-align: center;
            margin-top: 14px;
            font-family: "didot";
            color: white;
        }
        .btn-neon{
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            color: black;
            letter-spacing: 3px;
            font-size: 14px;
            text-decoration: none;
            overflow: hidden;
            transition: 0.2s;
            margin-left: 190px;
            margin-right: 190px;
            background-color: skyblue;
            border-radius: 5px;
            font-family: "Garamod", cursive;
            font-weight: bold;
            margin-top: 10px;

        }
        .btn-neon:hover{
            background: #a945c7;
            box-shadow: 0 0 5px #a945c7, 0 0 20px #a945c7, 0 0 25px #a945c7;
            transition-delay: 1s;
        }
        .btn-neon span{
            position: absolute;
            display: block;
        }
        #span1{
            top: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg,transparent,#a945c7);
        }
        .btn-neon:hover #span1{
            left: 100%;
            transition: 1s;
        }
        #span3{
            bottom: 0;
            right: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(270deg,transparent,#a945c7);
        }
        .btn-neon:hover #span3{
            right: 100%;
            transition: 1s;
            transition-delay: 0.5s;
        }
        #span2{
            top: -100%;
            right: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(180deg,transparent,#a945c7);
        }
        .btn-neon:hover #span2{
            top: 100%;
            transition: 1s;
            transition-delay: 0.25s;
        }
        #span4{
            bottom: -100%;
            left: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(360deg,transparent,#a945c7);
        }
        .btn-neon:hover #span4{
            bottom: 100%;
            transition: 1s;
            transition-delay: 0.75s;
        }
        
    </style>
    <div class="titulo-sitios">
        <h5 class="titulo-buscado">¡Estos son los destinos más buscados!</h5>
    </div>

    <div class="sitios">
        <div class="conteiner-sitios-1">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Font_del_Parc_de_San_Sebasti%C3%A1n_amb_l%27esgl%C3%A9sia_de_San_Sebasti%C3%A1n_darrera_a_Hu%C3%A1nuco.jpg/1200px-Font_del_Parc_de_San_Sebasti%C3%A1n_amb_l%27esgl%C3%A9sia_de_San_Sebasti%C3%A1n_darrera_a_Hu%C3%A1nuco.jpg" class="img-sitios" alt="">
            <a href="huanuco" class="titulo-hua"><center>HUÁNUCO</center></a>
            <p class="p-hua">Ciudad con el mejor clima del mundo</p>
            <a href="huanuco" class="btn-neon">
                <span id="span1"></span>
                <span id="span2"></span>
                <span id="span3"></span>
                <span id="span4"></span>
                Ver más
            </a>
        </div>
        <div class="conteiner-sitios-1">
            <img src="https://www.turiweb.pe/wp-content/uploads/2020/07/tumbes-160720.jpg" class="img-sitios" alt="">
            <a href="tumbes" class="titulo-hua"><center>TUMBES</center></a>
            <p class="p-hua">Entre manglares y ballenas</p>
            <a href="tumbes" class="btn-neon">
                <span id="span1"></span>
                <span id="span2"></span>
                <span id="span3"></span>
                <span id="span4"></span>
                Ver más
            </a>
        </div>
        <div class="conteiner-sitios-2">
            <img src="https://www.magellanmag.com/blog/wp-content/uploads/2020/08/Trujillo2.jpg" class="img-sitios" alt="">
            <a href="trujillo" class="titulo-hua"><center>TRUJILLO</center></a>
            <p class="p-hua">Bienvenidos a la ciudad blanca</p>
            <a href="trujillo" class="btn-neon">
                <span id="span1"></span>
                <span id="span2"></span>
                <span id="span3"></span>
                <span id="span4"></span>
                Ver más
            </a>
        </div>
        <div class="conteiner-sitios-2">
            <img src="https://elcomercio.pe/resizer/rJ_stzLvYw-NWlJkC8-pxijRX-M=/1200x900/smart/filters:format(jpeg):quality(75)/arc-anglerfish-arc2-prod-elcomercio.s3.amazonaws.com/public/EZHTSW4PEFHUBES2XS7AT6X4KM.jpg" class="img-sitios" alt="">
            <a href="tingomaria" class="titulo-hua"><center>TINGO MARÍA</center></a>
            <p class="p-hua">Ciudad de la bella durmiente</p>
            <a href="tingomaria" class="btn-neon">
                <span id="span1"></span>
                <span id="span2"></span>
                <span id="span3"></span>
                <span id="span4"></span>
                Ver más
            </a>
        </div>
        <div class="conteiner-sitios-3">
            <img src="https://media.viajando.travel/p/6c685a37a1c8611b51532b6d1ee3b53c/adjuntos/277/imagenes/000/423/0000423605/1200x675/smart/cuscojpeg.jpeg" class="img-sitios" alt="">
            <a href="cuzco" class="titulo-hua"><center>CUZCO</center></a>
            <p class="p-hua">Imperio viviente</p>
            <a href="cuzco" class="btn-neon">
                <span id="span1"></span>
                <span id="span2"></span>
                <span id="span3"></span>
                <span id="span4"></span>
                Ver más
            </a>
        </div>
        <div class="conteiner-sitios-3">
            <img src="https://1.bp.blogspot.com/-2Ffhhra459M/YSvG3Cl1lSI/AAAAAAABwJs/SYaXc5FfFOMhjY1V2lgy_PEkQ60d5Gp7ACLcBGAsYHQ/s640/nasca-plaza.jpg" class="img-sitios" alt="">
            <a href="nazca" class="titulo-hua"><center>NAZCA</center></a>
            <p class="p-hua">Bienvenidos a los gigantescos geoglifos</p>
            <a href="nazca" class="btn-neon">
                <span id="span1"></span>
                <span id="span2"></span>
                <span id="span3"></span>
                <span id="span4"></span>
                Ver más 
            </a>
        </div>
    </div>
    <!--fin sitios turisticos-->

    <!--comenzamos pie de pagina-->
    <style>
        .pie-pagina{
            width: 100%;
            background-color: #0a141d;
            margin-top: 20px;
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
            font-size: 20px;
        }
        .pie-pagina .conteiner-pie-primary .box p{
            color: #efefef;
            margin-bottom: 10px;
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
        .pie-pagina .conteiner-pie-primary .titulo-pie{
            font-weight: bold;
            font-size: 15px;
        }
    </style>
    <footer class="pie-pagina">
        <div class="conteiner-pie-primary">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="https://www.estudionovaidea.com/images/travel-zone.png" alt="">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>Contáctenos</h2>
                <p>DISPONIBLE DE LUNES A SABADO</p>
                <P class="titulo-pie">Celular:</P>
                <p>+51 987 548 217</p>
                <p>+51 985 254 188</p>
                <p class="titulo-pie">Oficina Principal:</p>
                <p>Jr. Los sauces, Huánuco</p>
            </div>
            <div class="box">
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