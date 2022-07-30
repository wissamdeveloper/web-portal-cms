$(document).ready(function(){
    var $form, $loader;
    $loader = $("#loader");
    $form = $("#contactForm");
    $loader.hide();
    $form.validate({
        rules:{
            user_name:{
                required:true
            },
            user_email:{
                required: true
            },

            user_message:{
                required: true
            },

        },
        messages:{
            user_name:{
                required: "please enter name"
            },
            user_email:{
                required: "please enter email"
            },

            user_message:{
                required: "please enter message"
            },

        }
    });
    $form.ajaxForm({
        dataType:'json',
        beforSubmit: function(){
            if($form.valid()){
                return false;
            }
    $loader.show();

        },
        success:function(res){
            console.log(res);
    $loader.hide();

        },
        error:function(error){
            console.log(error);
    $loader.hide();

        }
    });
});
