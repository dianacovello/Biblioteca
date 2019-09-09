<h1>Listar Usuarios</h1>

<?php 

	$sql = "SELECT * FROM usuario";
	
	$resultado = mysqli_query($connect, $sql);
	
	$qtd = $resultado->num_rows;
	
	if ($qtd >=0) {
		print "<p>Existe(m) <b>$qtd</b> registro(s)"; ?>
		<div class='container'> <table class='table table-striped table-bordered table-hover'>
			<tr> <th> Nome do Usuário </th>
			<th> Matrícula </th>
			<th> Ações </th> </tr>

		<?php while ($row = $resultado->fetch_assoc()){
			print "<tr> <td>" . $row["nome"] ."</td>";
				print "<td>" . $row["matricula"] ."</td>";
				print "<td> 
						<button class='btn btn-success' onclick=\" location.href='?page=editar-usuario&id=".$row["id"]."'\" > Editar <i class='fa fa-edit'></i></button>
						<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-usuario&acao=excluir&id=".$row["id"]."';}else{false;}\">Excluir <i class='fa fa-trash'></i></button> </td>" ;
			print "</tr>";
		}	
	} else {
		print "<p>Não foram encontrado registro(s)";
	}

?>

