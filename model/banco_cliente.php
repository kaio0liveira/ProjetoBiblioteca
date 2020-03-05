<?php

require_once("../conexao.php");

class BancoClientes{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(HOST, USUARIO, SENHA, DB);
    }

    public function setCliente($nome,$dataNascimento,$cpf,$endereco,$email,$telefone,$obs_complementares,$suario,$senha){
        $stmt = $this->mysqli->prepare("INSERT INTO `clientes` (`nome`, `dataNascimento`, `cpf`, `endereco`, `email`,`telefone`, `obs_complementares`, `usuario`, `senha`) VALUES (?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssssss",$nome,$dataNascimento,$cpf,$endereco,$email,$telefone,$obs_complementares,$suario,$senha);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }
}

    public function getCliente(){
        $result = $this->mysqli->query("SELECT * FROM clientes");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;

    }

    public function deleteCliente($id){
        if($this->mysqli->query("DELETE FROM `clientes` WHERE `nome` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }

    }
    public function pesquisaCliente($id){
        $result = $this->mysqli->query("SELECT * FROM clientes WHERE nome='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);

    }
    public function updateLivro($nome,$dataNascimento,$cpf,$endereco,$email,$telefone,$obs_complementares,$id){
        $stmt = $this->mysqli->prepare("UPDATE `clientes` SET `nome` = ?, `dataNascimento`=?, `cpf`=?, `endereco`=?, `email`=?, `telefone` = ?, `obs_complementares` = ? WHERE `nome` = ?");
        $stmt->bind_param("ssssssss",$nome,$dataNascimento,$cpf,$endereco,$email,$telefone,$obs_complementares,$id);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }
}
?>