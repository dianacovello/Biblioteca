<?php
// Conexão
require_once 'config.php';

// Sessão
session_start();

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: index.php');
endif;

// Dados
$id = $_SESSION['id'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
mysqli_close($connect);
?>
<br>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Bem vindo a nossa Biblioteca!</h1>
    <p class="lead"> Aqui você terá uma grande diversidade de ótimos livros, de grandes autores e diversos gêneros.</p>
  </div>
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/a.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/b.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/c.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
				
</div>

