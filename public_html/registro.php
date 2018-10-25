<?php include 'template/base.php' ?>

<?php startblock('import') ?>
<?php include '../controller/registro.php' ?>
<?php endblock() ?>


<?php startblock('title') ?>
	Sistema PHP Developer
<?php endblock() ?>

<?php startblock('article') ?>
<div class="row">
	<div class="ml-sm-auto col-sm-4 mr-sm-auto text-center">
		<form class="form-signin" action="<?php echo $route; ?>"" method="POST">
		<img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
		<h1 class="h3 mb-3 font-weight-normal">Registro</h1>
		<div class="mb-5"></div>
		<label for="inputEmail" class="sr-only">Nome de usuário</label>
		<input type="text" name="user" id="user" class="form-control" placeholder="Nome de usuário" required >
		<div class="mb-5"></div>
		<label for="inputPassword" class="sr-only">Senha:</label>
		<input type="password" name="password" id="pass" class="form-control" placeholder="Senha" required>
		<div class="checkbox mb-3" style="display: none;">
			<label>
			<input type="checkbox" value="remember-me"> Remember me
			</label>
		</div>
		<div class="mb-5"></div>
		<button class="btn btn-lg btn-success btn-block" type="submit" name="registro">Registrar</button>
		</form>
		<div class="mb-5"></div>
		<form action="login.php">
			<button class="btn btn-lg btn-danger btn-block" type="submit">Login</button>
		</form>
		<p class="mt-5 mb-3 text-muted">&copy; Sham Vinicius Fiorin 2018-2019</p>
	</div>
</div>
<?php endblock() ?>
<script type="text/javascript">//fail();</script>