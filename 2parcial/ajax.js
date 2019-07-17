function nuevoAjax(){
var xmlhttp=false;
 try {
  xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
 } catch (e) {
  try {
   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  } catch (E) {
   xmlhttp = false;
  }
 }
 
if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
  xmlhttp = new XMLHttpRequest();
}
return xmlhttp;
}
function llamar(abrir){
	var contenedor;
	contenedor = document.getElementById('derecha');
	ajax=nuevoAjax();
	ajax.open("get",abrir,true);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type","text/html; charset=utf-8");
	ajax.send(null);
}
function datos(){
		var habitacion = document.getElementById("habitacion");
		var precio = document.getElementById("precio");	
		var foto = document.getElementById("foto");
		return "habitacion=" + encodeURIComponent(habitacion.value) +
		"&precio=" + encodeURIComponent(precio.value)+
		"&foto=" + encodeURIComponent(foto.value);
}
function insertar(){
		var cadena = datos(); 
		alert(cadena)
		var ajax = new XMLHttpRequest();
		ajax.open("POST","Habitaciones/insertar.php",true);
		ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
				llamar('habitaciones.php');
			}
		}
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); //clave para que funcione cuando se envia por post 
		ajax.send(cadena);
}
function reservar(id){
	var contenedor = document.getElementById('derecha');
	var ajax = new XMLHttpRequest();
	ajax.open("POST","Reservas/reservar.php",true);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			contenedor.innerHTML = ajax.responseText
		}
	}
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); //clave para que funcione cuando se envia por post 
		ajax.send(id);	

	}