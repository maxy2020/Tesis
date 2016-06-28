function eliminarJuego () {		
	var id = 5;
	$.ajax({
		method: "GET",
		url: "../php/requestGame.php",
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

function agregarJuego (title, url, desc) {
	$.ajax({
		method: "POST",
		url: "../php/requestGame.php",
		data: {
			"title":title,
			"desc":desc,
			"url":url
		},
		beforeSend: function() {
			console.log("loader");
		},
		success: function($respond) {
			console.log($respond);
			$("body.reg.alta-juego main .form #nombre").val("");
			$("body.reg.alta-juego main .form #url").val("");
			$("body.reg.alta-juego main .form #descripcion").val("");
			$("body.reg.alta-juego main .text-success").addClass("active");
		},
		error: function() {
			console.log("error");
		}
	});
}

function editarJuego () {
	var id = 1;
	var title = "Explotar globoss";
	var desc = "Romper globos a muchaaaaa velocidad.";
	var url = "http://play.avix.tv/pinchar/";
	$.ajax({
		method: "POST",
		url: "../php/requestGame.php",
		data: {
			"id":id,
			"title":title,
			"desc":desc,
			"url":url
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



/*
editarJuego();
agregarJuego();
eliminarJuego();
*/