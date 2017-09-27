

jQuery(document).ready(function($) {
	// alert('jQuery loaded /js/search.js.');
	$('#search').autoComplete({
		source: function(name, response) {
			$.ajax({
				type: 'POST',
				dataType: 'json',
				url: '/wp-admin/admin-ajax.php',
				data: 'action=get_listing_names&name='+name,
				success: function(data) {
					response(data);
				}
			});
		}
	});

});
