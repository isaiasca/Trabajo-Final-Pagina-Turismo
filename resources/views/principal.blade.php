<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turismo</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
</body>
</html>