function checkOutJob(evt){
    
    // Hide job cards
    hideJobCards();

    // Show job container
    setTimeout(showJobContainer, 1000);

    // get job-container
    document.getElementById('description').innerText = evt.currentTarget.description;
    document.getElementById('location').innerText = evt.currentTarget.location;
    document.getElementById('salary').innerText = evt.currentTarget.salary;
    document.getElementById('time').innerText = evt.currentTarget.time;
    
    
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