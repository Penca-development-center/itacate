<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Itacate Socio</title>
    <link rel="stylesheet" href="./css/master.css" />
    <link rel="shortcut icon" href="./assets/ico/favicon.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./libs/bootstrap.css" />
</head>

<body>
    <div class="container-fluid">
        <header class="header row">
            <nav class="navbar navbar-expand-lg">
                <picture class="logo navbar-brand">
                    <img src="./assets/ico/itacate-18.svg" alt="" width="30">
                    Itacate </picture>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <img src="./assets/ico/itacate-18.svg" alt="" width="50" height="50" class="navbar-toggler-icon" />
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="menu navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="#instruccion"> Ayuda </a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="./pages/login/login.php"> Ya soy socio </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#registro"> Registro </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <section class="section somos row">
            <article class="unete col-12 col-lg-6"
                <h2 class="unete_titlulo">
                    Únete a <br />
                    <strong>ITACATE.</strong>
                </h2>
                <p>La plataforma de comida más confiable de la región.</p>
            </article>

            <article class="registro col-12 col-lg-6" id="registro">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" id="form" name="contact">
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
                        <small id="emailHelp" class="form-text"> <strong>No compartimos tu correo con nadie
                                más.</strong></small>
                        <small> Al continuar, acepto que <strong>ITACATE</strong> entre en contacto conmigo por teléfono, e-mail o WhatsApp (incluyendo mensajes automáticos con fines comerciales). </small>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-lg btn-block btn-rounded my-4 waves-effect z-depth-0">
                            Registrarme
                        </button>
                    </div>
                </form>
            </article>
        </section>
        <section class="row info" id="info">
            <article class="col-12 col-lg-4 infoW">
                <div class="card info-card">
                    <img src="./assets/img/consume.jpeg" alt="" class="infoImg img-fluid card-img-top" />
                    <div class="card-body">
                        <h3 class="card-title">Consume Local</h3>
                        <p class="card-text">
                            En cualquier situación es mejor consumir dentro de nuestra regi&oacute;n. Apoyando a los negocios locales.
                        </p>
                    </div>
                </div>
            </article>

            <article class="col-12 col-lg-4 infoW">
                <div class="card info-card">
                    <img src="./assets/img/repartidor.jpeg" alt="" class="infoImg img-fluid card-img-top" />
                    <div class="card-body">
                        <h3 class="card-title">Estamos donde nadie mas está</h3>
                        <p class="card-text">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis
                            doloribus veniam, harum fuga ratione vero praesentium
                            consectetur commodi laudantium cupiditate fugiat repellat, iusto
                            consequuntur cumque, eum doloremque. Minima, voluptas autem?
                        </p>
                    </div>
                </div>
            </article>

            <article class="col-12 col-lg-4 infoW">
                <div class="card info-card">
                    <img src="./assets/img/pensando.jpeg" alt="" class="infoImg img-fluid card-img-top" />
                    <div class="card-body">
                        <h3 class="card-title">¿Porqúe <strong>ITACATE</strong>?</h3>
                        <p class="card-text">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis
                            doloribus veniam, harum fuga ratione vero praesentium
                            consectetur commodi laudantium cupiditate fugiat repellat, iusto
                            consequuntur cumque, eum doloremque. Minima, voluptas autem?
                        </p>
                    </div>
                </div>
            </article>
        </section>
        <section class="row section" id="instruccion">
            <div class="col-12">
                <h1>Instrucciones: </h1>
            </div>
            <div class="h-100"></div>
            <article class="col-12 col-lg-4">
                <img src="" alt="" />
                <h3>Regístrate.</h3>
                <p>Al hacer click en "Registrarme" inicia tu registro para firmar un convenio en l&iacute;nea.</p>
            </article>
            <article class="col-12 col-lg-4">
                <img src="" alt="" />
                <h3>Crea tu menú.</h3>
                <p>Desde el portal de socio de tu restaurante podr&aacute;s armar tu men&uacute;.</p>
            </article>
            <article class="col-12 col-lg-4">
                <img src="" alt="" />
                <h3>Recibe pedidos.</h3>
                <p>¡Listo! Tu restaurante ya puede recibir pedidos. R&aacute;pido y f&aacute;cil.</p>
            </article>
        </section>
        <section class="row section">
            <article class="col-12 col-lg-6">
                <h2>FAQS</h2>
                <ul>
                    <li>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia aperiam perferendis animi
                            dicta sit natus esse recusandae provident beatae, alias maiores dolorum, doloribus
                            doloremque omnis voluptas est ducimus? Nulla, est?</p>
                    </li>
                    <li>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia aperiam perferendis animi
                            dicta sit natus esse recusandae provident beatae, alias maiores dolorum, doloribus
                            doloremque omnis voluptas est ducimus? Nulla, est?</p>
                    </li>
                    <li>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia aperiam perferendis animi
                            dicta sit natus esse recusandae provident beatae, alias maiores dolorum, doloribus
                            doloremque omnis voluptas est ducimus? Nulla, est?</p>
                    </li>
                    <li>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia aperiam perferendis animi
                            dicta sit natus esse recusandae provident beatae, alias maiores dolorum, doloribus
                            doloremque omnis voluptas est ducimus? Nulla, est?</p>
                    </li>
                    <li>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia aperiam perferendis animi
                            dicta sit natus esse recusandae provident beatae, alias maiores dolorum, doloribus
                            doloremque omnis voluptas est ducimus? Nulla, est?</p>
                    </li>
                </ul>
            </article>
            <article class="col-12 col-lg-6">
                <h2>Descarga Itacate</h2>
                <img src="./assets/ico/google-play-badge.svg" alt="" class="img-thumbnail" />
            </article>
        </section>
        <footer class="footer row page-footer align-content-lg-center">

            <div class="col-12 col-lg-4 logo-footer">
                <picture>
                    <img src="" alt="" />
                    <p>Itacate</p>
                </picture>
            </div>
            <div class="col-12 col-lg-4 acerca">
                <h4>Acerca de</h4>
                <p><a href="">Legal</a> | <a href="">Privacidad</a></p>
            </div>
            <div class="col-12 col-lg-4 social">
                <h4>Redes Sociales</h4>
                <ul>
                    <li>
                        <a href="#"><img src="./assets/ico/fabeook.svg" alt="" width="25" height="25" />
                            Facebook
                        </a>
                    </li>
                    <li>
                        <a href="#"><img src="./assets/ico/instagram.svg" alt="" width="25" height="25" />
                            Instagram
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>
    <script src="./libs/jquery-3.5.1.js"></script>
    <script src="./libs/bootstrap.js"></script>
</body>

</html>