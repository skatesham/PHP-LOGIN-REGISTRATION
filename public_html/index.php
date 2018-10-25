<?php include 'template/base.php' ?>

<?php startblock('import') ?>
<?php
session_start();
if($_SESSION['login'] == NULL || $_SESSION['user'] == NULL):
  header("location:login.php");
endif;

?>
<?php endblock() ?>


<?php startblock('title') ?>
<?php endblock() ?>

<?php startblock('article') ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Página Inicial</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Recursos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Serviços</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Configurações
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Perfil</a>
          <a class="dropdown-item" href="#">Serviços</a>
          <a class="dropdown-item" href="#">Preferencias</a>
        </div>
      </li>
    </ul>
  </div>
    <div class="navbar-collapse collapse order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="logoff.php">Logoff</a>
            </li>
        </ul>
    </div>
</nav>
<div class="row">
	<div class="ml-sm-auto col-sm-8 mr-sm-auto m-5 bg-dark">
		<p>Esse é o conteudo da página inicial</p>
		<p>Esse é o conteudo somente é acessível a usuários autenticados</p>
    <p class="text-success">Usuário <?php echo $_SESSION['user'] ?><p>
	</div>
</div>
<?php endblock() ?>