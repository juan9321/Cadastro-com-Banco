<?php
require_once("controller/ControllerCadastro.php")
?>
<!doctype html>
<html lang="en">

<head>
    <title>Sistema Web</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <a href="#" class="navbar-brand" style="color: #000">
                            <img src="img/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                            Sistema Web
                        </a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Cadastro</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="consulta.php">Consultas</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <!--As a heading-->
                <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <span class="navbar-brand">Cadastro de Usuários</spam>
                    </div>
                </nav>
            </div>
        </div>

        <!--NavBar end-->

        <div class="row">
            <div class="col">
                &nbsp;
            </div>

            <div class="row">
                <div class="col">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Email</th>
                                <th scope="col">Endereco</th>
                                <th scope="col">Bairro</th>
                                <th scope="col">Cep</th>
                                <th scope="col">Cidade</th>
                                <th scope="col">Estado</th>
                            </tr>
                        </thead>
                        <tbody id="TabelaData">
                            <?php
                            $controller = new ControllerCadastro();
                            $resultado = $controller->listar(0);
                            //print_r(resultado);
                            for ($i = 0; $i < count($resultado); $i++) {
                            ?>
                                <tr>
                                    <td scope="col"><?php echo $resultado[$i]['id']; ?></td>
                                    <td scope="col"><?php echo $resultado[$i]['email']; ?></td>
                                    <td scope="col"><?php echo $resultado[$i]['endereco']; ?></td>
                                    <td scope="col"><?php echo $resultado[$i]['bairro']; ?></td>
                                    <td scope="col"><?php echo $resultado[$i]['cep']; ?></td>
                                    <td scope="col"><?php echo $resultado[$i]['cidade']; ?></td>
                                    <td scope="col"><?php echo $resultado[$i]['estado']; ?></td>
                                    <td scope="col">
                                        <button type="button" class="btn btn-dark" onclick="location.href='editar.php?id=<?php echo $resultado[$i]['id'] ?>'"> Editar </button>
                                        <button type="button" class="btn btn-dark" onclick="location.href='deletar.php?id=<?php echo $resultado[$i]['id'] ?>'"> Deletar </button>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

</body>

</html>