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
    <h3>Vendedor</h3>
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
        <li><strong>Placa:</strong>
          <?=$offers[0]->plate;?>
        </li>
        <li><strong>Financiamento:</strong>
          <?=$offers[0]->is_funding;?>
        </li>
      </ul>
    </div>
    <div style="clear:both;"></div>
    <div class="offer_price">R$
      <?=number_format($offers[0]->price,2);?>
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

