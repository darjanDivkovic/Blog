
$(document).ready(()=> {

    $('#register-box').hide();
    $('#login-box').hide();

    $('#register-button').click(()=> {
        
        $('#register-box').show();
        $('#login-box').hide();

    });

    $('#log-in-button').click(()=> {

        $('#login-box').show();
        $('#register-box').hide();
    });

    $('#X-button-register').click(()=> {

        $('#register-box').hide();
    });

    $('#X-button-login').click(()=> {
        $('#login-box').hide();
    });
    
});