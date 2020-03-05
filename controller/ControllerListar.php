<?php
require_once("../model/banco_livros.php");
class listarController{

    private $lista;

    public function __construct(){
        $this->lista = new BancoLivros();
        $this->criarTabela();

    }

    private function criarTabela(){
        $row = $this->lista->getLivro();
        foreach ($row as $value){
            echo "<tr>";
            echo "<th>".$value['id'] ."</th>";
            echo "<th>".$value['autor'] ."</th>";
            echo "<td>".$value['editora'] ."</td>";
            echo "<td>".$value['titulo_da_obra'] ."</td>";
            
            echo "<td><a class='btn btn-warning' href='editar.php?id=".$value['autor']."'>Editar</a><a class='btn btn-danger' href='../controller/ControllerDeletarLivro.php?id=".$value['autor']."'>Excluir</a></td>";
            echo "</tr>";
        }
    }
}
