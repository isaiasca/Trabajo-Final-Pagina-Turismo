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
            color: white;
        }
        .p-primary{
            color: white;
        }
        .conteiner-text-primary{
            background-color: transparent;
            border: 2px solid #404258;
            width: 400px;
            height: 100px;
            margin-top: 100px;
            left: 100px;
        }
        .carousel-caption{
            top: 45px;
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
            <img src="http://www.solofondos.com/wp-content/uploads/2018/06/Fondos-de-pantalla-playa-atardecer.jpg" class="img-caru" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <div class="conteiner-text-primary">
                    <h5 class="titulo-primary">First slide label</h5>
                    <p class="p-primary">Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            </div>
            <div class="carousel-item">
            <img src="https://cdn.pixabay.com/photo/2020/04/22/00/05/moon-5075057_960_720.jpg" class="img-caru" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <div class="conteiner-text-second">
                    <h5 class="titulo-second">Second slide label</h5>
                    <p class="p-second">Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            </div>
            <div class="carousel-item">
            <img src="https://images5.alphacoders.com/101/1017064.jpg" class="img-caru" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <div class="conteiner-text-third">
                    <h5 class="titulo-third">Third slide label</h5>
                    <p class="p-third">Some representative placeholder content for the third slide.</p>
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