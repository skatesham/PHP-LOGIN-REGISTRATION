<?php include 'base.php' ?>

<?php startblock('import') ?>
<?php endblock() ?>

<?php startblock('title') ?>
   Página Inicial
<?php endblock() ?>

<?php startblock('article') ?>
<div class="row">
	<div class="ml-sm-auto col-sm-4 mr-sm-auto">
<ul class="list-group">
<?php
for ($cont = 0; $cont <= 10; $cont++):
	echo strtoupper("<li class='list-group-item' >O contador é ".($cont*2).'</li>');
endfor;

?>
</ul>
</div>
</div>
<?php endblock() ?>