<html lang="pt-BR">
<head>
  <title>Sistema de Bibliotecas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap.min.css">    
  <link rel="stylesheet" href="css/font-awesome.min.css">

</head>
<body>

  <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="inicio.php"> <i class="fa fa-2x fa-book" aria-hidden="true"></i> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link" href="inicio.php">Pagina Inicial</a>
        </li>
        <li class="nav-item active dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuario</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="inicio.php?page=cadastrar-usuario">Cadastrar</a>
            <a class="dropdown-item" href="logout.php">Sair</a>
            <a class="dropdown-item" href="inicio.php?page=listar-usuario">Listar</a>
          </div>
        </li>
        <li class="nav-item active dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Obras</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="inicio.php?page=cadastrar-obras">Cadastrar</a>
            <a class="dropdown-item" href="inicio.php?page=listar-obras">Listar</a>
          </div>
        </li>
        <li class="nav-item active dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Emprestimo</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="inicio.php?page=buscar-obras">Buscar obras</a>
            <a class="dropdown-item" href="inicio.php?page=solicitar-emprestimo">Solicitar obras</a>
          </div>
        </li>
		
      </ul>
    </div>
  </nav>


  <div>
    <?php
    include("config.php");
    switch(@$_REQUEST["page"]){
      case "cadastrar-usuario":
      include("cadastrar-usuario.php");
      break;
      case "login":
      include("login.php");
      break;
      case "listar-usuario":
      include("listar-usuario.php");
      break;
      case "cadastrar-obras":
      include("cadastrar-obras.php");
      break;
      case "listar-obras":
      include("listar-obras.php");
      break;
      case "salvar-obra":
      include("salvar-obra.php");
      break;
      case "salvar-usuario":
      include("salvar-usuario.php");
      break;
      case "editar-obra":
      include("editar-obra.php");
      break;
      case "editar-usuario":
      include("editar-usuario.php");
      break;
      case "buscar-obras":
      include("buscar-obras.php");
      break;
      case "solicitar-emprestimo":
      include("solicitar-emprestimo.php");
      break;


      default:
      include("home.php");
    }
    ?>
  </div>

  <script src="js/jquery-3.2.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>