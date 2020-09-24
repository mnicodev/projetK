

$(function(){
	$("#edit-field-ville").find("option").each(function () {
		
	//	if($(this).attr("selected")!="selected") $(this).prop("disabled",true)
	})
	$(".node--type-activite").find("#edit-field-date-wrapper").find(".paragraphs-dropbutton-wrapper").remove();
	
	if($(".dropbutton-widget").length) {
		
	}
	
	/* fonctionnalités adhérent */
	if($("#node-adherent-edit-form").length) {
		
		
		
		$(".action-filtre").find("input").click(function(e) {
			e.preventDefault();
			adherent_id=$(this).attr("data-adherent-id");
			type=$(this).attr("data-type");
			url=$(this).attr("data-url");
			
			date_deb=$(this).parent().parent().find(".date-deb").find("input").val();
			date_fin=$(this).parent().parent().find(".date-fin").find("input").val();
			
			
			$.ajax({
				url: "/admin/adherent/contenu/"+type+"/"+adherent_id+"?date_deb="+date_deb+"&date_fin="+date_fin+"&url"+url,
				
				success: function(result) {
					console.log(result);
					$("#"+type+"_liste").html(result);
				}
			});
			
		});
	}
	
	/* fin */
	
	
	
	$.fn.getAjaxVille = function(argument) {
		 console.log(argument);
		 $("#edit-field-ville").html("")
		 $("#edit-field-ville").append("<option value=''></option>");
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
				console.log(argument.ville.target_id+"-"+$(this).val());
				
				//$("#edit-field-ville option").prop("disabled","false");
				$("#edit-field-ville").find("option").each(function () {
					
					$(this).text(argument.ville.name);
					$(this).val(argument.ville.id);
					$(this).attr("selected","selected");
					/*
					$(this).removeAttr("disabled");
					$(this).removeAttr("selected");
					if($(this).val()!=argument.ville.id) {
						$(this).prop("disabled",true);
						
					} else {
						$(this).attr("selected","selected");
					}*/
					console.log($(this).val());
				})
			}
			if(argument.activites) {
				for(activite in argument.activites) {
					o=document.createElement("option");
					console.log(activite)
					$(o).val( argument.activites[activite].id);
					$(o).text(argument.activites[activite].name);
					$("#edit-field-activite").append(o)
					
				}
			}
		}
		
	};
})
