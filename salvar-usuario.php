<?php
switch ($_REQUEST["acao"]) {
	case 'cadastrar':
	$nome = $_REQUEST["nome"];
	$matricula = $_REQUEST["matricula"];
	$login = $_REQUEST["login"];
	$senha = $_REQUEST["senha"];

	$sql = "INSERT INTO usuario SET nome='$nome', matricula='$matricula', login='$login', senha='$senha'";

	$resultado = mysqli_query($connect, $sql);

	if($resultado==true){
		print "<div class='alert alert-success'>Cadastrado com sucesso!</div>";
	}else{
		print "<div class='alert alert-danger'>Não foi possível cadastrar</div>";
	}
	print "<input type='submit' value='Voltar' class='btn btn-success' onclick=\" location.href='?page=listar-usuario'\">";

	break;
	
	case 'editar':
	$sql = "UPDATE usuario SET nome='".$_REQUEST["nome"]."', matricula='".$_REQUEST["matricula"]."', login='".$_REQUEST["login"]."', senha='".$_REQUEST["senha"]."' WHERE id='".$_REQUEST["id"]."' ";

	$resultado = mysqli_query($connect, $sql);

	if($resultado==true){
		print "<div class='alert alert-success'>Editou com sucesso!</div>";
	}else{
		print "<div class='alert alert-danger'>Não foi possível editar</div>";
	}		
	print "<input type='submit' value='Voltar' class='btn btn-success' onclick=\" location.href='?page=listar-usuario'\">";

	break;

	case "excluir":
	$sql = "DELETE FROM usuario WHERE id = ". $_REQUEST["id"];

	$resultado = mysqli_query($connect, $sql);

	if($resultado==true){
		print "<div class='alert alert-success'>Exluiu com sucesso!</div>";
	}else{
		print "<div class='alert alert-danger'>Não foi possível excluir</div>";
	}
	print "<input type='submit' value='Voltar' class='btn btn-success' onclick=\" location.href='?page=listar-usuario'\">";
	break;
}
?>
