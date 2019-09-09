<?php
switch ($_REQUEST["acao"]) {
	case 'cadastrar':
	$titulo = $_REQUEST["titulo_obra"];
	$autor = $_REQUEST["autor_obra"];
	$ano = $_REQUEST["ano_obra"];
	$edicao = $_REQUEST["edicao_obra"];
	$genero = $_REQUEST["genero_obra"];
	$exemplar = $_REQUEST["exemplar_obra"];

	$sql = "INSERT INTO obra SET titulo_obra='$titulo', autor_obra='$autor', ano_obra='$ano', edicao_obra='$edicao', genero_obra='$genero', exemplar_obra='$exemplar' ";

	$resultado = $connect->query($sql);
	
	if($resultado==true){
		print "<div class='alert alert-success'>Cadastrado com sucesso!</div>";
	}else{
		print "<div class='alert alert-danger'>Não foi possível cadastrar</div>";
	}
	print "<input type='submit' value='Voltar' class='btn btn-success' onclick=\" location.href='?page=listar-obras'\">";

	break;
	
	case 'editar':
	$sql = "UPDATE obra SET titulo_obra='".$_REQUEST["titulo_obra"]."', autor_obra='".$_REQUEST["autor_obra"]."', ano_obra='".$_REQUEST["ano_obra"]."', edicao_obra='".$_REQUEST["edicao_obra"]."', genero_obra='".$_REQUEST["genero_obra"]."', exemplar_obra='".$_REQUEST["exemplar_obra"]."' WHERE id_obra='".$_REQUEST["id_obra"]."' ";

	$result = $connect->query($sql) or die($connect->error);

	if($result==true){
		print "<div class='alert alert-success'>Editou com sucesso!</div>";
	}else{
		print "<div class='alert alert-danger'>Não foi possível editar</div>";
	}
	print "<input type='submit' value='Voltar' class='btn btn-success' onclick=\" location.href='?page=listar-obras'\">";
	
	break;
	
	case "excluir":
	$sql = "DELETE FROM obra WHERE id_obra = ". $_REQUEST["id_obra"];

	$result = $connect->query($sql) or die($connect->error);

	if($result==true){
		print "<div class='alert alert-success'>Excluiu com sucesso!</div>";
	}else{
		print "<div class='alert alert-danger'>Não foi possível excluir</div>";
	}
	print "<input type='submit' value='Voltar' class='btn btn-success' onclick=\" location.href='?page=listar-obras'\">";

	break;
	case "confirmar-emprestimo":
	$sql = "UPDATE obra SET exemplar_obra=exemplar_obra - 1 WHERE id_obra='".$_REQUEST["id_obra"]."' ";

	$result = $connect->query($sql) or die($connect->error);

	if($result==true){
		print "<div class='alert alert-success'>Empréstimo confirmado!</div>";
	}else{
		print "<div class='alert alert-danger'>Não foi possível concluir empréstimo</div>";
	}
	print "<input type='submit' value='Voltar' class='btn btn-success' onclick=\" location.href='?page=listar-obras'\">";

	break;
}
?>

<!-- <input type='submit' value='Voltar' class='btn btn-primary' onclick=\" location.href='?page=listar-obras"'\> -->
