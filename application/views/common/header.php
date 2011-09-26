<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title><?=$params['system_title']?></title>
	
	<link rel="stylesheet" type="text/css" href="<?=$root;?>resources/stylesheets/application/stylesheet.css"/>
	<link rel="stylesheet" type="text/css" href="<?=$root;?>resources/stylesheets/jqueryui/blitzer/jquery-ui-1.8.14.custom.css"/>
	<link rel="stylesheet" type="text/css" href="<?=$root;?>resources/javascripts/galleria/themes/classic/galleria.classic.css"/>
	
	<script type="text/javascript" src="<?=$root;?>resources/javascripts/jquery.js"></script>
	<script type="text/javascript" src="<?=$root;?>resources/javascripts/jqueryui.js"></script>
	<script type="text/javascript" src="<?=$root;?>resources/javascripts/galleria/galleria-1.2.4.js"></script>
	<script type="text/javascript" src="<?=$root;?>resources/javascripts/jquery.jcarousel.min.js"></script>
	<script type="text/javascript" src="<?=$root;?>resources/javascripts/funcoes.js"></script>

	<script type="text/javascript">
	$(function(){
		Galleria.loadTheme('<?=$root?>resources/javascripts/galleria/themes/classic/galleria.classic.min.js');

		$('.offer_images').galleria({
			transition:'fade',
			width:400,
			height:300,
			autoplay:3000,
			lightbox:true,
			showImagenav:false,
			showCounter:false,
			showInfo:false
		});
		
		$.get('ajax/brands', function(data){
			$('#brand_id').html(data);
		});

		$.get('ajax/states', function(data){
			$('#state_id').html(data);
		});

		$("#brand_id").change(function(){
			$.get('ajax/models/' + this.value, function(data){
				$('#model_id').html(data);
			});
		});

		$("#state_id").change(function(){
			$.get('ajax/cities/' + this.value, function(data){
				$('#city_id').html(data);
			});
		});
		
		$("#search_form").submit(function(){
			if($("#brand_id").val() == 0){
				$(".validation_message").dialog({
					modal:true,
					buttons: [{
						text: 'Fechar',
						click: function(){
							$(this).dialog('close')
						}
					}]
				});
				
				return false;
			} else {
				return true;
			}
		});

		//Carousel
		$('.first-and-second-carousel').jcarousel();
		$('#first-carousel').jcarousel({visible: 3});
		$('#second-carousel').jcarousel({visible: 3});
		$('#carousel-avatar').jcarousel({visible: 4});
	});
	</script>

	<style type="text/css">
	.jcarousel-skin-tango .jcarousel-container-horizontal {
	    width: 580px;
	}

	.jcarousel-skin-tango .jcarousel-clip-horizontal {
	    width: 100%;
	}
	</style>    
</head>
<body>
	<div id="site">
		<div id="top">
          <div id="topfull">
			<h1>
				<a href="<?=$root;?>" title="SobreMotos Classificados">SobreMotos Classificados</a>
			</h1>
			<div id="logado">
			<? if(@$this->session->userdata['logged']){ ?>
				<p>Bem-vindo <?=$this->session->userdata['user']->name?>, acesse o painel de controle de sua conta!</p>
			<? } else { ?>
				<p>Bem-vindo! <a href="<?=$root;?>entrar" title-"Entrar">Entre</a> ou <a href="<?=$root;?>cadastro" title-"">cadastre-se</a>.</p>
			<? } ?>
			</div>
			<div id="formBusca">							
				<form>
					<fieldset>
			            <legend>Busca por palavra chave</legend>
						
						<input name="" type="text" class="search home" id="" tabindex="1" value="Ex. CBR 1000 RR Fire Blade" maxlength="120"> 
						<input type="submit" tabindex="2" value="Buscar" id="" class="button buttonSearch">
						<a href="/" title="Avançado">Avançado</a>
                        <a href="/" title="Vender" class="button buttonConfirm btVenda">Vender</a>
					</fieldset>													
				</form>
			</div>
          </div>
		</div>

		<!-- Conteúdo -->	
		<div id="content">
		<!-- Banner -->
        <!--
   			<div id="alertBanner">
				<a href="http://www.sobremotos.com.br" target="_blank" title="Site com tudo sobre motos, encontros, competições, lançamentos, notícias. Confira!!">
					Tudo sobre motos, encontros, competições, lançamentos, notícias. Confira!!
				</a>
			</div>
		-->
			