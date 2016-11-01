$(document).ready(function(){

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

$(window).scroll(function(){
	$('.alertInset').addClass('fix');

});

/*$('#del').on('click',function(){
	$('.alertInset').fadeIn();

	$(this).attr('rel',$(this).closest('tr').attr('rel'));
});

$('#del').on('click',function(){
	var id=$('#updateModal').attr('rel');

	
	$.ajax({
		type:"POST",
		url:"ins.php",
		data:$('#form_inset').serialize(),

		

		success:function(data){
			$('tr[rel="'+id+'"]').remove();

			//$('.table').html(data);

		}

	});
	
		});*/

	});