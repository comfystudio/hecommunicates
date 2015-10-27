$( document ).ready(function() {
	window.total = $('#information').data( "total" );
	window.current = 0;
	$('#project-name').html($('#information').data("name"));
	$('#image_0').show();
	$('#image-name').html($('#image_0').data("name"));
	
	$('#content img').click(function(){
		next();
	});
	
	$('#control-next').click(function(){
		next();
	});
	
	$('#control-previous').click(function(){
		previous();
	});
	
	$('#control-new').click(function(){
		//previous();
		var id = $('#information').data( "new" );
		window.location.href = id;
	});
	
	function next(){
		$('#image_'+current).fadeOut('slow', function(){
			if(current >= (total-1)){
			current = 0;	
			}else{
				current++;
			}
			$('#image_'+current).fadeIn('slow');
			$('#image-name').html($('#image_'+current).data("name"));
		});
	}
	
	function previous(){
		$('#image_'+current).fadeOut('slow', function(){
			if(current <= 0){
				current = (total-1);	
			}else{
				current--;
			}
			$('#image_'+current).fadeIn('slow');
			$('#image-name').html($('#image_'+current).data("name"));
		});
	}
});