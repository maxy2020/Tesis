/* getall */
function todosLosUsuarios () {		
	$.ajax({
		method: "GET",
		url: "../php/requestUser.php",
		data: {},
		beforeSend: function() {
			console.log("loader");
		},
		success: function($respond) {
			console.log($respond);
		},
		error: function() {
			console.log("error");
		}
	});
}

/* getbyid */
function usuarioPorId (id) {
	$.ajax({
		method: "GET",
		url: "../php/requestUser.php",
		data: {
			"id":id
		},
		beforeSend: function() {
			console.log("loader");
		},
		success: function($respond) {
			console.log($respond);
		},
		error: function() {
			console.log("error");
		}
	});
}

/* user Add */
function agregarUsuarioDB (user, pass, mail) {
	/* en realidad tiene q recibir un objeto ya con los data */
	var username = user;
	var password = pass;
	var email = mail;
	$.ajax({
		method: "POST",
		url: "../php/requestUser.php",
		data: {
			'user':username,
			'pass':password,
			'email':email
		},
		beforeSend: function() {
			console.log("loader");
			$(".text-error").removeClass("active");
			$(".text-success").removeClass("active");
		},
		success: function($respond) {
			console.log($respond);
			$(".text-success").addClass("active");

			var inputs = $("main .form input");
			for(var i = 0; i < inputs.length-1; i++){
				inputs[i].value = "";
			}
		},
		error: function($respond) {
			console.log("error", $respond);
			$(".text-error").addClass("active");
		}
	});
}

/* loguin user */
function login (user, pass) {
	/* igual q agregar objeto con data */
	var username = user;
	var password = pass;
	$.ajax({
		method: "POST",
		url: "../php/requestAccount.php",
		data: {
			'user':username,
			'pass':password
		},
		beforeSend: function() {
			console.log("loader");
		},
		success: function($respond) {
			console.log("logueo", $respond);
			location.reload();
		},
		error: function($respond) {
			console.log("error", $respond);
		}
	});
}

/* loguin user */
function logout () {
	/* igual q agregar objeto con data */
	$.ajax({
		method: "GET",
		url: "../php/requestAccount.php",
		data: {
			"logout":""
		},
		beforeSend: function() {
			console.log("loader");
		},
		success: function($respond) {
			console.log($respond);
			location.reload();
		},
		error: function() {
			console.log("error");
		}
	});
}