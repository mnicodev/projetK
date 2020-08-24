

$(function(){
	
	$(".node--type-activite").find("#edit-field-date-wrapper").find(".paragraphs-dropbutton-wrapper").remove();
	
	$.fn.getAjaxVille = function(argument) {
		 console.log(argument);
		 $("#edit-field-ville").html("")
//$("#edit-field-ville-wrapper").html(argument);
		 for(item in argument) {
		 	$("#edit-field-ville").append("<option value='"+argument[item].key+"'>"+argument[item].val+"</option>");
		 }
		 
	}

	$.fn.getAjaxCoordonnees = function(argument) {
		    console.log(argument);
		$("#edit-field-adresse-wrapper").find("input").val("");
		$("#edit-field-telephone-wrapper").find("textarea").val("");
		$("#edit-field-email-wrapper").find("input").val("");
		$("#edit-field-code-postal-wrapper").find("input").val("");
		$("#edit-field-lien-wrapper").find("input").val("");
		if(argument) {
			if(argument.adresse) $("#edit-field-adresse-wrapper").find("input").val(argument.adresse.value);
			if(argument.code_postal) $("#edit-field-code-postal-wrapper").find("input").val(argument.code_postal.value);
			if(argument.telephone) $("#edit-field-telephone-wrapper").find("textarea").val(argument.telephone.value);
			if(argument.email) $("#edit-field-email-wrapper").find("input").val(argument.email.value);
			if(argument.lien) $("#edit-field-lien-wrapper").find("input").val(argument.lien.value);
			if(argument.ville) {
				$("#edit-field-ville").find("option").each(function () {
					if($(this).val()!=argument.ville.target_id) $(this).remove();
					console.log($(this).val());
				})
			}
		}
		
	};
})