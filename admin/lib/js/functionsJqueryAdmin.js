$(document).ready(function() {

    $("#nom").blur(function() {
        nom1 = $("#nom").val();
       if(($.trim(nom1)!='')) {
            recherche = "nom="+nom1;
            $.ajax({
                type: 'GET',
                data: recherche,
                dataType: "json",
                url: './php/ajax/AjaxRechercheClient.php',
                success: function(data) { //data = ce qui revient du script PHP
                    $("#prenom").val(data[0].prenom);
                    $("#pseudo").val(data[0].pseudo);                  
                    console.log(data[0].prenom);
                }
            });
        }
        
        
    });
});