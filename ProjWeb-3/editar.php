<?php
require_once("controller/ControllerCadastro.php");
?>
<!doctype html>
<html lang="en">
<head>
    <title>Sistema Web </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name = "viewport" content="width=device-width, initial-scale=1">

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
                        <a class="navbar-brand" style="color: #000">
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
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="consulta.php">Consulta</a>
                            </li>
                            <li clas="nav-item">
                            <a class="navbar-brand" aria-current="page" href="index.php">Cadastro</a>
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
                        <span class="navbar-brand">Editar - Cadastro do Cliente </spam>
                    </div>
                </nav>
            </div>

            <!--NavBar end-->

            <div class="row">
                <div class="col">
                    &nbsp;
                </div>

            <!--Editar-->
            <div class="row">
            <div class="col">
             <?php
              $controller = new ControllerCadastro();
              $resultado = $controller->listar($_GET['id']);
              //print_r($resultado);
             ?>
                    <form method="post" action="controller/ControllerCadastro.php?funcao=editar&id=<?php echo $resultado[0]['id']; ?>" id="form" name="form">
                    <div class="row g-3">
                    <div class="col-md-6">
                    <label for="exampleFormControlEmail">Email:</label>
                    <input type="text" class="form-control" name="txtEmail" required id="txtEmail" value="<?php echo $resultado[0]['email'];?>">
                    </div>
                    <div class="col-md-6">
                    <label for="exampleFormControlInput1">Endereço:</label>
                    <input type="text" class="form-control" name="txtEndereco" required id="txtEndereco" value="<?php echo $resultado[0]['endereco'];?>">
                    </div>
                    <div class="col-md-6">
                    <label for="exampleFormControlInput1">CEP:</label>
                    <input type="text" class="form-control" name="txtCep" required id="txtCep" value="<?php echo $resultado[0]['cep'];?>">
                    </div>   
                    <div class="col-md-6">
                    <label for="exampleFormControlInput1">Cidade:</label>
                    <input type="text" class="form-control" name="txtCidade" required id="txtCidade" value="<?php echo $resultado[0]['cidade'];?>">
                    </div>
                    <!--<div class="col-md-6">
                        <label for="inputState" class="form-label">Estado</label>
                        <select id="cboEstado" class="form-select" name="cboEstado">
                            <option selected>Escolha</option>
                            <option> AC </option>
                            <option> AL </option>
                            <option> AP </option>
                            <option> AM </option>
                            <option> BA </option>
                            <option> CE </option>
                            <option> ES </option>
                            <option> GO </option>
                            <option> MA </option>
                            <option> MT </option>
                            <option> MS </option>
                            <option> MG </option>
                            <option> PA </option>
                            <option> PB </option>
                            <option> PE </option>
                            <option> PI </option>
                            <option> RJ </option>
                            <option> RN </option>
                            <option> RS </option>
                            <option> RO </option>
                            <option> RR </option>
                            <option> SC </option>
                            <option> SP </option>
                            <option> SE </option>
                            <option> TO </option>
                            <option> DF </option>
                        </select>
                    </div>-->
                    <div class="col-12">
                        <button type="submit" id="btnEditar" class="btn btn-dark">Editar</button>
                    </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
</div>
</body>
</html>