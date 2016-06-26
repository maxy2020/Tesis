/* getall */
function todosLosUsuarios () {		
	$.ajax({
		method: "GET",
		url: "../requestUser.php",
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
		url: "../requestUser.php",
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
function agregarUsuarioDB () {
	/* en realidad tiene q recibir un objeto ya con los data */
	var username = 'usuariotest123123';
	var password = 'asdas123';
	var email = 'asdsa@asdasasdsadss.com';
	$.ajax({
		method: "POST",
		url: "../requestUser.php",
		data: {
			'user':username,
			'pass':password,
			'email':email
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

/* loguin user */
function login () {
	/* igual q agregar objeto con data */
	var username = 'usuariotest11';
	var password = 'asdas123333';
	$.ajax({
		method: "get",
		url: "../requestAccount.php",
		data: {
			'user':username,
			'pass':password
		},
		beforeSend: function() {
			console.log("loader");
		},
		success: function($respond) {
			console.log($respond);
		},
		error: function($respond) {
			console.log("error");
		}
	});
}

/* loguin user */
function logout () {
	/* igual q agregar objeto con data */
	$.ajax({
		method: "GET",
		url: "../requestAccount.php",
		data: {
			"logout":""
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