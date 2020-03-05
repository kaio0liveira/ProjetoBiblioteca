<?php require_once("../controller/ControllerListar.php");?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
   
   
     <link rel="stylesheet" type="text/css" href="view/css/index.css">
    
</head>
<?php include("head.php"); ?> 

<body  >
<nav  class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container">
    <a class="navbar-brand" href="#">
          <img src="https://images.vexels.com/media/users/3/157545/isolated/lists/057098b4a63e172134e0f04bbbcd6e8b-icone-do-livro-escolar.png" width="50" height="50">
        </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Livros
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="cadastroLivro.php">Cadastrar</a>
          <a class="dropdown-item" href="listar.php">Consultar livros</a>
          <a class="dropdown-item" href="emp_cliente.php">Emprestimo para Clientes</a>
          <a class="dropdown-item" href="listarEmprestimo.php">Relatório de Empréstimos</a>
        </div>
      </li>
      <li class="nav-item">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Clientes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="cadastroClientes.php">Cadastrar</a>
          
        </div>
      </li>
      
    </ul>
  </div>
    </nav>
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    <h3>Biblioteca Nacional</h3>
    <div  width="10" height="800" >
    <img width: 500px; src="https://1.bp.blogspot.com/-jG3uzphnee0/U4iyopp7D3I/AAAAAAAABDc/Q71eVYncERA/s1600/Submarino-Livros-R-9-90-Descontos.jpg" align="center" width="320" height="205" />
    </div>
</body>
</html>