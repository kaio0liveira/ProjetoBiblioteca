<?php
require_once("../model/banco_emprestimo.php");

class editarControllerEmprestimo {

    private $editar;
    private $cliente;
    private $dt_emprestimo;
    private $titulo_obra;
    private $dias_solic;

    public function __construct($id_emp){
        $this->editar = new BancoEmprestimo();
        $this->criarFormulario($id_emp);
    }
    private function criarFormulario($id_emp){
        $row = $this->editar->pesquisaEmp($id_emp);
        $this->cliente            =$row['cliente'];
        $this->dt_emprestimo        =$row['dt_emprestimo'];
        $this->titulo_obra =$row['titulo_obra'];
        $this->$dias_solic  =$row['dias_solic'];
     

    }
    public function editarFormulario($cliente,$dt_emprestimo,$titulo_obra,$dias_solic,$id_emp){
        if($this->editar->updateEmp($cliente,$dt_emprestimo,$titulo_obra,$dias_solic,$id_emp) == TRUE){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/index.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }
    public function getCliente(){
        return $this->cliente;
    }
    public function getDtEmprestimo(){
        return $this->dt_emprestimo;
    }
    public function getTitulo(){
        return $this->titulo_obra;
    }
    public function getDtDevolucao(){
        return $this->dias_solic;
   
    }

$id_emp = filter_input(INPUT_GET, 'id_emp');
$editar = new editarControllerEmprestimo($id_emp);
if(isset($_POST['submit'])){
    $editar->editarFormulario($_POST['cliente'],$_POST['dt_emprestimo'],$_POST['titulo_obra'],$_POST['dias_solic'],$_POST['id_emp']);
}
?>