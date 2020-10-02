

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
	if($("#edit-field-activite-wrapper").length)
		$("#edit-field-activite-wrapper").find("select").change(function() {
			$("#edit-field-activite-save-wrapper").find("input").val($(this).val());
		});
	if($("#edit-field-activite").length)
		$("#edit-field-activite").change(function() {
			$("#edit-field-activite-save-wrapper").find("input").val($(this).val());
		});
	
	if($("#edit-field-ville").length)
		$("#edit-field-ville").find("select").change(function() {
			$("#edit-field-ville-save-wrapper").find("input").val($(this).val());
		});

	Drupal.behaviors.activites_agenda = {
		attach: function (context, settings) {
			/*$("#edit-field-mise-en-avant-wrapper").find("input").click(function(e) {
				alert("ok");
				e.preventDefault();
				if(!$("#edit-field-adherent-wrapper").find("select").val()) alert("Veuillez sélectionner un adhérent");
			});*/
			if($("#edit-field-ville").length)
				$("#edit-field-ville").find("select").change(function() {
					$("#edit-field-ville-save-wrapper").find("input").val($(this).val());
				});
		
			$("#bloc-ville").find("select").change(function() {
				$("#edit-field-ville-save-wrapper").find("input").val($(this).val());
			});
			
			$("#activites").change(function() {
				console.log($(this).val());
				$("#edit-field-activite-save-wrapper").find("input").val($(this).val());
			});
			
			$(".field--name-field-type").find("select").change(function() {
				
				$(".field--name-field-newsletter").hide();
				if($(this).val()==2) $(".field--name-field-newsletter").show();
				else $(".field--name-field-newsletter").find("select").val("");
			});
			
			if($(".field--name-field-newsletter").find("select").val()=="_none")
				$(".field--name-field-newsletter").hide();
				
			if($("#edit-field-adherent-wrapper").find("select").val()) {
				$(".field--name-field-adherent-cache").find("input").val($("#edit-field-adherent-wrapper").find("select").val());
			} 
			
			$("#edit-field-adherent-wrapper").find("select").change(function() {
				$(".field--name-field-adherent-cache").find("input").val($(this).val());
				
			});
		}
	}
	
	
	
	$.fn.getAjaxVille = function(argument) {
		 console.log(argument);
		 //ville=document.createElement("select");
		 
		 $("#edit-field-ville").html("")
		 $("#edit-field-ville").append("<option value=''></option>");
//$("#edit-field-ville-wrapper").html(argument);
		 for(item in argument) {
		 	$("#edit-field-ville").append("<option value='"+argument[item].key+"'>"+argument[item].val+"</option>");
		 }
		 
	}
	
	$.fn.getAjaxVille2 = function(argument) {
		 console.log(argument);
		 $("#bloc-ville").removeClass("form-select");
		 ville=document.createElement("select");
		 $(ville).attr("class","form-select form-control");	 
		 $(ville).append("<option value=''></option>");

		 for(item in argument) {
		 	$(ville).append("<option value='"+argument[item].key+"'>"+argument[item].val+"</option>");
		 }
		 
		 $("#bloc-ville").append(ville);
		 
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
