
 $(document).ready(function(){
     $('#log_in').validate({
        rules: {
            password: {
               required: true
            },
            user_name:{
                required: true
            }
        },
        messages:{
           password:{
             required:"Please enter your password..!",
           },
           user_name:{
             required:"Please enter your user name..!",
            }
        },
        highlight: function (input) {
            console.log(input);
            $(input).parents('.form-line').addClass('error');
        },
        unhighlight: function (input) {
            $(input).parents('.form-line').removeClass('error');
        },
        errorPlacement: function (error, element) {
            $(element).parents('.input-group').append(error);
            $(element).parents('.form-group').append(error);
        }
    });
});

