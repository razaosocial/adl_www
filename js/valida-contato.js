$(document).ready(function(){
    $('#contato').validate({
        rules:{
            nome:{required: true},
            cidade:{required: true},
            emailremetente:{required: true, email: true},
            mensagem:{required: true}
        },
        messages:{
            nome:{
				required: "<br /><div class='msg_erro'>Digite um Nome!</div>"},
           	cidade:{required: "<br /><div class='msg_erro'>Digite sua Cidade!</div>"},
            emailremetente:{required: "<br /><div class='msg_erro'>Digite um E-mail!</div>",
							email: "<br /><div class='msg_erro'>Digite um E-mail válido!"},
            mensagem:{required: "<br /><div class='msg_erro'>Digite uma Mensagem!</div>"} 
        }
    });
});


function fechar(){
	document.getElementById('msg_enviada').style.display = 'none';
}

function fechar_red(){
	document.getElementById('msg_nao_enviada').style.display = 'none';
}