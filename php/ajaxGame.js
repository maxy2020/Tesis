function eliminarJuego () {		
	var id = 5;
	$.ajax({
		method: "GET",
		url: "../requestGame.php",
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

function agregarJuego () {
	var title = "Explotar globos";
	var desc = "Romper globos a mucha velocidad.";
	var url = "http://play.avix.tv/pinchar/";
	$.ajax({
		method: "POST",
		url: "../requestGame.php",
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
	var avatar = "img/juegos/default.jpg";
	$.ajax({
		method: "POST",
		url: "../requestGame.php",
		data: {
			"id":id,
			"title":title,
			"desc":desc,
			"url":url,
			"avatar":avatar
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



editarJuego();
/*
agregarJuego();
eliminarJuego();
*/