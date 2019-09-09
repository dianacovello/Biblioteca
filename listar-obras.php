<h1>Listar Obras</h1>

<?php 

$sql = "SELECT * FROM obra";

$resultado = mysqli_query($connect, $sql);

$qtd = $resultado->num_rows;

if ($qtd >=0) {
	print "<p>Existe(m) <b>$qtd</b> registro(s)"; ?>
	<div class='container'> <table class='table table-striped table-bordered table-hover'>
		<tr><th> Titulo da Obra </th> 
			<th> Autor da Obra </th>
			<th> Edição </th>
			<th> Gênero </th>
			<th> Ano</th> 
			<th> Nº Exemplares</th>
			<th> Ação</th>
		</tr>

		<?php while ($row = $resultado->fetch_assoc()){
		print "<tr> <td>". $row["titulo_obra"] . "</td>";
			print "<td>". $row["autor_obra"] . "</td>";
			print "<td>". $row["edicao_obra"] . "</td>";
			print "<td>". $row["genero_obra"] . "</td>";
			print "<td>". $row["ano_obra"] . "</td>";
			print "<td>". $row["exemplar_obra"] . "</td>";
			print "<td> 
				<button class='btn btn-success' onclick=\" location.href='?page=editar-obra&id_obra=".$row["id_obra"]."'\" > Editar <i class='fa fa-edit'></i></button>
				<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-obra&acao=excluir&id_obra=".$row["id_obra"]."';}else{false;}\">Excluir <i class='fa fa-trash'></i></button>";
			print "</tr>";
		}	
	} else {
	print "<p>Não foram encontrado registro(s)";
	}

	?>



