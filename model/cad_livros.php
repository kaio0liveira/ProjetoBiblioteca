<?php
require_once("banco_livros.php");

class CadastroLivro extends BancoLivros {

    private $autor;
    private $editora;
    private $titulo_da_obra;
    private $data_cadastro;
    private $preco;
    private $obs_complementares;

    //Metodos Set
    public function setAutor($string){
        $this->autor = $string;
    }
    public function setEditora($string){
        $this->editora = $string;
    }
    public function setTitulo($string){
        $this->titulo_da_obra = $string;
    }
    public function setDtCadastro($string){
        $this->data_cadastro = $string;
    }
    public function setPreco($string){
        $this->preco = $string;
    }
    public function setObs($string){
        $this->obs_complementares = $string;
    }
    //Metodos Get
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


    public function incluir(){
        return $this->setLivro($this->getAutor(),$this->getEditora(),$this->getTitulo(),$this->getDtCadastro(),$this->getPreco(),$this->getObs());
    }
}
?>