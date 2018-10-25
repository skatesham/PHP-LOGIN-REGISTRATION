<?php include 'template/base.php' ?>

<?php startblock('import') ?>

<?php endblock() ?>


<?php startblock('title') ?>
	Sistema PHP Developer
<?php endblock() ?>

<?php startblock('article') ?>
<div class="row">
	<div class="ml-sm-auto col-sm-4 mr-sm-auto text-center">
		<form class="form-signin" action="autenticate.php" method="POST">
		<img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
		<h1 class="h3 mb-3 font-weight-normal">Login</h1>
		<div class="mb-5"></div>
		<label for="inputEmail" class="sr-only">Nome de usuário</label>
		<input type="text" name="user" id="inputEmail" class="form-control" placeholder="Nome de usuário" required >
		<div class="mb-5"></div>
		<label for="inputPassword" class="sr-only">Senha:</label>
		<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Senha" required>
		<div class="checkbox mb-3" style="display: none;">
			<label>
			<input type="checkbox" value="remember-me"> Remember me
			</label>
		</div>
		<div class="mb-5"></div>
		<button class="btn btn-lg btn-success btn-block" type="submit">Login</button>
		
		
		</form>
		<div class="mb-5"></div>
		<form action="registro.php">
			<button class="btn btn-lg btn-warning btn-block" type="submit">Registro</button>
		</form>
		
		<p class="mt-5 mb-3 text-muted">&copy; Sham Vinicius Fiorin 2018-2019</p>
	</div>
</div>
<?php
session_start();
if(isset($_SESSION['failin'])){
	if($_SESSION['failin']){
		echo '<script language="javascript">';
		echo 'alert("Dados inseridos não conferem com nenhum registro de usuário!")';
		echo '</script>';
	}
}
?>
<?php endblock() ?>
<script type="text/javascript"></script>