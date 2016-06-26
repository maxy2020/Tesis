var form = document.getElementById('register');
var inputs = document.getElementsByTagName("input");

var usuario = document.getElementById('usuario');
var clave = document.getElementById('clave');
var clave2 = document.getElementById('clave2');
var email = document.getElementById('email');
var nombre = document.getElementById('nombre');
var apellido = document.getElementById('apellido');



var nombreRE = /^[a-z]+$/i
var emailRE = /^([a-z0-9\.\-_]{3,}@[a-z0-9]{3,}(\.[a-z]{2,4}){1,2})$/i;
var usuarioRE = /^([A-Za-z0-9.\-_]{3,16})$/;
var claveRE = /^([a-z0-9!\$%&\/\(\)\?¡¿.\-_\,\+\*]{3,15})$/i;


form.onsubmit = function() {
	var rta = true;
	for(var i = 0; i < inputs.length-1; i++){
		inputs[i].classList.remove("error");
	}


	if( !usuarioRE.test(usuario.value) ){
		rta = false;
		usuario.classList.add("error");
	}
	if( !claveRE.test(clave.value) ){
		rta = false;
		clave.classList.add("error");
	}
	if( !claveRE.test(clave2.value) ){
		rta = false;
		clave2.classList.add("error");
	}
	if( clave.value != clave2.value ){
		rta = false;
		clave.classList.add("error");
		clave2.classList.add("error");
	}
	if( !emailRE.test(email.value) ){
		rta = false;
		email.classList.add("error");
	}
	if( !nombreRE.test(nombre.value) ){
		rta = false;
		nombre.classList.add("error");
	}
	if( !nombreRE.test(apellido.value) ){
		rta = false;
		apellido.classList.add("error");
	}


	return rta;
}