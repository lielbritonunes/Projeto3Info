<?php
if(filter_input(INPUT_POST, "cgm") 
		&& filter_input(INPUT_POST, "ensino") 
		&& filter_input(INPUT_POST, "turma")
		&& filter_input(INPUT_POST, "curso")
		&& filter_input(INPUT_POST, "dataAtualizacao")
	) {
	$cgm = filter_input(INPUT_POST, "cgm");
	$ensino = filter_input(INPUT_POST, "ensino");
	$turma = filter_input(INPUT_POST, "turma");
   $curso = filter_input(INPUT_POST, "curso");
   $dataAtualizacao = filter_input(INPUT_POST, "dataAtualizacao");
	
	$dados = array($cgm, $ensino, $turma, $curso, $dataAtualizacao);
	
	include_once("alunoCadastro.php");
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