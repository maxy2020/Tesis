<script src="../../public/js/jquery-2.2.1.min.js"></script>

<script>
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
		var username = 'usuariotest11';
		var password = 'asdas123333';
		var email = 'lalalala@tutututu.com';
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
			method: "POST",
			url: "../requestUser.php",
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
			error: function() {
				console.log("error");
			}
		});	
	}

	login();


</script>