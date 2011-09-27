<div id="offer_detailsFull">
  <div id="breadcrumb"> <b>Bread Crumb Link</b> <span class="ui-icon ui-icon-circle-arrow-w"></span> <a href="#" title="Voltar ao Resultado da Busca" class="linkBreadcrumb">Voltar ao Resultado da Busca</a><span>&nbsp;|&nbsp;</span>
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
        <li style="width:94%;"> <strong>Nome:</strong> <a href="<?=$root?>perfil/<?=$offers[0]->alias?>">
          <?=$offers[0]->user_name?>
          </a> </li>
        <li style="width:94%;"> <strong>Telefone:</strong> <a href="javascript:telephone('<?=$offers[0]->alias?>');" title="Ver Telefone">Ver Telefone</a> </li>
      </ul>
    </div>
    <hr />
    <h3>Detalhes do Produto</h3>
    <div id="offer_details">
      <ul>
        <li style="width:94%;"><strong>Marca:</strong>
          <?=$offers[0]->brand;?>
        </li>
        <li style="width:94%;"><strong>Modelo:</strong>
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
        <li> <strong>Financiamento:</strong>
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
  <hr />
  <h4>Descrição do Produto</h4>
  <div class="offer_description">
    <?=$offers[0]->description?>
  </div>
  <br />
  <hr />
  <h4>Considerações sobre o Produto</h4>
  <div class="offer_consideration">
    <?=$offers[0]->consideration?>
  </div>
  <br />
  <hr />
  <h3>Enviar Proposta</h3>

  <div id="boxGrupo">
  <fildeset>
    <form>
      <label class="" for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" />
      <br />
      <label class="" for="email">Email:</label>
      <input type="text" id="email" name="email" />
      <br />
      <label class="" for="telefone">Telefone:</label>
      <input name="ddd" type="text" id="ddd" size="4" maxlength="2"/>
      <input name="telefone" type="text" id="telefone" size="10" maxlength="8" />
      <br />
      <label class="" for="titulo">Título:</label>
      <input type="text" id="titulo" name="titulo" value="[WebDuasRodas] <?=$offers[0]->title?>"/>
      <br />
      <textarea style="width:320px;" wrap="VIRTUAL" rows="5" name="texto"></textarea>
    <br />
<input type="submit" value="Enviar" id="Enviar" class="button buttonConfirm">

    </form>
  </fildeset>
  </div>
  <br /><p>&nbsp;</p><br />
  <hr />

  <ul class="termosProduto">
    <li>• A WebDuasRodas não se responsabiliza por qualquer dano e/ou prejuízo que o usuário possa sofrer ao realizar uma negociação com outros usuários deste web site.</li>
    <li>• Cabe ao usuário certificar-se da idoneidade do anunciante e da existência e estado de conservação do veículo que pretende comprar. O usuário concorda que as eventuais negociações que vier a fazer com outros usuários deste web site serão por sua conta e risco. As vendas e entregas dos veículos anunciados a terceiros, usuários deste web site, são de inteira responsabilidade do anunciante.</li>
    <li>• A WebDuasRodas não realiza a intermediação das vendas, compras, trocas ou qualquer outro tipo de transação feita pelos usuários de seu web site. E não se responsabiliza por quaisquer danos diretos e/ou indiretos causados a terceiros, advindos da exibição dos anúncios em desacordo com as Leis Criminal, Civil e em especial ao Código Brasileiro de Defesa do Consumidor, por parte do anunciante.</li>
    </li>
  </ul>
  <hr />
  <div id="user_telephone" class="dialog" title="Telefone do Vendedor" style="display:none; text-align:center;"> <br />
    <div><strong>CONTATE O VENDEDOR PELO TELEFONE</strong></div>
    <br />
    <div style="font-size:26px;margin-top:10px;">
      <ul>
        <li><img src="<?=$root?>resources/images/telefone.gif" border="0"/> (11) 6082-4425</li>
      </ul>
    </div>
    <br />
    <br />
    <p>Ao ligar informe ter visto o anúncio na WebDuasRodas</p>
  </div>
</div>
