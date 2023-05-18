<!DOCTYPE html>
<html lang="es-CO">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <!---- Nav -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">Bella Atemporal</a>
        </div>
    </nav>
    <!--- Header -->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder"></h1>
                <p class="lead fw-normal text-white-50 mb-0"> Donde la elegancia perdura en el tiempo. Descubre nuestra exquisita selección de accesorios para mujeres que trascienden las tendencias pasajeras. Desde joyería delicada hasta bolsos de alta calidad, en Bella Atemporal encontrarás piezas únicas y sofisticadas que realzarán tu estilo y te harán sentir hermosa en cualquier ocasión. Nuestro compromiso es ofrecerte accesorios de calidad atemporal que reflejen tu personalidad y resalten tu belleza interior. Adéntrate en un mundo de elegancia y descubre la magia de lo eternamente hermoso en Bella Atemporal.</p>
            </div>
        </div>
    </header>
    <!--- Ciclo de productos -->
    <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    
                        <?php
                        $conexion = mysqli_connect("localhost", "root", "root", "bellaatemporal") or
                        die("Problemas con la conexión");
                        $producto = mysqli_query($conexion, "select id,nombre,valor,imagen
                            from productos") or
                        die("Problemas en el select:" . mysqli_error($conexion));
                        while ($produc = mysqli_fetch_array($producto)) {
                            ?>
                                <div class="col mb-5">
                                    <div class="card h-100">
                                        <img class="card-img-top" src="<?php echo $produc['imagen']; ?>" />
                                        <div class="card-body p-4">
                                            <div class="text-center">
                                                <h5 class="fw-bolder"><?php echo $produc['nombre']; ?></h5>
                                                <?php echo $produc['valor']; ?>
                                            </div>
                                        </div>
                                    </div>       
                                </div>                      
                            <?php
                        }
                        mysqli_close($conexion);
                        ?>
                </div>
            </div>
    </section>
</body>
</html>
