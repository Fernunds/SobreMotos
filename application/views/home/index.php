<div id="col2">
  <h2>Anúncios em Destaque</h2>
  <div id="boxGrupo">
    <?php foreach($offers as $offer){?>
    <div class="boxProduto"> <a href="<?=$root?>produto/<?=$offer->slug?>" title=""> <img src="uploads/1.jpg" alt="" width="150" height="121" />
      <?=$offer->title?>
      <br />
      Ano:
      <?=$offer->model_year?>
      /
      <?=$offer->factory_year?>
      <br />
      <?=$offer->city?>
      /
      <?=$offer->state?>
      <br />
      </a> <span class="price">
      <?=price($offer->price)?>
      </span> </div>
    <?php } ?>
    <div style="clear:both;"></div>
    <p><a href="">Ver mais</a></p>
  </div>
  <hr />
  <br />
  <h3>Lojas ou Concessionárias</h3>
  <div id="boxGrupo">

    <div id="wrap">
      <ul id="mycarousel" class="jcarousel-skin-tango">
        <li><a href="" title="" class="avatar"><img src="<?=$root?>uploads/avatar.gif" alt="" width="100" height="60" /></a></li>
        <li><a href="" title="" class="avatar"><img src="<?=$root?>uploads/avatar-2.gif" alt="" width="100" height="60" /></a></li>
        <li><a href="" title="" class="avatar"><img src="<?=$root?>uploads/avatar.gif" alt="" width="100" height="60" /></a></li>
        <li><a href="" title="" class="avatar"><img src="<?=$root?>uploads/avatar-2.gif" alt="" width="100" height="60" /></a></li>
        <li><a href="" title="" class="avatar"><img src="<?=$root?>uploads/avatar.gif" alt="" width="100" height="60" /></a></li>
        <li><a href="" title="" class="avatar"><img src="<?=$root?>uploads/avatar-2.gif" alt="" width="100" height="60" /></a></li>
        <li><a href="" title="" class="avatar"><img src="<?=$root?>uploads/avatar.gif" alt="" width="100" height="60" /></a></li>
        <li><a href="" title="" class="avatar"><img src="<?=$root?>uploads/avatar-2.gif" alt="" width="100" height="60" /></a></li>
        <li><a href="" title="" class="avatar"><img src="<?=$root?>uploads/avatar.gif" alt="" width="100" height="60" /></a></li>
      </ul>
    </div>
    
  </div>
</div>
<div id="col3">
  <hr />
  <br />
  <h3>Serviços</h3>
  <div>
    <p>serivços do site (apenas link's)</p>
  </div>
  <hr />
  <h4>Nuvem de Tag's</h4>
  <p>nuvem das palavras mais buscadas pelo site.</p>
</div>
</div>
