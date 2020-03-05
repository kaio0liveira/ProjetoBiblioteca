<?php
require_once("banco_cliente.php");

class CadastroCliente extends BancoClientes{

    private $nome;
    private $dataNascimento;
    private $cpf;
    private $endereco;
    private $email;
    private $telefone;
	private $obs;
	private $usuario;
	private $senha;


    public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getDataNascimento(){
		return $this->dataNascimento;
	}

	public function setDataNascimento($dataNascimento){
		$this->dataNascimento = $dataNascimento;
	}

	public function getCpf(){
		return $this->cpf;
	}

	public function setCpf($cpf){
		$this->cpf = $cpf;
	}

	public function getEndereco(){
		return $this->endereco;
	}

	public function setEndereco($endereco){
		$this->endereco = $endereco;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getTelefone(){
		return $this->telefone;
	}

	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}

	public function getObs(){
		return $this->obs;
	}

	public function setObs($obs){
		$this->obs = $obs;
	}
	public function getUsuario(){
		return $this->usuario;
	}

	public function setUsuario($string){
		$this->usuario = $string;
	}
	public function getSenha(){
		return $this->senha;
	}

	public function setSenha($string){
		$this->senha = $string;
	}



    public function incluir(){
        return $this->setCliente($this->getNome(),$this->getDataNascimento(),$this->getCpf(),$this->getEndereco(),$this->getEmail(),
    $this->getTelefone(),$this->getObs(),$this->getUsuario(),$this->getSenha());
    }







}

?>