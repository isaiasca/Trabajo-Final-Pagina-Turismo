<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Reserva</title>
</head>
<body>
    <STYle>
            #login{
                text-align: right;
                margin-right: 90px;
                text-decoration: none;
                margin-top: 35px;
            }
            #conteiner-encabezado{
                text-align: center;
                margin-bottom: -20px;
                margin-top: -20px;
            }
            .titulo-encabezado{
                font-size: 19px;
                text-decoration: none;
                padding-left: 15px;
                color: white;
                margin-top: 5px;
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
                margin-top: -30px;
                margin-left: 40px;
            }
    </STYle>
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
                    <h1 class="titulo-encabezado">PRIMERO TE TIENES QUE REGISTRAR</h1>
                </div>
                <div class="conteiner-img">
                    <img src="https://www.estudionovaidea.com/images/travel-zone.png" alt="" class="img-header">
                </div>
            @endif
    </div>
    <!--fin del encabezado-->

    <!--inicio de formulario-->
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background-color: #0a141d;
        }
        .form-reservar{
            width: 400px;
            background: #0a141d;
            padding: 35px;
            margin: auto;
            margin-top: 50px;
            border-radius: 4px;
            font-family: "Garamod", cursive;
            font-size: 15px;
            color: white;
            box-shadow: 7px 13px 37px #1f53c5;
            border: 1px solid #1f53c5;
        }
        .form-reservar h4{
            font-size: 22px;
            margin-bottom: 20px;
        }
        .controls{
            overflow: hidden;
            width: 100%;
            background: #0a141d;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 16px;
            border: 1px solid #1f53c5;
            font-family: "Garamod", cursive;
            color: white;
        }
        .form-reservar p{
            height: 40px;
            text-align: center;
            font-size: 14px;
            line-height: 40px;
        }
        .form-reservar a{
            color: white;
            text-decoration: none;
        }
        .form-reservar a:hover{
            color: white;
            text-decoration: underline;
        }
        .form-reservar .btn-reservar{
            width: 100%;
            background: #1f53c5;
            border: none;
            padding: 12px;
            color: white;
            margin: 16px 0;
            font-size: 16px;
            cursor: pointer;
        }
        .form-reservar .btn-reservar:hover{
            color: aqua;
        }

    </style>
    <section class="form-reservar">
        <h4>Formulario Reserva</h4>
        <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingresa sus nombres">
        <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingresa sus apellidos">
        <select class="controls">
            <option selected>Seleccione un lugar turistico</option>
            <option value="1">Huánuco</option>
            <option value="2">Tumbes</option>
            <option value="3">Trujillo</option>
            <option value="4">Tingo María</option>
            <option value="5">Cuzco</option>
            <option value="6">Nazca</option>
        </select>
        <input class="controls" type="text" name="celular" id="celular" placeholder="Ingresa su numero de celular">
        <input class="controls" type="text" name="tarjeta" id="tarjeta" placeholder="Ingresa su numero de tarjeta">
        <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
        <input class="btn-reservar" type="submit" value="Reservar">
        <a href="principal">Regresar</a>
    </section>
</body>
</html>