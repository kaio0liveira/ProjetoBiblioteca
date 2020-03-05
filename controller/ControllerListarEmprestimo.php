<?php
require_once("../model/banco_emprestimo.php");
class listarControllerEmprestimo{

    private $lista;

    public function __construct(){
        $this->lista = new BancoEmprestimo();
        $this->criarTabela();

    }

    private function criarTabela(){
        $row = $this->lista->getEmp();
        foreach ($row as $value){
            echo "<tr>";
            echo "<th>".$value['id_emp']."</th>";
            echo "<th>".$value['cliente'] ."</th>";
            echo "<td>".$value['dt_emprestimo'] ."</td>";
            echo "<td>".$value['titulo_obra'] ."</td>";
            echo "<td>".$value['dias_solic'] ."</td>";
            
            echo "<td><a class='btn btn-warning' href='editar.php?id=".$value['cliente']."'>Editar</a><a class='btn btn-danger' href='../controller/ControllerDeletarEmprestimo.php?id=".$value['cliente']."'>Excluir</a></td>";
            echo "</tr>";
        }
    }
}
