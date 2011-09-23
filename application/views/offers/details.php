<div id="offer_detailsFull">
<div id="breadcrumb"> <b>Bread Crumb Link</b> <img src="<?=$root?>resources/images/iconArrowBack.gif" /> <a href="#" title="Voltar ao Resultado da Busca" class="linkBreadcrumb">Voltar ao Resultado da Busca</a><span>&nbsp;|&nbsp;</span>
  <ul>
    <li><a href="" class="linkBreadcrumb" title="<?=$offers[0]->brand;?>">
      <?=$offers[0]->brand;?>
      </a><span>&nbsp;&gt;&nbsp;</span></li>
    <li><a href="" class="linkBreadcrumb" title="<?=$offers[0]->model;?>">
      <?=$offers[0]->model;?>
      </a></li>
  </ul>
  </div>
  <div style="clear:both;"></div>
  <h2>
    <?=$offers[0]->title?>
  </h2>
  <br />
  <div class="offer_images"> <img src="<?=$root?>uploads/1.jpg" border="0"/> <img src="<?=$root?>uploads/2.jpg" border="0"/> <img src="<?=$root?>uploads/3.jpg" border="0"/> <img src="<?=$root?>uploads/1.jpg" border="0"/> <img src="<?=$root?>uploads/2.jpg" border="0"/> <img src="<?=$root?>uploads/3.jpg" border="0"/> </div>
  <div class="offer_data">
    <h3>Dados do Vendedor</h3>
    <div id="offer_details">
      <ul>
        <li style="width:538px;"> <strong>Nome:</strong>&nbsp; <a href="<?=$root?>perfil/<?=$offers[0]->alias?>">
          <?=$offers[0]->user_name?>
          </a> </li>
        <li style="width:538px;"> <strong>Telefone:</strong> <a href="javascript:telephone('<?=$offers[0]->alias?>');" title="Ver Telefone">Ver Telefone</a> </li>
      </ul>
    </div>
    <br />
    <br />
    <br />
    <br />
    <h3>Detalhes do Produto</h3>
    <div id="offer_details">
      <ul>
        <li style="width:538px;"><strong>Marca:</strong>
          <?=$offers[0]->brand;?>
        </li>
        <li style="width:538px;"><strong>Modelo:</strong>
          <?=$offers[0]->model;?>
        </li>
        <li><strong>Combustível:</strong>
          <?=$offers[0]->fuel;?>
        </li>
        <li><strong>Cor:</strong>
          <?=$offers[0]->color;?>
        </li>
        <li><strong>Procedência:</strong>
          <?=$offers[0]->origin;?>
        </li>
        <li><strong>Estado:</strong>
          <?=$offers[0]->state;?>
        </li>
        <li><strong>Cidade:</strong>
          <?=$offers[0]->city;?>
        </li>
        <li><strong>Ano:</strong>
          <?=$offers[0]->model_year;?>
          /
          <?=$offers[0]->factory_year;?>
        </li>
        <li><strong>Km:</strong>
          <?=$offers[0]->mileage;?>
        </li>
        <li><strong>Final da Placa:</strong>
          <?=plate($offers[0]->plate);?>
        </li>
		
		<li>
			<strong>Financiamento:</strong>
			<? if($offers[0]->is_funding){ ?>
				<span>Sim</span>
			<? } else { ?>
				<span>Não</span>
			<? } ?>
        </li>

		<li>&nbsp;</li>
      </ul>
    </div>
    <div style="clear:both;"></div>
    <div class="offer_price">
      <?=price($offers[0]->price);?>
    </div>
  </div>
  <div style="clear:both;"></div>
  <h3>Descrição do Produto</h3>
  <div class="offer_description">
    <?=$offers[0]->description?>
  </div>
  <br />
  <h3>Considerações sobre o Produto</h3>
  <div class="offer_consideration">
    <?=$offers[0]->consideration?>
  </div>
  <br />

<div id="user_telephone" class="dialog" title="Telefone do Vendedor" style="display:none;">
	<br />
	<div>Contate o vendedor pelo telefone.</div>
	
	<br />
	
	<div style="float:left;">
		<img src="<?=$root?>resources/images/telephone.png" border="0"/>
	</div>
	
	<div style="font-size:24px;margin-top:20px;margin-left:150px;">
		<ul>
			<li><img src="<?=$root?>resources/images/telefone.gif" border="0"/> (11) 6082-4425</li>
		</ul>
	</div>
	
	<div style="font-size:11px;margin-top:20px;margin-left:150px;">
	Onerfiwb erfwuerfgu ef werfguygw erfwrefg wyeurfguiyw gerfg wuergfu wgerfg wugre fuwgerifg wigerfugw.
	wegrf wgrefugwerufg wegrf qwhf78134g h34fh qehfg84noqcy3drjqywo4r q ey8rgqow r81g34f8 g24fql ewfq we.
	<br /><br />
	
	<b>Yaih fwigfug fuwefug usdfh fgysdf!</b>
	</div>
</div>
