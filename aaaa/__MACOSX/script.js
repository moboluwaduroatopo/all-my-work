$('document').ready(function()
{
    /* validation */
    $("#register-form").validate({
        rules:
        {
            userName: {
                required: true,
                minlength: 3
            },
            userPass: {
                required: true,
                minlength: 8,
                maxlength: 15
            },
            cpassword: {
                required: true,
                equalTo: '#password'
            },
            userEmail: {
                required: true,
                email: true
            },
        },
        messages:
        {
            userName: "Enter a Valid Username",
            userPass:{
                required: "Provide a Password",
                minlength: "Password Needs To Be Minimum of 8 Characters"
            },
            userEmail: "Enter a Valid Email",
            cpassword:{
                required: "Retype Your Password",
                equalTo: "Password Mismatch! Retype"
            }
        },
        submitHandler: submitForm
    });
    /* validation */

    /* form submit */
    function submitForm()
    {
        var data = $("#register-form").serialize();

        $.ajax({

            type : 'POST',
            url  : 'register.php',
            data : data,
            beforeSend: function()
            {
                $("#error").fadeOut();
                $("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
            },
            success :  function(data)
            {
                if(data==1){

                    $("#error").fadeIn(1000, function(){


                        $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry email already taken !</div>');

                        $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');

                    });

                }
                else if(data=="registered")
                {

                    $("#btn-submit").html('Signing Up');
                    setTimeout('$(".form-signin").fadeOut(500, function(){ $(".signin-form").load("successreg.php"); }); ',5000);

                }
                else{

                    $("#error").fadeIn(1000, function(){

                        $("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');

                        $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');

                    });

                }
            }
        });
        return false;
    }
    /* form submit */

});