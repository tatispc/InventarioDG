var Inicio=0;
var Limite=0;

function sumarInicio(inicioRecibido, limiteRecibido)
{
	Inicio=inicioRecibido;
	Limite=limiteRecibido;
	if (Inicio >=0)
		{
			Inicio=inicioRecibido+limiteRecibido;
			return Inicio;
		}
	else
		{
			return inicioRecibido;
		}
}

function restarInicio (inicioRecibido, limiteRecibido)
{
	Inicio=inicioRecibido;
	Limite=limiteRecibido;
	if (Inicio>=10)
		{
			Inicio=inicioRecibido-limiteRecibido;
			return Inicio
		}
	else
		{
			return inicioRecibido;
		}
}