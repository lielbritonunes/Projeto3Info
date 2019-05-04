<?php
class Aluno{
	public $cgm;
	public $ensino;
	public $turma;
	public $curso;
	public $dataAtualizacao;

	public function setCgm($cgm){
		$this->cgm=$cgm;
	}
	public function getCgm (){
		return $this->Aluno;
	}
	public function setEnsino($ensino){
		$this->ensino=$ensino;
	}
	public function getEnsino(){
		return $this->Aluno;
	}
	public function setTurma($turma){
		$this->turma=$turma;
	}
	public function getTurma(){
		return $this->Aluno;
	}
	public function setCurso($curso){
		$this->curso=$curso;
	}
	public function getCurso(){
		return $this->Aluno;
	}
	public function setDataAtualizacao ($dataAtualizacao){
		$this->dataAtualizacao=$dataAtualizacao;
	}
	public function get dataAtualizacao (){
		return $this->Aluno;
	}
}
?>