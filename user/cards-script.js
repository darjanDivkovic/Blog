let cardsContainer = document.getElementById('cards');

let hr = new XMLHttpRequest();

hr.open('GET', 'cards.php', true);
hr.send();

hr.onload = function() {
    if(hr.status === 200){
        let response = hr.response;
        let data = JSON.parse(response);
        createCards(data);
    }
}


function createCards(data){

    let jobsCount = Object.keys(data).length;
    

    for(let i = 1 ; i <= jobsCount ; i++){

        

        let jobCard = document.createElement('div');
        jobCard.className = 'job-card';
        
        let img = document.createElement('img');
        img.src = 'money-sign.png';
        img.id = 'dolar';
        
        jobCard.appendChild(img);
        
        let descriptionWrapperUpper = document.createElement('div');
        descriptionWrapperUpper.className = 'descripiton-wrapper-upper';
        
        let heading1 = document.createElement('p');
        heading1.className = 'heading';
        heading1.innerText = 'Job Description';
        let heading1Para = document.createElement('p');
        heading1Para.innerText = data[i].description;
        
        let descriptionWrapperLower = document.createElement('div');
        descriptionWrapperLower.className = 'descripiton-wrapper-lower';
        
        let headerArray = ['Location','Salary','Time'];
        let valuesArray = [data[i].location,data[i].salary,data[i].time];
        
        for(let i = 0 ; i < 3 ; i++){
            let div = document.createElement('div');
            let p = document.createElement('p');
            p.className = 'heading';
            p.innerText = headerArray[i];
        
            let pp = document.createElement('p');
            pp.innerText = valuesArray[i];
        
            div.appendChild(p);
            div.appendChild(pp);
            descriptionWrapperLower.appendChild(div);
        }
        
        let button = document.createElement('button');
        button.className = 'more';
        button.innerText = 'Check out';
        
        
        descriptionWrapperUpper.appendChild(heading1);
        descriptionWrapperUpper.appendChild(heading1Para);
        
        
        descriptionWrapperUpper.appendChild(descriptionWrapperLower);
        
        jobCard.appendChild(descriptionWrapperUpper);
        jobCard.appendChild(button);
        
        cardsContainer.appendChild(jobCard);

}



};