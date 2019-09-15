$(document).ready(function(){

	setTimeout(function(){
		$(".mensagem").css({'visibility': 'hidden'}).fadeIn(300);

	},5000);

});
$(document).ready(function(){
	$("#cpf").mask("999.999.999-99");
	$("#rg").mask("999.999.99");
	$("#telefone").mask("(99) 9999-9999");
	$("#celular").mask("(99) 99999-9999");
});
