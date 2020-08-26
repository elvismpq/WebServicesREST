<?php
if(!isset($_GET["id"]))
{
    header("Location: https://bccf7481c751.ngrok.io/prueba2b/index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="Site.css">
    <link rel="stylesheet" href="util.css">


</head>
<body>
    <!-- start banner Area -->
<div class="banner-area">
    <div class="banner-area-bg">
        <div class="container ">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Detalles de la Película
                    </h1>
                    <p class="text-white link-nav">
                        <a href="index.php">Películas </a><span class="text-white">-></span><a href="#"> Detalles</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End banner Area-->
<section class="m-t-30 m-b-40">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <dl class="dl-horizontal">
                    <?php
                    //Ejemplo de API
                    $apiResult = 'https://bccf7481c751.ngrok.io/prueba/marvel/Peliculas/'.$_GET['id'];
                    $data = json_decode( file_get_contents($apiResult), true );
                    ?>
                    <dt>
                        Nombre de la Película:
                    </dt>

                    <dd>
                        <?php
                        echo $data['titulo'];
                        ?>
                    </dd>

                    <dt>
                        Género:
                    </dt>

                    <dd>
                        <?php
                        echo $data['genero'];
                        ?>
                    </dd>

                    <dt>
                        Idioma:
                    </dt>

                    <dd>
                        <?php
                        echo $data['idioma'];
                        ?>
                    </dd>

                    <dt>
                        Duración:
                    </dt>

                    <dd>
                        <?php
                        echo $data['duracion'];
                        ?>
                    </dd>

                    <dt>
                        Calificación:
                    </dt>

                    <dd>
                        <?php echo $data['calificacion']; ?> estrellas
                    </dd>

                    <dt>
                        Resumen:
                    </dt>
                    
                    <dd>
                        <?php
                        echo $data['resumen'];
                        ?>
                    </dd>

                    <dt>
                        Año de producción
                    </dt>

                    <dd>
                        <?php
                        echo $data['anioProduccion'];
                        ?>
                    </dd>

                    <dt>
                        Formato:
                    </dt>

                    <dd>
                        <?php
                        echo $data['formato'];
                        ?>
                    </dd>

                    <dt>
                        Director:
                    </dt>

                    <dd>
                        <?php
                        echo $data['director'];
                        ?>
                    </dd>

                    <dt>
                        Clasificación:
                    </dt>

                    <dd>
                        <?php
                        echo $data['clasificacion'];
                        ?>
                    </dd>                  
                </dl>

            </div>
            <div class="col-md-6 abs-center p-l-70">                
                <img src="<?php echo $data['enlace']; ?>" alt="Imagen" width="500px" height="650px" />
            </div>
        </div>       
    </div>
</section>

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>