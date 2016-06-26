$(document).ready(function() {
	$(".reg .form").on("click", function (e){
		e.preventDefault();
		console.log("holi");
		agregarUsuarioDB();
	});
});