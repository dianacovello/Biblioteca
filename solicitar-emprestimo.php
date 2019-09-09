<h1>Solicitação de Empréstimo</h1>

<?php 
$sql = "SELECT * FROM obra ";

$resultado = mysqli_query($connect, $sql);

$qtd = $resultado->num_rows;

if ($qtd >=0) { 
	print "<p>Existe(m) <b>$qtd</b> registro(s)"; ?>
	<form action="?page=salvar-obra&acao=confirmar-emprestimo" method="POST">
		<div class='container'> 
			<table class='table table-striped table-bordered table-hover'>
				<tr>
					<th> Titulo da Obra </th> 
					<th> Autor da Obra </th>
					<th> Edição </th>
					<th> Ano</th> 
				</tr>

				<?php while ($row = $resultado->fetch_assoc()){
					print "<tr><td>". $row["titulo_obra"] . "</td>";
					print "<td>". $row["autor_obra"] . "</td>";
					print "<td>". $row["edicao_obra"] . "</td>";
					print "<td>". $row["ano_obra"] . "</td>";
					print "</tr>";
				}	
			} else {
				print "<p>Erro. Solicite as obras novamente";
			}
			?>
		</table>
		<input type="hidden" name="page" value="?page=salvar-obra&acao=confirmar-emprestimo">
		<input type='submit' value='Confirmar Empréstimo' class="btn btn-success" >
