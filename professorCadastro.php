<?php
class Professor{
	public $idProfessor;
	public $formacao;
	public $ativo;
	public $dataAtualizacao;

	public function setIdProfessor($idProfessor){
		$this->idProfessor=$idProfessor;
	}
	public function getIdProfessor (){
		return $this->Professor;
	}
	public function setFormacao($formacao){
		$this->formacao=$formacao;
	}
	public function getFormacao(){
		return $this->Professor;
	}
	public function setAtivo($ativo){
		$this->ativo=$ativo;
	}
	public function getAtivo(){
		return $this->Professor;
	}
	public function setDataAtualizacao ($dataAtualizacao){
		$this->dataAtualizacao=$dataAtualizacao;
	}
	public function get dataAtualizacao (){
		return $this->Aluno;
	}
}
?>