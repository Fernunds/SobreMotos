<h1>Perfil de <?php print($user->name);?></h1>

<?php var_dump($telephones);?>

<?php var_dump($addresses);?>

<div id="col2">
<h2>Anúncios do Vendedor</h2>
<div id="boxGrupo">
<?php foreach($offers as $offer){?>
<div class="boxProduto">
	<a href="<?=$root?>produto/<?=$offer->slug?>" title="">
		<img src="../uploads/1.jpg" alt="" width="150" height="121" />
		<?=$offer->title?><br />
		Ano: <?=$offer->model_year?>/<?=$offer->factory_year?><br />
		<?=$offer->city?>/<?=$offer->state?><br />
	</a>
		<span class="price">R$ <?=number_format($offer->price,2)?></span>
</div>
<?php } ?>

<div style="clear:both;"></div>

<p><br />Página renderizada em {elapsed_time} segundos.</p>
</div>