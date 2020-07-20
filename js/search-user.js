( function( $ ) {

	$(document).ready(function(){
		
		$("#s").on('keyup',search);

	});

	function search(evento) {
		var data = $("#s").val();
		var html = "";

		$.ajax({
			type:'GET',
			url: admin_url.ajax_url,
			data: {action:'searchUsers', valor: data },

			beforeSend: function(){
				$('.results').html("Cargando");
			},
			success: function(data) {
				
				data = $.parseJSON(data);
				html = "";

				if(data.length){
					
					html = "Resultados de su busqueda: " + data.length;
					$.each(data, function(pos,item){
						html = html + "<div class='user'> " +
														"<div class='imagen'>" +
														"<img src='" +item.avatar +"' alt='avatar'>" +
														"</div>" +
														"<div class='description'>" +
														item.user_email + "</br>" +
														item.display_name + "</br>" +
														"</div>" +
													"</div>";
					});

				}else{
					html = "Sin resultados";
				}

				$('.results').html(html);
			},
			error: function(error) {
				console.log(error);
			}

		});

	}

} )( jQuery );