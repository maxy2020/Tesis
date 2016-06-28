$(document).ready(function() {
	$(".reg:not(.alta-juego) .form").on("submit", function (e){
		e.preventDefault();
		
		var inputs = $("input");

		var usuario = document.getElementById('usuario');
		var clave = document.getElementById('clave');
		var clave2 = document.getElementById('clave2');
		var email = document.getElementById('email');

		var emailRE = /^([a-z0-9\.\-_]{1,}@[a-z0-9]{1,}(\.[a-z0-9]{2,7}){1,4})$/i;
		var usuarioRE = /^([A-Za-z0-9.\-_]{4,45})$/;
		var claveRE = /^([a-z0-9!\$%&\/\(\)\?¡¿.\-_\,\+\*]{6,15})$/i;

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

		if(rta){
			agregarUsuarioDB(usuario.value, clave.value, email.value);
		}

	});
	$("header .login .form").on("submit", function (e){
		e.preventDefault();

		var usuario = $("header .login .form #user");
		var clave = $("header .login .form #pass");

		login(usuario.val(), clave.val());
	});
	$("header .right .user-container .bttn.logout").on("click", function (){
		logout();
	});
	$("body.reg.alta-juego main .form").on("submit", function (e){
		e.preventDefault();

		var name = $("body.reg.alta-juego main .form #nombre");
		var url = $("body.reg.alta-juego main .form #url");
		var desc = $("body.reg.alta-juego main .form #descripcion");

		agregarJuego(name.val(), url.val(), desc.val());
	});
});