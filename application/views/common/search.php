<div class="validation_message" title="Atenção" style="display:none;">
  <h3>Selecione uma Marca</h3>
  <p><span style="float: left; margin-right: .3em;" class="ui-icon ui-icon-alert"></span>Para continuar sua busca é necessário selecionar ao menos uma <strong>Marca</strong>!</p>
</div>

<div id="col1">
  <h3>Compre sua Moto</h3>
  <div id="buscaProduto">
  <form method="POST" action="<?=$root?>buscar" id="search_form">
    <fieldset>
      <legend>Formulário de Busca</legend>
      <ol>
        <li>
          <label for="brand_id">Marca:</label>
          <select name="brand_id" id="brand_id" class="formHome">
          </select>
        </li>
        <li>
          <label for="model_id">Modelo:</label>
          <select name="model_id" id="model_id" class="formHome" style="width:170px;">
            <option value="0" selected="selected">Selecione...</option>
          </select>
        </li>
        <li>
          <label for="min_price">Preço:</label>
          <select name="min_price" id="min_price">
            <option value="" selected>de</option>
            <option value="5000">5.000</option>
            <option value="10000">10.000</option>
            <option value="15000">15.000</option>
            <option value="20000">20.000</option>
            <option value="25000">25.000</option>
            <option value="30000">30.000</option>
            <option value="35000">35.000</option>
            <option value="40000">40.000</option>
            <option value="50000">50.000</option>
            <option value="60000">60.000</option>
            <option value="70000">70.000</option>
            <option value="80000">80.000</option>
            <option value="90000">90.000</option>
            <option value="99999">100.000</option>
          </select>
          <select name="max_price" id="max_price">
            <option value="" selected="selected">até</option>
            <option value="5000">5.000</option>
            <option value="10000">10.000</option>
            <option value="15000">15.000</option>
            <option value="20000">20.000</option>
            <option value="25000">25.000</option>
            <option value="30000">30.000</option>
            <option value="35000">35.000</option>
            <option value="40000">40.000</option>
            <option value="50000">50.000</option>
            <option value="60000">60.000</option>
            <option value="70000">70.000</option>
            <option value="80000">80.000</option>
            <option value="90000">90.000</option>
            <option value="99999">100.000</option>
            <option value="999000">999.000</option>
          </select>
        </li>
        <li>
          <label for="min_year">Ano:</label>
          <select name="min_year" id="min_year">
            <option value="" selected="selected">de</option>
            <?php

						for($i=date('Y')+1; $i>1960; $i--){
							print('<option value="'.$i.'">'.$i.'</option>');
						}
						?>
          </select>
          <select name="max_year" id="max_year">
            <option value="" selected="selected">até</option>
            <?php
			for($i=date('Y')+1; $i>1960; $i--){
				print('<option value="'.$i.'">'.$i.'</option>');
			}
			?>
          </select>
        </li>
        <li>
          <label for="state_id">Estado:</label>
          <select name="state_id" class="formHome" id="state_id">
            <?php print($states);?>
          </select>
        </li>
        <li>
          <label for="city_id">Cidade:</label>
          <select name="city_id" class="formHome" id="city_id">
            <option value="0" selected="selected">Selecione...</option>
          </select>
        </li>
      </ol>
      <input name="buscar" type="submit" id="buscar" value="BUSCAR" class="button buttonSpecial" style="margin-left:60px;"/>
    </fieldset>
  </form>
  </div>
  <hr />
  <br />
  <h3>Anuncie sua Moto</h3>
  <p><a href="/cadastro" title="Anunciar" class="button buttonConfirm">Anunciar</a></p>
  <p> </p>
  <br />
  <p><a href="" title="">Loja ou Concessionária</a></p>
  <br />
  <hr />
  <p><br />
    <span class="txtPublicidade">Publicidade<br />
    </span> <img src="resources/images/banner/gm250x250.jpg" alt="" width="250" height="250" /></p>
  <br />
  <br />
  <h3>Avalie seu veículo</h3>
  <a href="http://fipe.org.br/web/indices/veiculos/default.aspx?v=m&p=52" target="_blank" title="Tabela Fipe - Avalie sua moto"><img src="resources/images/fipe.gif" /></a>
  <p><a href="http://fipe.org.br/web/indices/veiculos/default.aspx?v=m&p=52" target="_blank" title="Tabela Fipe - Avalie sua moto">Tabela Fipe</a></p>
  <hr />
</div>
