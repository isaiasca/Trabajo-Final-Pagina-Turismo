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
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .form-reservar{
            width: 400px;
            background: #0a141d;
            padding: 35px;
            margin: auto;
            margin-top: 100px;
            border-radius: 4px;
            font-family: "Garamod", cursive;
            font-size: 15px;
            color: white;
            box-shadow: 7px 13px 37px #000;
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
        <input class="controls" type="text" name="correo" id="correo" placeholder="Ingresa su correo electronico">
        <input class="controls" type="text" name="tarjeta" id="tarjeta" placeholder="Ingresa su numero de tarjeta">
        <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
        <input class="btn-reservar" type="submit" value="Reservar">
    </section>
</body>
</html>