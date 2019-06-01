$(document).ready(function() {
	console.log("searchbar-loaded");

$("#dp-searchbar").on("keyup", function(){
	console.log("testestestestsetest");

	$.get("test.php");
	// $.get("http://[::1]/CodeIgniter-3.1.10/index.php/Ajax/search",
	// 	function(data) {
	// 		console.log(data);
	// 	}
	// )
})
})

