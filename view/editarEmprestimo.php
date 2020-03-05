<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<body>
    <?php include("menu.php") ?>
    <?php require_once("../controller/ControllerEditarRelatorio.php");?>
    <div class="row">
        <form method="post" action="../controller/ControllerEditarRelatorio.php" id="form" name="form" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" id="cliente" name="cliente" value="<?php echo $editar->getCliente(); ?>" required autofocus>
                <input class="form-control" type="date" id="dt_emprestimo" name="dt_emprestimo" value="<?php echo $editar->getDtEmprestimo(); ?>" required>
                <input class="form-control" type="text" id="titulo_obra" name="titulo_obra" value="<?php echo $editar->getTitulo(); ?>" required>
                <input class="form-control" type="date" id="dias_solic" name="dias_solic" value="<?php echo $editar->getDtDevolucao(); ?>" required>
                
                
            </div>
            <div class="form-group">
                <input type="hidden" name="id_emp" value="<?php echo $editar->getCliente();?>">
                <button type="submit" class="btn btn-success" id="editar" name="submit" value="editar">Editar</button>
            </div>
        </form>
    </div>
      



       
</body>

</html>