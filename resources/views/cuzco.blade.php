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
        }
        .conteiner-img{
            width: 100%;
            overflow: hidden;
            position: relative;
            text-align: center;
            
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
        }
        .Titulo-sitios{
            font-size: 25px;
            margin-top: 10px;
            text-align: center;
        }
        .p-sitios{
            font-size: 18px;
            margin-top: 10px;
        }
        
    </style>
    <div class="titulo-sitios">
        <h5 class="titulo-buscado">¡Lugares a conocer!</h5>
    </div>
    <div class="sitios">
        <div class="conteiner-sitios-1">
            <img src="https://www.machupicchu-tours-peru.com/wp-content/uploads/2014/01/cusco-1.jpg" class="img-sitios" alt="">
            <h1 class="Titulo-sitios">Plaza Armas de Cuzco</h1>
            <p class="p-sitios">♥ Ubicación: Centro de cuzco</p>
            <p class="p-sitios">♥ Entra: Libre</p>
            <p class="p-sitios"> En la plaza de armas se realizaba la celebracion del Inti Raymi.</p>
        </div>
        <div class="conteiner-sitios-1">
            <img src="https://www.raptravel.org/images01/informacion-util-del-cusco/templo-de-coricancha-city-tours-en-cusco.jpg" class="img-sitios" alt="">
            <h1 class="Titulo-sitios">Qoricancha</h1>
            <p class="p-sitios">♥ Ubicación: A 2 cuadras de plaza de armas de cuzco</p>
            <p class="p-sitios">♥ Entrada: S/15 adultos, S/8 estudiantes e niños(de 10 años)</p>
            <p class="p-sitios">Vas a poder conocermaxima expresión de arquitectura Inca.</p>
        </div>
        <div class="conteiner-sitios-1">
            <img src="https://upload.wikimedia.org/wikipedia/commons/2/2b/Cusco_Piedra_de_los_doce_angulos.jpg" class="img-sitios" alt="">
            <h1 class="Titulo-sitios">La piedra de 12 ángulos</h1>
            <p class="p-sitios">♥ Ubicacion: A 1 cuadra y media de la plaza de armas de cuzco</p>
            <p class="p-sitios">♥ Entrada: Libre</p>
            <p class="p-sitios">Se dice que si se retirará toda la cuadra se vendía abajo.</p>
        </div>
        <div class="conteiner-sitios-2">
            <img src="https://cersa.org.pe/capacitaciones/sites/default/files/Sac2.jpg" class="img-sitios" alt="">
            <h1 class="Titulo-sitios">Sacsayhuamán</h1>
            <p class="p-sitios">♥ Ubicación: Noreste de la ciudad de cuzco</p>
            <p class="p-sitios">♥ Entra: S/40 peruanos y S/70 extranjeros</p>
            <p class="p-sitios">Es una fortaleza Inca a base de rocas inmensas.</p>
        </div>
        <div class="conteiner-sitios-2">
            <img src="https://www.peru.travel/Contenido/General/Imagen/es/302/1.1/Vinicunca.jpg" class="img-sitios" alt="">
            <h1 class="Titulo-sitios">Vinicunca</h1>
            <p class="p-sitios">♥ Distancia: 3hr en carro y 40 min caminando</p>
            <p class="p-sitios">♥ Entra: S/10 peruanos y extrngeros</p>
            <p class="p-sitios">Vinicunca es famosa por sus colores similares al arcoíris.</p>
        </div>
        <div class="conteiner-sitios-2">
            <img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/Machu_Picchu%2C_Peru_%282018%29.jpg" class="img-sitios" alt="">
            <h1 class="Titulo-sitios">Machu Picchu</h1>
            <p class="p-sitios">♥ Distancia: 11 hr aproximadamente en carro</p>
            <p class="p-sitios">♥ Entra: S/10 peruanos y extrngeros</p>
            <p class="p-sitios">Una de las 7 maravillas del mundo moderno.</p>
        </div>
    </div>
</body>
</html>