<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<body>
<h2>Cadastro de Cliente</h2>
    <?php include("menu.php") ?>
    <div class="row">
        <form method="post" action="../controller/ControllerCadastroCliente.php" id="form" name="form" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome" required autofocus>
                <input class="form-control" type="date" id="dataNascimento" name="dataNascimento" placeholder="Data de Nascimento" required>
                <input class="form-control" type="text" id="cpf" name="cpf" placeholder="CPF" required>
                <input class="form-control" type="text" id="endereco" name="endereco" placeholder="Endereço" required>
                <input class="form-control" type="text" id="email" name="email" placeholder="Email" required>
                <input class="form-control" type="text" id="telefone" name="telefone" placeholder="Telefone"required>
                <input class="form-control" type="text" id="obs_complementares" name="obs_complementares" placeholder="Observaçoes Complememtares" required>
                <input class="form-control" type="text" id="usuario" name="usuario" placeholder="Digite seu usuario para acesso" required>
                <input class="form-control" type="text" id="usuario" name="senha" placeholder="senha" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" id="cadastrar">Salvar</button>
                <a href="index.php" class="btn btn-primary">Voltar</a>
            </div>
        </form>
    </div>

    
</body>

</html>