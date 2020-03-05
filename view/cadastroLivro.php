<!DOCTYPE HTML>
<?php require_once("../controller/ControllerListar.php");?>
<html>
<?php include("head.php") ?>

<body>
</nav>

 
    <?php include("menu.php") ?>
    <div class="row">
        <form method="post" action="../controller/ControllerCadastroLivro.php" id="form" name="form" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" id="autor" name="autor" placeholder="Autor do Livro" required autofocus>
                <input class="form-control" type="text" id="editora" name="editora" placeholder="Editora" required>
                <input class="form-control" type="text" id="titulo_da_obra" name="titulo_da_obra" placeholder="Titulo" required>
                <input class="form-control" type="date" id="data_cadastro" name="data_cadastro" placeholder="Data Cadastro" required>
                <input class="form-control" type="text" id="preco" name="preco" placeholder="Preço"required>
                <input class="form-control" type="text" id="obs_complementares" name="obs_complementares" placeholder="Observaçoes Complememtares" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" id="cadastrar">Cadastrar</button>
                <a href="index.php" class="btn btn-primary">Voltar</a>
            </div>
        </form>
    </div>

    
</body>

</html>