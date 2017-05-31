$(document).ready(function(){
	$("#iller").on("change",ilceleriGetir);
});

function ilceleriGetir(){
	$.post("ilceler.php",{ilId:$("#iller")},function(output){
		$("#ilceler option").remove();
		$("#ilceler").append(output);
		//alert(output);
	});
};