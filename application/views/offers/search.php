<div id="col2">
	<h2>Resultado da Busca</h2>
	
	<div>
		<?php foreach($offers as $offer){?>
			<div class="boxProduto">
				<a href="<?=$root?>produto/<?=$offer->slug?>" title="" class="linkProduto">
					<img src="uploads/1.jpg" alt="" width="150" height="121" />
					<?=$offer->title?><br />
					Ano: <?=$offer->model_year?> / <?=$offer->factory_year?><br />
					<?=$offer->city?> / <?=$offer->state?><br />
				</a>
				<span class="precoProduto">
					<?=price($offer->price)?>
				</span>
			</div>
		<?php } ?>
	</div>

	<div style="clear:both;">

</div>
<div id="col3">
<hr />
<div style="clear:both;"></div><br /><br />
<!--
<h3>Serviços</h3>
<div>
<p>serivços do site (apenas link's)</p>
</div>
<hr />
<h4>Nuvem de Tag's</h4>
<p>nuvem das palavras mais buscadas pelo site.</p>
-->
</div>
</div>
