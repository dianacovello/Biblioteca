<h1>Editar obra</h1>

<?php
$sql = "SELECT * FROM obra WHERE id_obra = ".$_REQUEST["id_obra"]; 

$result = $connect->query($sql) or die($connect->error);

$qtd = $result->num_rows;



if($qtd > 0){
	while($row = $result->fetch_assoc()){  ?>

		<form action="?page=salvar-obra&acao=editar&id_obra=<?php print $row["id_obra"]; ?>" method="POST">		
			<div class="form-group container" >
				<label>Titulo da obra</label>
				<input type="text" name="titulo_obra" class="form-control" value="<?php print $row["titulo_obra"]; ?>"> 
				<label>Autor da obra</label>
				<input type="text" name="autor_obra" class="form-control" value="<?php print $row["autor_obra"]; ?>">
				<label>Ano</label>
				<input type="number" name="ano_obra" class="form-control" value="<?php print $row["ano_obra"]; ?>">
				<label>Edição</label>
				<input type="number" name="edicao_obra" class="form-control" value="<?php print $row["edicao_obra"]; ?>">
				<label>Gênero</label>
				<input type="text" name="genero_obra" class="form-control" value="<?php print $row["genero_obra"]; ?>">
				<label>Número de Exemplares</label>
				<input type="number" name="exemplar_obra" class="form-control" value="<?php print $row["exemplar_obra"]; ?>">
				
				<br><button type="submit" class="btn btn-primary">Salvar</button>
			</div>
		</form>
	<?php }
	} // fim do if
	?>