function telephone(){
	$('#user_telephone').dialog({
		resizable: false,
		width:500,
		height:300,
		modal: true,
		buttons: {
			'Fechar':function(){
				$(this).dialog("close");
				//window.location = siteurl + 'admin/products';
			}
		}
	});
}