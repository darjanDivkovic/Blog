$(document).ready(()=> {
    
    // Initialy hide the changePassword box to display it later when clicked!
    $('#change-password-box').hide();

    $('#changePassword').click(()=> {
        $('#change-password-box').show();
    });

    $('#X-button-changePassword').click(()=> {
        $('#change-password-box').hide();
    })
    
    $('#toggle-btn').click(()=> {
        if($('#sidebar').css('right') === '-300px'){
            $('#sidebar').css('right', '0px');   
        }
        else {
            $('#sidebar').css('right', '-300px'); 
        }
    })

});