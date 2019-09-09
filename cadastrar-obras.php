<h1>Cadastrar Obras</h1>

<form action="?page=salvar-obra&acao=cadastrar" method="POST">
	<div class="form-group container">
		<label>Titulo da obra</label>
		<input type="text" name="titulo_obra" class="form-control"> 
		<label>Autor da obra</label>
		<input type="text" name="autor_obra" class="form-control">
		<label>Ano</label>
		<input type="number" name="ano_obra" class="form-control">
		<label>Edição</label>
		<input type="number" name="edicao_obra" class="form-control">
		<label>Gênero</label>
		<input type="text" name="genero_obra" class="form-control">
		<label>Número de Exemplares</label>
		<input type="number" name="exemplar_obra" class="form-control">

		<br><button type="submit" class="btn btn-primary" >Cadastrar</button>
	</div>
</form>