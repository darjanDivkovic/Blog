mymap = L.map('map');
L.tileLayer('https://tile.jawg.io/jawg-dark/{z}/{x}/{y}.png?access-token=FocuBwiQ14IcUAP56snE5exm3R4iC9vWnNajYEVTcHzAWu5SblkEpqEIbbeMuK5H', {}).addTo(mymap);

function checkOutJob(evt){
    

    
    console.log(mymap);
    // Hide job cards
    hideJobCards();

    // fill up job-container
    document.getElementById('description').innerText = evt.currentTarget.description;
    document.getElementById('location').innerText = evt.currentTarget.location;
    document.getElementById('salary').innerText = evt.currentTarget.salary;
    document.getElementById('time').innerText = evt.currentTarget.time;

    // Create Map
    let lat = evt.currentTarget.lat;
    let lon = evt.currentTarget.lon;
   
    updateMap(mymap,lat,lon);

    

    // Show job container
    setTimeout(showJobContainer, 1000);

    setTimeout(function () { mymap.invalidateSize(); }, 1000);
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

function updateMap(mymap,lat,lon){
   
   L.marker([lat, lon]).addTo(mymap);
   
   mymap.setView([lat, lon], 16);
   

}