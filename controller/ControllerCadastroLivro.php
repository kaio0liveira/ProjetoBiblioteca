<?php
require_once("../model/cad_livros.php");
class cadastroLivroController{

    private $cadastro;

    public function __construct(){               
        $this->cadastro = new CadastroLivro();
        $this->incluir();
    }

    private function incluir(){
        $this->cadastro->setAutor($_POST['autor']);
        $this->cadastro->setEditora($_POST['editora']);
        $this->cadastro->setTitulo($_POST['titulo_da_obra']);
        $this->cadastro->setDtCadastro(date('d-m-Y',strtotime($_POST['data_cadastro'])));
        $this->cadastro->setPreco($_POST['preco']);
        $this->cadastro->setObs($_POST['obs_complementares']);
        
        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/cadastroLivro.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!, verifique se o livro não está duplicado');history.back()</script>";
        }
    }
}
new cadastroLivroController();