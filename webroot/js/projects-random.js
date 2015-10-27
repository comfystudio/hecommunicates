$( document ).ready(function() {
	var count = 0;
	var total = $('#images').data( "total" );
	$('#image_0').show();
	setInterval(function(){
		$('#image_'+count).fadeOut('slow', function(){
			if(count >= (total-1)){
			count = 0;	
			}else{
				count++;
			}
			$('#image_'+count).fadeIn('slow');
		});
	},5000);
});