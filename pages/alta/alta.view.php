<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" >
    <title>Alta del restaurante</title>
    <link rel="shortcut icon" href="../../assets/ico/favicon.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../../css/alta.css">
    <link rel="stylesheet" href="../../libs/bootstrap.css" />
    <link rel="stylesheet" href="../../libs/font-awesome.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    <link rel="stylesheet" href="../../libs/dataTables.bootstrap4.min.css">
</head>
<body>
    <source src="">
    <div class="container">
        <heder class="row"></heder>
        <section class="row">
            <article class="col-12">
                <h3 class="text-center">Alta del restaurante</h3>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" id="registro" name="registro">
                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input class="form-control" type="text" name="nombre" id="nombre" placeholder="tu nombre" required />
                    </div>
                    <div class="form-group">
                        <label for="">Restaurant:</label>
                        <input class="form-control" type="text" name="restaurant" id="restaurant" placeholder="El nombre de tu restaurant"
                            required />
                    </div>
                    <div class="form-group">
                        <label for="">Telefono:</label>
                        <input class="form-control" type="number" name="telefono" id="telefono" placeholder="tu telefono" required />
                    </div>
                    <div class="form-group">
                        <label for="">Correo: </label>
                        <input class="form-control" type="email" name="correo" id="correo" placeholder="tu correo" required />
                    </div>
                    <div class="form-group">
                        <label for="">Contraseña: </label>
                        <input class="form-control" type="password" name="password" id="password" placeholder="contraseña" required />
                    </div>

                    <div class="form-group">
                        <label for="">Repetir Contraseña: </label>
                        <input class="form-control" type="password" name="rPassword" id="rPassword" placeholder="repite contraseña" required />
                    </div>

                    <?php if(!empty($errores)):?>
                        <div class='form-group'> 
                            <div class='error '>
                                <ul>
                                    <?php echo $errores; ?>
                                </ul>
                            </div> 
                        </div>
                    <?php endif?>                    

                    <div class="form-group">
                        <button class="btn btn-primary btn-lg btn-block btn-rounded my-4 waves-effect z-depth-0">
                            Registrarme
                        </button>
                    </div>

                </form>
            </article>
        </section>
    </div>
        <script src="../../libs/jquery-3.5.1.js"></script>
        <script src="../../libs/bootstrap.js"></script>
        <script src="../../libs/dataTables.bootstrap4.min.js"></script>
        <script src="../../libs//jquery.dataTables.min.js"></script>
        <script src="https://use.fontawesome.com/63c84a7d04.js"></script>
        <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
        <script src="./alta.js"></script>
</body>
</html>