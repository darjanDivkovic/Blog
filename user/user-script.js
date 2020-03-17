$(document).ready(()=> {
    
    // Initialy hide the changePassword box to display it later when clicked!
    $('#change-password-box').hide();

    $('#changePassword').click(()=> {
        $('#background-wrapper').css('opacity','0');
         $('#change-password-box').show();
    });

    $('#X-button-changePassword').click(()=> {
        
        $('#background-wrapper').css('opacity','1');
        $('#change-password-box').hide();
    })
    
    $('#toggle-btn').click(()=> {
        if($('#sidebar').css('right') === '-300px'){
            $('#cards').css('width', '80%');
            $('#sidebar').css('right', '0px');   
        }
        else {
            $('#cards').css('width', '100%');
            $('#sidebar').css('right', '-300px'); 
        }
    })

});