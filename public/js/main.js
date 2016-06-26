$(document).ready(function() {
	$(".reg .form").on("submit", function (e){
		e.preventDefault();
		console.log("holi");
		agregarUsuarioDB();
	});
});