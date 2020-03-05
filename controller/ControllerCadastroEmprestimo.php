<?php
require_once("../model/cad_emprestimo.php");
class cadastroEmprestimoController{

    private $cadastro;

    public function __construct(){               
        $this->cadastro = new CadastroEmprestimo();
        $this->incluir();
    }

    private function incluir(){
       
        $this->cadastro->setCliente($_POST['cliente']);
        $this->cadastro->setDt_emprestimo(date('d-m-Y',strtotime($_POST['dt_emprestimo'])));
        $this->cadastro->setTitulo_obra($_POST['titulo_obra']);
        $this->cadastro->setDias_solic($_POST['dias_solic']);
      
        
        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/emp_cliente.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!, verifique se o livro não está duplicado');history.back()</script>";
        }
    }
}
new cadastroEmprestimoController();