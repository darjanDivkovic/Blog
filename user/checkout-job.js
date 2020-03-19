function checkOutJob(){
    
    // Hide job cards
    hideJobCards();

    // Show job container
    setTimeout(showJobContainer, 1000);

    // get job-container
    
    
}

function hideJobCards(){  
    document.getElementById('cards').style.opacity = 0;
};

function showJobContainer(){
   $('#job-container').show();
}

$('#X-job-container').click(()=> {
    
    $('#job-container').hide();
    document.getElementById('cards').style.opacity = 1;
})