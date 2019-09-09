<h1>Listar Obras</h1>

<?php 
$sql = "SELECT * FROM obra";

$resultado = mysqli_query($connect, $sql);

$qtd = $resultado->num_rows;

if ($qtd >=0) { 
	print "<p>Existe(m) <b>$qtd</b> registro(s)"; ?>
	<form action="?page=solicitar-emprestimo">
		<div class='container'> 
			<table class='table table-striped table-bordered table-hover'>
				<tr>
					<th> Selecionar</th>
					<th> Titulo da Obra </th> 
					<th> Autor da Obra </th>
					<th> Edição </th>
					<th> Gênero </th>
					<th> Ano</th> 
					<th> Nº Exemplares</th>
				</tr>

				<?php while ($row = $resultado->fetch_assoc()){
					print "<tr> <td><input type='checkbox' name='solicitar-emprestimo' value=" .$row['id_obra']."></td>";
					print "<td>". $row["titulo_obra"] . "</td>";
					print "<td>". $row["autor_obra"] . "</td>";
					print "<td>". $row["edicao_obra"] . "</td>";
					print "<td>". $row["genero_obra"] . "</td>";
					print "<td>". $row["ano_obra"] . "</td>";
					print "<td>". $row["exemplar_obra"] . "</td>";
					print "</tr>";
				}	
			} else {
				print "<p>Não foram encontrado registro(s)";
			}

			?>
		</table>
		<input type='submit' value='Solicitar Emprestimo' class="btn btn-success" >
		<input type="hidden" name="page" value="solicitar-emprestimo">
