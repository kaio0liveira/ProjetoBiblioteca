Learn more or give us feedback
<?php
require_once("../model/banco_emprestimo.php");
class deleta {
    private $deleta;

    public function __construct($id_emp){
        $this->deleta = new BancoEmprestimo();
        if($this->deleta->deleteEmp($id_emp)== TRUE){
            echo "<script>alert('Registro deletado com sucesso!');document.location='../view/index.php'</script>";
        }else{
            echo "<script>alert('Erro ao deletar registro!');history.back()</script>";
        }
    }
}
new deleta($_GET['id']);
?>