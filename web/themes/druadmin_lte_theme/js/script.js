$ = jQuery;

$(function(){

	$.fn.getAjaxCoordonnees = function(argument) {
		    console.log('myAjaxCallback is called.');
		    // Set textfield's value to the passed arguments.
		$("#edit-field-lieu-wrapper").html(argument);
	};

	$('ol.breadcrumb li').each(function(index, value){
		if( $.trim($(value).html()).length == 0 )
			$(value).remove();
	});

	
})