function mensajeAlerta(tipo, mensaje)
{
	$.noty.defaults.killer = true;
	switch(tipo)
	{
		case 'success':
			var tema= '<div class="noty_message"><p><i class="fa fa-check-circle fa-2x"></i> <strong style="font-size:140%;">Exito</strong></p> <p><span class="noty_text" style="font-size:110%;"></span></p><div class="noty_close"></div></div>';
			var tipo_alerta="success";
		break;
		case 'error':
			var tema= '<div class="noty_message"><p><i class="fa fa-exclamation-circle fa-2x"></i> <strong style="font-size:140%;">Error</strong></p> <p><span class="noty_text" style="font-size:110%;"></span></p><div class="noty_close"></div></div>';
			var tipo_alerta="error";
		break;
		case 'warning':
			var tema= '<div class="noty_message"><p><i class="fa fa-exclamation-triangle fa-2x"></i> <strong style="font-size:140%;">Warning</strong></p> <p><span class="noty_text" style="font-size:110%;"></span></p><div class="noty_close"></div></div>';
			var tipo_alerta="warning";
		break;
		default:
			var tema= '<div class="noty_message"><span class="noty_text" style="font-size:110%;"></span><div class="noty_close"></div></div>';
			var tipo_alerta="alert";
		break;
	}
    noty({
       	text: mensaje,
       	theme: 'relax',
       	layout: 'top',
       	closeWith: ['click', 'hover'],
       	template: tema,
       	type: tipo_alerta
    });
}