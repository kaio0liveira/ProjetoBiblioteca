<?php
require_once("../model/cad_cliente.php");
class cadastroClienteController{

    private $cadastro;

    public function __construct(){               
        $this->cadastro = new CadastroCliente();
        $this->incluir();
    }

    private function incluir(){
       
        $this->cadastro->setNome($_POST['nome']);
        $this->cadastro->setDataNascimento(date('d-m-Y',strtotime($_POST['dataNascimento'])));
        $this->cadastro->setCpf($_POST['cpf']);
        $this->cadastro->setEndereco($_POST['endereco']);
        $this->cadastro->setEmail($_POST['email']);
        $this->cadastro->setTelefone($_POST['telefone']);
        $this->cadastro->setObs($_POST['obs_complementares']);
        $this->cadastro->setUsuario($_POST['usuario']);
        $this->cadastro->setSenha($_POST['senha']);
        
        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/cadastroClientes.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!, verifique se o livro não está duplicado');history.back()</script>";
        }
    }
}
new cadastroClienteController();