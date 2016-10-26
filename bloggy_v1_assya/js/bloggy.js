$(document).ready(function() {
           $("form").submit(function(eve) {
                    eve.preventDefault();
                    $.ajax({
                        method: "POST",
                        url: "contact_action.php",
                        data: {
                            email: $("#email").val(),
                            sujet: $("#sujet").val(),
                            message: $("#message").val(),
                            newsletter: $("#newsletter").prop(
                                'checked') ? 1 : 0
                        },
                        success: function(data) {
                        	if(data["retour"]==1){
                             $("#notif").addClass("alert-success");
                                $(this).html("votre message "+data["sujet"]+" est bien envoye");
                        	}else{
                        		$("#notif").addClass("alert-warning");
                        		$(this).html("failed !!");
                        	}
                            
                        },
                    });
            });
     
             
});    
