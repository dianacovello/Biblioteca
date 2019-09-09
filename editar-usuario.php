<h1>Editar Usuario</h1>

<?php

$sql = "SELECT * FROM usuario WHERE id = ".$_REQUEST["id"]; 

$resultado = mysqli_query($connect, $sql);

$qtd = $resultado->num_rows;

if($qtd > 0){
	while($row = $resultado->fetch_assoc()){  ?>

		<form action="?page=salvar-usuario&acao=editar&id=<?php print $row["id"]; ?>" method="POST">			
			<div class="form-group container">			
				<form action="?page=salvar-usuario&acao=editar" method="POST">
					<div class="form-group">
						<label>Nome</label>
						<input type="text" name="nome" class="form-control" value="<?php print $row["nome"]; ?>"> 
						<label>Matrícula</label>
						<input type="number" name="matricula" class="form-control" value="<?php print $row["matricula"]; ?>">
						<label>Login</label>
						<input type="text" name="login" class="form-control" value="<?php print $row["login"]; ?>">
						<label>Senha</label>
						<input type="password" name="senha" class="form-control" value="<?php print $row["senha"]; ?>">
						<br><button type="submit" class="btn btn-primary" >Salvar</button>
					</div>
				</form>
			</div>
		<?php }
	} // fim do if
	?>