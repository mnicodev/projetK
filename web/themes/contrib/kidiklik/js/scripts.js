jQuery(document).ready(function() {

	jQuery('#search_ville').select2({
		placeholder: 'Choisissez une ville ...',
		ajax: {
			url: '/kidiklik_front/search_city',
			dataType: 'json',
			data: function (params) {
				
				var query = {
					search: params.term,
					type: 'public'
				}
				return query;
			},
			
		}
	});
	jQuery('#search_ville').on('select2:select', function (e) {
		var data = e.params.data;
		
		window.location="http://"+data.id+".kidiklik.docker";
	});

	jQuery('#search_dep').select2({
		placeholder: 'Choisissez un département ...',
		ajax: {
			url: '/kidiklik_front/search_dep',
			dataType: 'json',
			data: function (params) {
				
				var query = {
					search: params.term,
					type: 'public'
				}
				return query;
			},
			
		}
	});
	jQuery('#change_dep').select2();
	jQuery('#search_dep').on('select2:select', function (e) {
		var data = e.params.data;
		
		window.location="http://"+data.id+".kidiklik.docker";
	});
}) 
