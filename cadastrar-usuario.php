<h1>Cadastrar Usuario</h1>

<form action="?page=salvar-usuario&acao=cadastrar" method="POST">
	<div class="form-group container" >
		<label>Nome</label>
		<input type="text" name="nome" class="form-control"> 
		<label>Matrícula</label>
		<input type="number" name="matricula" class="form-control">
		<label>Login</label>
		<input type="text" name="login" class="form-control">
		<label>Senha</label>
		<input type="password" name="senha" class="form-control">

		<br><button type="submit" class="btn btn-primary">Cadastrar</button>
	</div>
</form>