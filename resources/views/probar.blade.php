<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
        <div class="conteiner-menu">
            <div>

            </div>
        </div>
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
<style> 
        
        .titulo-sitios{
            margin-top: 50px;
            text-align: center;
        }
        .titulo-buscado{
            font-size: 35px;
            font-family: "Garamod", cursive;
            
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
            height: 500px;
            border: 1px solid #001D6E;
            background-color: transparent;
            margin: 5px;
            
        }
        .conteiner-sitios-3{
            display: inline-block;
            margin-top: 15px;
            width: 500px;
            height: 470px;
            border: 1px solid #001D6E;
            background-color: transparent;
            margin: 5px;
            
        }
        .titulo-hua{
            font-size: 33px;
            color: #069A8E;
            font-family: "Garamod", cursive;
            text-align: center;
            margin-top: 5px;
        }
        .p-hua{
            font-size: 19px;
            text-align: center;
            margin-top: 10px;
            font-family: "didot";
            
        }

        .btn-neon{
            position: relative;
            display: inline-block;
            padding: 10px 25px;
            color: black;
            letter-spacing: 3px;
            font-size: 25px;
            text-decoration: none;
            overflow: hidden;
            transition: 0.2s;
            margin-left: 180px;
            margin-right: 180px;
            background-color: skyblue;
            border-radius: 5px;

        }
        .btn-neon:hover{
            background: #a945c7;
            box-shadow: 0 0 10px #a945c7, 0 0 40px #a945c7, 0 0 80px #a945c7;
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
            <h1 class="titulo-hua">HUÁNUCO</h1>
            <p class="p-hua">Ciudad con el mejor clima del mundo</p>
            <a href="" class="btn-neon">
                <span id="span1"></span>
                <span id="span2"></span>
                <span id="span3"></span>
                <span id="span4"></span>
                vamos
            </a>
        </div>
        <div class="conteiner-sitios-1">
            <img src="https://www.turiweb.pe/wp-content/uploads/2020/07/tumbes-160720.jpg" class="img-sitios" alt="">
            <h1 class="titulo-hua">TUMBES</h1>
            <p class="p-hua">Entre manglares y ballenas</p>
        </div>
        <div class="conteiner-sitios-2">
            <img src="https://www.magellanmag.com/blog/wp-content/uploads/2020/08/Trujillo2.jpg" class="img-sitios" alt="">
            <h1 class="titulo-hua">TRUJILLO</h1>
            <p class="p-hua">Bienvenidos a la ciudad blanca</p>
        </div>
        <div class="conteiner-sitios-2">
            <img src="https://elcomercio.pe/resizer/rJ_stzLvYw-NWlJkC8-pxijRX-M=/1200x900/smart/filters:format(jpeg):quality(75)/arc-anglerfish-arc2-prod-elcomercio.s3.amazonaws.com/public/EZHTSW4PEFHUBES2XS7AT6X4KM.jpg" class="img-sitios" alt="">
            <h1 class="titulo-hua">TINGO MARÍA</h1>
            <p class="p-hua">Ciudad de la bella durmiente</p>
        </div>
        <div class="conteiner-sitios-3">
            <img src="https://media.viajando.travel/p/6c685a37a1c8611b51532b6d1ee3b53c/adjuntos/277/imagenes/000/423/0000423605/1200x675/smart/cuscojpeg.jpeg" class="img-sitios" alt="">
            <h1 class="titulo-hua">CUZCO</h1>
            <p class="p-hua">Imperio viviente</p>
        </div>
        <div class="conteiner-sitios-3">
            <img src="https://1.bp.blogspot.com/-2Ffhhra459M/YSvG3Cl1lSI/AAAAAAABwJs/SYaXc5FfFOMhjY1V2lgy_PEkQ60d5Gp7ACLcBGAsYHQ/s640/nasca-plaza.jpg" class="img-sitios" alt="">
            <h1 class="titulo-hua"> NAZCA</h1>
            <p class="p-hua">Bienvenidos a los gigantescos geoglifos</p>
        </div>
    </div>
</body>
</html>