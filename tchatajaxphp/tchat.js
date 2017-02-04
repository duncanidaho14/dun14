var url='tchatAjax.php';

$(function(){
	$('#tchatForm form').submit(function(){
		showLoader('#tchatForm');
		var message = $("#tchatForm form textarea").val();
		$.post(url, {action:"addMessage", message:message}, function(data){
			if(data.erreur == "ok"){
				alert('ok');
			}
			else{
				alert(data.erreur);
			}
		},"json");
		return false;
	})
});



function showLoader(div){
	$(div).append('<div class="loader"></div>');
	$('.loader').fadeTo(500,0.6);
}