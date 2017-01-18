$(document).ready(function(){

    //pour pouvoir utiliser regex
    $.validator.addMethod("regex", function (value, element, regexpr) {
        return regexpr.test(value);
    }, "Format non valide.");
    
    
    $("#form_s_inscrire").validate({
        rules: {
            email: "required",
            nom: "required",
            prenom: "required",
            pseudo: "required",
            mdp: "required",
            submitHandler: function(form) {
                form.submit();
            }
        }
    });
    
});
