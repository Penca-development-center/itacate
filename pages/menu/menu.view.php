<?php

        try {
                $host ="localhost";
                $userName="root";
                $password="Penca.1234";
			    $dbName="itacate";

                $dsn = "mysql:host=".$host.";dbname=".$dbName.";";
                $pdo = new PDO ($dsn, $userName, $password);
            } catch (PDOException $e) {
                //throw $th;
                echo "Error: ". $e->getMEssage();
            }

            $statement = $pdo->prepare("SELECT * FROM categorias");
            $statement->execute(array());
            $resultado = $statement->fetchAll();
            // print_r($resultado);

            $secondStatement = $pdo->prepare("SELECT * FROM secciones");
            $secondStatement->execute(array());
            $result = $secondStatement->fetchAll();
            // print_r($result);

            $tirdStatement = $pdo->prepare("SELECT * FROM productos");
            $tirdStatement->execute(array());
            $res = $tirdStatement->fetchAll();
            // print_r($res);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Mi men&uacute;</title>
    <link rel="stylesheet" href="../../css/profile.css" />
    <link rel="shortcut icon" href="../../assets/ico/favicon.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../../libs/bootstrap.css" />
    <link rel="stylesheet" href="../../libs/dataTables.bootstrap4.min.css">
</head>
<body>
    <div class="container-fulid">
    
        <header class="header row">
            <nav class="navbar navbar-expand-lg">
                <picture class="logo navbar-brand">
                    <img src="../../assets/ico/itacate-18.svg" alt="" width="30">
                    Itacate </picture>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <img src="../../assets/ico/itacate-18.svg" alt="" width="50" height="50" class="navbar-toggler-icon" />
                </button>
                <div class="menuWrapper collapse navbar-collapse" id="navbarNav">
                    <ul class="menu navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="#agregar"> Crear </a></li>
                        <li class="nav-item"><a class="nav-link" href="#modificar"> Modificaar men&uacute; </a></li>
                        <li class="nav-item"><a class="nav-link" href="#secciones"> Secciones y categorias </a></li>
                        <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal"> Ayuda </a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="../closeSession.php"> Salir</a>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </header>

        <section class="row">
            <article class="col-12 col-md-3 col-lg-3 side">
                <div class="profile-info">
                    <img src="../../assets/ico/itacate-19.svg" class="profile-foto" alt="">
                <div>
                    <h4> Fray Bernardino </h4>
                    <h6> Andador Sur Plaza Rodrigo Gómez #2. <br>
                        Centro. 43990 Cd Sahagún, Higo <br>
                        <strong>lorem@gmail.com</strong>
                    </h6>
                    </div>
                    <img src="../../assets/ico/itacate-17.svg" alt="">
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="../promo/promo.php">Promociones</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../ventas/ventas.php">Ventas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pedidos/pedidos.php">Pedidos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../profile/profile.php">Perfil</a>
                    </li>
                </ul>
                <!-- <form class="form-inline buscar">
                    <input name = "" class="form-control mr-sm-2" type="search" aria-label="Search">
                    <button class="btn my-2 my-sm-0" type="submit">Buscar</button>
                </form> -->
            </article>
            <article class="col-12 col-md-9 col-lg-9">
                <div class="accordion" id="accordionExample">
                <div class="card" id="agregar">
                    <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Crear un nuevo menú
                        </button>
                    </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST" id="agregar">
                        <h3>Agregar un nuevo producto</h3>

                        <div class="form-group">
                        <label for="exampleFormControlSelect1"> Categoria </label>
                            <select name = "categoria" class="form-control" id="exampleFormControlSelect1" required>      
                                <?php foreach ($resultado as $categorias) : ?>
                                    <option value="<?php echo $categorias['id_categoria'];?>"><?php echo $categorias['valor'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>

                        <div class="form-group">
                        <label for="exampleFormControlSelect1"> Secci&oacute;n </label>
                            <select name = "seccion" class="form-control" id="exampleFormControlSelect1" required>
                                <?php foreach ($result as $secciones) : ?>
                                    <option value="<?php echo $secciones['id_seccion']?>"><?php echo $secciones['valor'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre: </label>
                            <input name = "nombre" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>

                        <!-- <div class="custom-file">
                            <h5>Foto: </h5>
                            <input name = "foto" type="file" class="custom-file-input" id="customFileLang" lang="es">
                            <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                        </div> -->

                        <div class="form-group">
                            <label for="exampleInputPassword1">Descripci&oacute;n</label>
                            <input name = "desc" type="text" class="form-control" id="exampleInputPassword1" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Precio</label>
                            <input name = "precio" type="number" class="form-control" id="exampleInputPassword1" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Agregar al men&uacute;.</button>
                        </form>
                    </div>
                    </div>
                </div>
                <div class="card" id="modificar">
                    <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Modificar
                        </button>
                    </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                          <caption>Lista de productos agregados </caption>
                            <table class="table table-hover" id="example">
                              <thead class="thead-dark">
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Descripcion</th>
                                    <th scope="col">Precio</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php foreach ($res as $productos) : ?>
                              <tr>

                                  <th scope="row"> <?php echo $productos['id_producto']; ?></th>
                                  <td><?php echo $productos['nombre']; ?></td>
                                  <td><?php echo $productos['foto']; ?></td>
                                  <td><?php echo $productos['descripcion']; ?></td>
                                  <td><?php echo $productos['precio']; ?></td>

                              </tr>
                                <?php endforeach ?>
                              </tbody>
                            </table>
                    </div>
                    </div>
                </div>
                <div class="card" id="secciones">
                    <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Categorias y secciones
                        </button>
                    </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        
                    </div>
                    </div>
                </div>
                </div>
            </article>
        </section>

                        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sobre esta sección</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad provident ex sit sunt quaerat! Assumenda excepturi maiores iure amet laboriosam, dolorem aliquid itaque nobis odit consequatur in consectetur officia nulla?
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero ad quidem ipsa voluptatibus necessitatibus quis suscipit? Reprehenderit voluptate vel assumenda voluptas nesciunt? Animi laborum, laudantium mollitia ratione quasi fugit? Omnis.</p>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum excepturi porro aliquam perspiciatis a, minima, modi adipisci maxime, officiis minus quo aperiam quae impedit veniam nulla ut veritatis neque? Aliquid.
                 Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero, laborum nobis quaerat, suscipit debitis voluptatibus dolorum ratione id cupiditate saepe vel repudiandae iste, consectetur eum et consequuntur a voluptatum omnis.</p>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum excepturi porro aliquam perspiciatis a, minima, modi adipisci maxime, officiis minus quo aperiam quae impedit veniam nulla ut veritatis neque? Aliquid.
                 Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero, laborum nobis quaerat, suscipit debitis voluptatibus dolorum ratione id cupiditate saepe vel repudiandae iste, consectetur eum et consequuntur a voluptatum omnis.</p>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum excepturi porro aliquam perspiciatis a, minima, modi adipisci maxime, officiis minus quo aperiam quae impedit veniam nulla ut veritatis neque? Aliquid.
                 Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero, laborum nobis quaerat, suscipit debitis voluptatibus dolorum ratione id cupiditate saepe vel repudiandae iste, consectetur eum et consequuntur a voluptatum omnis.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
        <script src="../../libs/jquery-3.5.1.js"></script>
        <script src="../../libs/bootstrap.js"></script>
        <script src="../../libs/dataTables.bootstrap4.min.js"></script>
        <script src="../../libs//jquery.dataTables.min.js"></script>
        <script src="./menu.js"></script>
</body>
</html>

