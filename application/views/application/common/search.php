<div id="col1">	
	<h3>Compre sua Moto</h3>
	<form method="get" action="<?=$root?>listar">
		<fieldset>
			<legend>Formulário de Busca</legend>
			
			<ol>
				<li>
					<label for="brand_id">Marca:</label>
					<select name="brand_id" id="brands" class="formHome">
						<option value="0" selected="selected"></option>
					</select>
				</li>
				
				<li>
					<label for="model_id">Modelo:</label>
					<select name="model_id" id="model_id" class="formHome">
						<option value="0" selected="selected"></option>
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
          </select>
        </li>
      </ol>
      <input name="buscar" type="submit" id="buscar" value="BUSCAR" class="button buttonSpecial" style="margin-left:60px;"/>
    </fieldset>
  </form>
  <hr />
  <br />
  <p><br />
    <span class="txtPublicidade">Publicidade<br />
    </span> <img src="resources/images/banner/gm250x250.jpg" alt="" width="250" height="250" /></p>
  
</div>