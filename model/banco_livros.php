<?php

require_once("../conexao.php");
class BancoLivros{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(HOST, USUARIO, SENHA, DB);
    }

    public function setLivro($autor,$editora,$titulo_da_obra,$data_cadastro,$preco,$obs_complementares){
        $stmt = $this->mysqli->prepare("INSERT INTO `livros` (`autor`, `editora`, `titulo_da_obra`, `data_cadastro`, `preco`, `obs_complementares`) VALUES (?,?,?,?,?,?)");
        $stmt->bind_param("ssssss",$autor,$editora,$titulo_da_obra,$data_cadastro,$preco,$obs_complementares);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }
}

    public function getLivro(){
        $result = $this->mysqli->query("SELECT * FROM livros");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;

    }

    public function deleteLivro($id){
        if($this->mysqli->query("DELETE FROM `livros` WHERE `autor` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }

    }
    public function pesquisaLivro($id){
        $result = $this->mysqli->query("SELECT * FROM livros WHERE autor='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);

    }
    public function updateLivro($autor,$editora,$titulo_da_obra,$data_cadastro,$preco,$obs_complementares,$id){
        $stmt = $this->mysqli->prepare("UPDATE `livros` SET `autor` = ?, `editora`=?, `titulo_da_obra`=?, `data_cadastro`=?, `preco`=?, `obs_complementares` = ? WHERE `autor` = ?");
        $stmt->bind_param("sssssss",$autor,$editora,$titulo_da_obra,$data_cadastro,$preco,$obs_complementares,$id);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }
}
?>