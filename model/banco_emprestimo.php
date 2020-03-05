<?php

require_once("../conexao.php");

class BancoEmprestimo{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(HOST, USUARIO, SENHA, DB);
    }

    public function setEmp($cliente,$dt_emprestimo,$titulo_obra,$dias_solic){
        $stmt = $this->mysqli->prepare("INSERT INTO `emp_clientes` (`cliente`, `dt_emprestimo`, `titulo_obra`, `dias_solic`) VALUES (?,?,?,?)");
        $stmt->bind_param("ssss",$cliente,$dt_emprestimo,$titulo_obra,$dias_solic);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }
}

    public function getEmp(){
        $result = $this->mysqli->query("SELECT * FROM `emp_clientes`");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;

    }

    public function deleteEmp($id){
        if($this->mysqli->query("DELETE FROM `emp_clientes` WHERE `cliente` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }

    }
    public function pesquisaEmp($id){
        $result = $this->mysqli->query("SELECT * FROM emp_clientes WHERE cliente='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);

    }
    public function updateEmp($cliente,$dt_emprestimo,$titulo_obra,$dias_solic){
        $stmt = $this->mysqli->prepare("UPDATE `emp_clientes` SET `cliente` = ?, `dt_emprestimo`=?, `titulo_obra`=?, `dias_solic`=? WHERE `cliente` = ?");
        $stmt->bind_param("sssss",$cliente,$dt_emprestimo,$titulo_obra,$dias_solic,$id);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }
}
?>