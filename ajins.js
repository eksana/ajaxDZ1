$(document).ready(function(){
//$('.alertInset').fadeIn();

	$('#btnI').click(function(){
	
	$.ajax({
		type:"POST",
		url:"ins.php",
		data:$('#form_inset').serialize(),

		

		success:function(data){
			$('.table').html(data);

		}

	});
	
		});

	$('.btnClose').click(function(){
$('.alertInset').fadeOut();
});

	$('#btnRedact').click(function(){
$('.alertInset').fadeIn();
});
$('.alertInset').draggable();

	});