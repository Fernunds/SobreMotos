<div id="col2">
  <h2>Anúncios em Destaque</h2>
  <div id="boxGrupo">
    <div id="wrap">
      <ul id="first-carousel" class="first-and-second-carousel jcarousel-skin-tango">
        <?php foreach($offers as $offer){?>
        <li>
          <div class="boxProduto"> <a href="<?=$root?>produto/<?=$offer->slug?>" title="" class="linkProduto"> <img src="uploads/1.jpg" alt="" width="150" height="121" />
            <span class="tituloOferta"><?=$offer->title?></span>
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
            </a> <span class="precoProduto">
            <?=price($offer->price)?>
            </span> </div>
        </li>
        <?php } ?>
        <div style="clear:both;"></div>
      </ul>
    </div>
  </div>
  <hr />
  <div class="linha-separadora-trends"></div>
  <h3>Anúncios mais Buscados</h3>
  <div id="boxGrupo">
  
    <div id="wrap">
      <ul id="second-carousel" class="first-and-second-carousel jcarousel-skin-tango">
        <?php foreach($offers as $offer){?>
        <li>
          <div class="boxProduto"> <a href="<?=$root?>produto/<?=$offer->slug?>" title="" class="linkProduto"> <img src="uploads/1.jpg" alt="" width="150" height="121" />
            <span class="tituloOferta"><?=$offer->title?></span>
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
      
            </a> <span class="precoProduto">
            <?=price($offer->price)?>
            </span> </div>
        </li>
        <?php } ?>
        <div style="clear:both;"></div>
      </ul>
    </div>
  </div>
  <hr />
  <div class="linha-separadora-trends"></div>
  <h3>Lojas ou Concessionárias</h3>
  <div id="boxGrupo">
  
    <div id="wrap">
      <ul id="carousel-avatar" class="jcarousel-skin-tango">
        <li><a href="" title="" class="avatar"><img src="<?=$root?>uploads/avatar.gif" alt="" width="100" height="60" /></a></li>
        <li><a href="" title="" class="avatar"><img src="<?=$root?>uploads/avatar-2.gif" alt="" width="100" height="60" /></a></li>
        <li><a href="" title="" class="avatar"><img src="<?=$root?>uploads/avatar.gif" alt="" width="100" height="60" /></a></li>
        <li><a href="" title="" class="avatar"><img src="<?=$root?>uploads/avatar-2.gif" alt="" width="100" height="60" /></a></li>
        <li><a href="" title="" class="avatar"><img src="<?=$root?>uploads/avatar.gif" alt="" width="100" height="60" /></a></li>
        <li><a href="" title="" class="avatar"><img src="<?=$root?>uploads/avatar-2.gif" alt="" width="100" height="60" /></a></li>
        <li><a href="" title="" class="avatar"><img src="<?=$root?>uploads/avatar.gif" alt="" width="100" height="60" /></a></li>
        <li><a href="" title="" class="avatar"><img src="<?=$root?>uploads/avatar-2.gif" alt="" width="100" height="60" /></a></li>
        <li><a href="" title="" class="avatar"><img src="<?=$root?>uploads/avatar.gif" alt="" width="100" height="60" /></a></li>
        <li><a href="" title="" class="avatar"><img src="<?=$root?>uploads/avatar-2.gif" alt="" width="100" height="60" /></a></li>
      </ul>
    </div>
    
  </div>
  
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
