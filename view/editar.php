<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<body>
    <?php include("menu.php") ?>
    <?php require_once("../controller/ControllerEditar.php");?>
    <div class="row">
        <form method="post" action="../controller/ControllerEditar.php" id="form" name="form" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" id="autor" name="autor" value="<?php echo $editar->getAutor(); ?>" required autofocus>
                <input class="form-control" type="text" id="editora" name="editora" value="<?php echo $editar->getEditora(); ?>" required>
                <input class="form-control" type="text" id="titulo_da_obra" name="titulo_da_obra" value="<?php echo $editar->getTitulo(); ?>" required>
                <input class="form-control" type="date" id="data_cadastro" name="data_cadastro" value="<?php echo $editar->getDtCadastro(); ?>" required>
                <input class="form-control" type="text" id="preco" name="preco" value="<?php echo $editar->getPreco(); ?>" required>
                <input class="form-control" type="text" id="obs_complementares" name="obs_complementares" value="<?php echo $editar->getObs(); ?>" required>
            </div>
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $editar->getAutor();?>">
                <button type="submit" class="btn btn-success" id="editar" name="submit" value="editar">Editar</button>
            </div>
        </form>
    </div>
      



       
</body>

</html>