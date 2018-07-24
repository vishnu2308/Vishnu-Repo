 /*
 *  Document   :main-register.js
 *  Author     :vishnu
 *  Description: registration Functionality (main register pages js and user name avaliblity checking js )
 *
 */

//Form Validation for tresgistration form//
$.validator.addMethod("regx", function(value, element, regexpr) {          
        return regexpr.test(value);
        }, "Letters only");

  var $registerValidate = $("#sign_up").validate({
       highlight: function (input) {
            $(input).parents('.form-line').addClass('error');
        },
        unhighlight: function (input) {
            $(input).parents('.form-line').removeClass('error');
        },
        errorPlacement: function (error, element) {
            $(element).parents('.input-group').append(error);
            $(element).parents('.form-group').append(error);
        },
    rules: {
         c_name: {
                required:true,
                minlength:5,
            },
            password: {
                   required:true,
                   minlength:5,
            },
            email:{
                required:true,
                regx:/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/,
                email: true,
            },
            user_name:{
                required:true,
                minlength:5,
            }
       
   },
    messages:{
           c_name:{
       required:"Please enter your company name..!",
        minlength:"Minimum length is 5..! ",
     },
    password:{
         required:"Please enter your password..!",
         minlength: 'Your password must be at least 5 characters long..!',
    },
    email:{
         required:"Please enter your email ID..!",
         regx:"Enter only valid mail address..!",
    },
     user_name:{
             required:"Please enter your user name..!",
             minlength:"Minimum length is 5..! ",
            }      
         
        }
});

$("#username").on('blur',function(){//user name avalibility check// 

    $.ajax({
        type:"POST",
        url: baseURL+"auth/Register/Availability",
        data: {name:$(this).val()},
        beforeSend:function(jqXHR,settings){            
          //$(element).find("button[type=submit]").button({loadingText: 'Submitting...'}).button('loading');
        },
        complete:function(jqXHR,textStatus){
          //$(element).find("button[type=submit]").button('reset');
        },
        error:function(jqXHR,textStatus,errorThrown ){
        },
        success: function(result){

                var data=$.parseJSON(result);

              if(data.success="true"){

                if(data.rowcount>0){
                    errors = { user_name: data.data };
                }

                else{
                    errors = { user_name: data.data };
                  console.log(data.data);
              }

            }
            else{
                errors = { user_name: "Error Occurred. "+data.data };
            }
             /* Show errors on the form */
             $registerValidate.showErrors(errors); 
        }
        });
  });
