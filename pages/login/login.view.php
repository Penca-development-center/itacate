<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Accesso del restaurante</title>
    <link rel="stylesheet" href="../../css/login.css" />
    <link rel="shortcut icon" href="../../assets/ico/favicon.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../../libs/bootstrap.css" />
</head>

<body>
    <div class="container-fluid">
        <section class="row">
            <div class="col-lg-6 fondo">

            </div>
            <div class="col-12 col-lg-6 loginForm">
                <picture class="logo">
                    <img src="../../assets/ico/itacate-07.svg" alt="" width="50" height="50">
                    Itacate
                </picture>
                <div class="loginForm-title">
                    <h2>Portal del restaurante</h2>
                    <h4>Administra tu restaurante</h4>
                </div>
                <div class="card card-form">
                    <h5 class="card-header text-center py-4">
                        <strong>Portal del restaurante</strong> </h5>
                    <div class="card-body px-lg-5 pt-0 form-body">
                        <form class="text-center form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST" name="login">
                            <div class="md-form a">
                                <label for="materialLoginFormEmail"> Correo:
                                </label>
                                <input type="email" id="materialLoginFormEmail" class="form-control"
                                    placeholder="someone@example.com" name="correo" required>

                            </div>
                            <div class="md-form">
                                <label for="materialLoginFormPassword">Conreaseña: </label>
                                <input type="password" id="materialLoginFormPassword" class="form-control"
                                    placeholder="Escribe tu conraseña" name ="pass" required>
                                <br>
                                <small> Te enviamos tu conraseña a tu correo</small>
                            </div>
                            <div class="d-flex justify-content-around">
                                <div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="materialLoginFormRemember" name="recuerdame">
                                        <label class="form-check-label"
                                            for="materialLoginFormRemember">Recuérdame</label>
                                    </div>
                                </div>
                                <div>
                                    <a href="">Olvidé mi contraseña</a>
                                </div>
                            </div>
                            <button class="btn btn-rounded btn-block my-4 z-depth-0 btn-send" type="submit"> Entrar
                            </button>
                            <p> ¿Aún no te registras?
                                <a href="../../register.php">Regsitra tu restaurante</a>
                            </p>
                            <?php if(!empty($errores)) : ?>
                                <div class="errores">
                                    <ul> <?php echo $errores ?> </ul>
                                </div>
                            <?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="../../libs/jquery-3.5.1.js"></script>
    <script src="../../libs/bootstrap.js"></script>
</body>

</html>