<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--comenzamos con la imagen de inicio-->
    <style>
        *{
            margin: 0 ;
            box-sizing: border-box;
        }
        .conteiner-img{
            width: 100%;
            overflow: hidden;
            position: relative;
            text-align: center;
        }
        .conteiner-img .img-principal{
            width: 100%;
            height: 600px;
            text-align: center;
        }
        .conteiner-img .titulo-cuzco{
            position: absolute;
            font-size: 25px;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }
        .conteiner-img .p-cuzco{
            position: absolute;
            font-size: 30px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }
    </style>
    <section class="conteiner-img">
        <div class="img-principal">
                <img src="https://media.viajando.travel/p/6c685a37a1c8611b51532b6d1ee3b53c/adjuntos/277/imagenes/000/423/0000423605/1200x675/smart/cuscojpeg.jpeg" class="img-cuzco" alt="">
        </div>
        <div class="conteiner-text">
            <h1 class="titulo-cuzco">CUZCO</h1>
            <P class="p-cuzco">Todo una semana|Lima a Cuzco</P>
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
            text-align: center;
            margin-top: 45px;
        }
        .conteiner-sitios-1{
            display: inline-block;
            width: 250px;
            height: 300px;
            border: 1px solid #001D6E;
            background-color: transparent;
            margin: 5px;
        }
        .conteiner-sitios-3{
            display: inline-block;
            width: 250px;
            height: 300px;
            border: 1px solid #001D6E;
            background-color: transparent;
            margin: 5px;
        }
    </style>
    <div class="titulo-sitios">
        <h5 class="titulo-buscado">¡Estos son los destinos más buscados!</h5>
    </div>
    <div class="sitios">
        <div class="conteiner-sitios-1">
            <img src="" class="img-sitios" alt="">
            <p class="p-sitios">Ciudad con el mejor clima del mundo</p>
        </div>
        <div class="conteiner-sitios-1">
            <img src="" class="img-sitios" alt="">
            <p class="p-sitios">Ciudad con el mejor clima del mundo</p>
        </div>
        <div class="conteiner-sitios-1">
            <img src="" class="img-sitios" alt="">
            <p class="p-sitios">Ciudad con el mejor clima del mundo</p>
        </div>
        <div class="conteiner-sitios-3">
            <img src="" class="img-sitios" alt="">
            <p class="p-sitios">Ciudad con el mejor clima del mundo</p>
        </div>
        <div class="conteiner-sitios-3">
            <img src="" class="img-sitios" alt="">
            <p class="p-sitios">Ciudad con el mejor clima del mundo</p>
        </div>
        <div class="conteiner-sitios-3">
            <img src="" class="img-sitios" alt="">
            <p class="p-sitios">Ciudad con el mejor clima del mundo</p>
        </div>
    </div>
</body>
</html>