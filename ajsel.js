$(document).ready(function(){

	$('#btn').click(function(){
	
	$.ajax({
		type:"POST",
		url:"sel.php",
		//data:$('.r').serialize(),

		success:function(data){
			$('.table').html(data);
		}

	});
	
		});

	});