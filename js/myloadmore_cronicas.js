jQuery(function($){
	$('.misha_loadmore_cronicas').click(function(){
 
		var button = $(this),
		    data = {
			'action': 'loadmore_cronicas',
			'query': misha_loadmore_params_cronicas.posts, // that's how we get params from wp_localize_script() function
			'page' : misha_loadmore_params_cronicas.current_page
		};
 
		$.ajax({
			url : misha_loadmore_params_cronicas.ajaxurl, // AJAX handler
			data : data,
			type : 'POST',
			beforeSend : function ( xhr ) {
				button.text('Cargando...'); // change the button text, you can also add a preloader image
			},
			success : function( data ){
				if( data ) { 
					//button.text( 'Mostrar más' ).prev().before(data); // insert new posts
					//button.text( 'Mostrar más' ).prev().after(data);
					button.text( 'Mostrar más' ).prev().after(data).hide().fadeIn(1000);
					$('#misha_loadmorez').append( data ); // insert new posts
					misha_loadmore_params_cronicas.current_page++;
					
					
					
 
					if ( misha_loadmore_params_cronicas.current_page == misha_loadmore_params_cronicas.max_page ) 
						button.remove(); // if last page, remove the button
 
					// you can also fire the "post-load" event here if you use a plugin that requires it
					// $( document.body ).trigger( 'post-load' );
				} else {
					button.remove(); // if no data, remove the button as well
				}
			}
		});
	});
});