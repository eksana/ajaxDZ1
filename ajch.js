$(document).ready(function(){
 
 $this=$(this).find('.table');

 /*$this.click(function(){
	$('.alertChange').fadeIn();
});*/
	$('#btnChange').click(function(){
		//$this.click(function(){
	$('.alertChange').fadeIn();
});

	$('#btnChangeF').click(function(){
	
	$.ajax({
		type:"POST",
		url:"change.php",
		data:$('#form_change').serialize(),

		/*success:function(data){
			$('.table').html(data);
			//alert('ok');
		}*/

		success:function(data){
			//$('.table').replaceWith(data);
			$('.table').html(data);

		}

	});
	
		});

	$('.btnClose').click(function(){
$('.alertChange').fadeOut();
});
$('.alertChange').draggable();

	


	});