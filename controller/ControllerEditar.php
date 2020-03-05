<?php
require_once("../model/banco_livros.php");

class editarController {

    private $editar;
    private $autor;
    private $editora;
    private $titulo_da_obra;
    private $data_cadastro;
    private $preco;
    private $obs_complementares;

    public function __construct($id){
        $this->editar = new BancoLivros();
        $this->criarFormulario($id);
    }
    private function criarFormulario($id){
        $row = $this->editar->pesquisaLivro($id);
        $this->autor            =$row['autor'];
        $this->editora        =$row['editora'];
        $this->titulo_da_obra =$row['titulo_da_obra'];
        $this->data_cadastro  =$row['data_cadastro'];
        $this->preco         =$row['preco'];
        $this->obs_complementares   =$row['obs_complementares'];

    }
    public function editarFormulario($autor,$editora,$titulo_da_obra,$data_cadastro,$preco,$obs_complementares,$id){
        if($this->editar->updateLivro($autor,$editora,$titulo_da_obra,$data_cadastro,$preco,$obs_complementares,$id) == TRUE){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/index.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }
    public function getAutor(){
        return $this->autor;
    }
    public function getEditora(){
        return $this->editora;
    }
    public function getTitulo(){
        return $this->titulo_da_obra;
    }
    public function getDtCadastro(){
        return $this->data_cadastro;
    }
    public function getPreco(){
        return $this->preco;
    }
    public function getObs(){
        return $this->obs_complementares;
    }


}
$id = filter_input(INPUT_GET, 'id');
$editar = new editarController($id);
if(isset($_POST['submit'])){
    $editar->editarFormulario($_POST['autor'],$_POST['editora'],$_POST['titulo_da_obra'],$_POST['data_cadastro'],$_POST['preco'],$_POST['obs_complementares'],$_POST['id']);
}
?>