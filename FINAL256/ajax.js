function llamar (url) {
		var ajax = new XMLHttpRequest();
		ajax.onreadystatechange = function(){
			if (ajax.readyState==4) {
				document.getElementById("contenido").innerHTML=ajax.responseText;
			}
		};
		ajax.open("GET",url,true);
		ajax.send();
	}
function datos() {
		var usuario = document.getElementById("txtUser");
		var nombre = document.getElementById("txtNombre");	
		var apellidos = document.getElementById("txtApellido");
		var correo = document.getElementById("txtCorreo");
		var pass = document.getElementById("txtPassword");
		var repass = document.getElementById("txtRepass");
		return "usuario=" + encodeURIComponent(usuario.value) +
		"&nombre=" + encodeURIComponent(nombre.value)+
		"&apellidos=" + encodeURIComponent(apellidos.value)+
		"&correo=" + encodeURIComponent(correo.value)+
		"&pass=" + encodeURIComponent(pass.value)+
		"&repass=" + encodeURIComponent(repass.value);
	}
function enviar(){
		var cadena = datos();
		alert(cadena) 
		var ajax = new XMLHttpRequest();
		ajax.open("POST","PREGUNTA3/registrar.php",true);
		ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
				llamar('PREGUNTA3/Usuarios.php');
			}
		}
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); //clave para que funcione cuando se envia por post 
		ajax.send(cadena);
}
function cuadrado(){
var n=parseInt(document.getElementById('numero').value);
var resultado = document.getElementById('resultado');
resultado.style.background = 'yellow';
resultado.innerHTML = "<center><h3>"+n*n+"</h3></center>";
}

function calendario () {
		var ajax = new XMLHttpRequest();
		url ="pregunta5/calendario.php?mes=7&anio=2019"
		ajax.onreadystatechange = function(){
			if (ajax.readyState==4) {
				document.getElementById("contenido").innerHTML=ajax.responseText;
			}
		};
		ajax.open("GET",url,true);
		ajax.send();
}