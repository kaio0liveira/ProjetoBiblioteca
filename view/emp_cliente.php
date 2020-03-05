<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>
<?php require_once("../controller/ControllerListarEmprestimo.php");?>
<body>
    <?php include("menu.php") ?>
    <h2>Empréstimo de Livros</h2>
    
    <div class="row">
        <form method="post" action="../controller/ControllerCadastroEmprestimo.php" id="form" name="form" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" id="cliente" name="cliente" placeholder="Cliente" required autofocus>
                <input class="form-control" type="text" id="titulo_obra" name="titulo_obra" placeholder="Titulo Obra" required>
                <label><b>Data Emprestimo:</b></label>
                <input class="form-control" type="date" id="dt_emprestimo" name="dt_emprestimo" placeholder="Data Emprestimo" required>
                <label><b>Data Devoluçao:</b></label>
                <input class="form-control" type="date" id="dias_solic" name="dias_solic" placeholder="Data Devolucao" required>
               
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" id="cadastrar">Salvar</button>
                <a href="index.php" class="btn btn-primary">Voltar</a>
            </div>
        </form>
    </div>

    
</body>

</html>