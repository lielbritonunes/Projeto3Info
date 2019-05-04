<?php
if(filter_input(INPUT_POST, "idProfessor") 
		&& filter_input(INPUT_POST, "formacao") 
		&& filter_input(INPUT_POST, "ativo")
		&& filter_input(INPUT_POST, "dataAtualizacao")
	) {
	$idProfessor = filter_input(INPUT_POST, "idProfessor");
	$formacao = filter_input(INPUT_POST, "formacao");
	$ativo = filter_input(INPUT_POST, "ativo");
   $dataAtualizacao = filter_input(INPUT_POST, "dataAtualizacao");
	
	$dados = array($cgm, $ensino, $turma, $curso, $dataAtualizacao);
	
	include_once("professorCadastro.php");
	$notice = new Noticia();
	$retorno = $notice->cadastrar($dados);
	
	if ($retorno == 1){
		echo "Registro gravado com sucesso!!!";
	}else{
		echo "Erro ao gravar o registro!!!";	
	}
}else{
	echo "Campos não foram preenchido";
}	
?>