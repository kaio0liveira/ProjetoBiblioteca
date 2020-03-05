<?php
require_once("banco_emprestimo.php");

class CadastroEmprestimo extends BancoEmprestimo {

    private $cliente;
    private $dt_emprestimo;
    private $titulo_obra;
    private $dias_solic;
   

    public function getCliente(){
		return $this->cliente;
	}

	public function setCliente($cliente){
		$this->cliente = $cliente;
	}

	public function getDt_emprestimo(){
		return $this->dt_emprestimo;
	}

	public function setDt_emprestimo($dt_emprestimo){
		$this->dt_emprestimo = $dt_emprestimo;
	}

	public function getTitulo_obra(){
		return $this->titulo_obra;
	}

	public function setTitulo_obra($titulo_obra){
		$this->titulo_obra = $titulo_obra;
	}

	public function getDias_solic(){
		return $this->dias_solic;
	}

	public function setDias_solic($dias_solic){
		$this->dias_solic = $dias_solic;
	}


    public function incluir(){
        return $this->setEmp($this->getCliente(),$this->getDt_emprestimo(),$this->getTitulo_obra(),$this->getDias_solic());
    }
}
?>