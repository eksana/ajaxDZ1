$(document).ready(function(){
 
 //$this=$(this).find('.table');

 /*$this.click(function(){
	$('.alertChange').fadeIn();
});*/
	$('#btnDel').click(function(){
		//$this.click(function(){
	$('.alertDel').fadeIn();
});
$('#btnD').click(function(){
		/*$('.alertDel2').fadeIn();
	$('.alertDel').fadeOut();*/

//});
	//$('#btnD1').click(function(){
	$.ajax({
		type:"POST",
		url:"del.php",
		data:$('#form_del').serialize(),
		//data:$('#form_delConfirm').serialize(),
	
		success:function(data){
			
			$('.table').html(data);

		},

		//beforeSend: function(/*jqxhr, settings*/data) {
				//settings.url = 'mydata.json';
				//alert('Вы уверены?');
			//}				

	});
	
		});

	$('.btnClose').click(function(){
$('.alertDel,.alertDel2').fadeOut();
});
$('.alertDel').draggable();

	


	});