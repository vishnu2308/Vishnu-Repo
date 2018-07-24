

 $(document).ready(function(){
     $('#company-details').validate({
        rules: {
            email: {
               required: true
            },
            c_name:{
                required: true
            },
             logo: {
               required: true
            },
           timezone:{
                required: true
            },
        },
        messages:{
           email:{
             required:"Please Enter Your mail Id..!",
           },
           logo:{
             required:"Please enter upload your Logo..!",
            },
            c_name:{

            	required:"Please Enter Your Company Name..!",
            },
            timezone:{
            	required:"Please Select Your Timezone..!",
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
            $(element).parents('.form-group > div').append(error);
        }
    });
});

