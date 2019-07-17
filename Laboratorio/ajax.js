function llamar (url) {
	// Instanciar xml
		var ajax = new XMLHttpRequest();
		ajax.onreadystatechange = function(){
			if (ajax.readyState==4) {
				document.getElementById("derecha").innerHTML=ajax.responseText;
			}
		};
		// Preparar funcion de respuesta
		ajax.open("GET",url,true);
		ajax.send();
		// Realizar la peticion al servidor
	}