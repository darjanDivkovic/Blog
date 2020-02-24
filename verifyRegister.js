function verifyRegister(){
    
    let nameInput = document.getElementById('register-name');
    let surnameInput = document.getElementById('register-surname');
    let usernameInput = document.getElementById('register-username');
    let passwordInput = document.getElementById('register-password');
    let passwordConfirmInput = document.getElementById('register-password-confirm');
    let emailInput = document.getElementById('register-email');

    let name = filled(nameInput, "name", returnToNormal(nameInput, "name"));
    let surname = filled(surnameInput, "surname", returnToNormal(surnameInput, "surname"));
    let username = filled(usernameInput, "username", returnToNormal(usernameInput, "username"));
    let password = filled(passwordInput, "password", returnToNormal(passwordInput, "password"));
    let passwordConfirm = filled(passwordConfirmInput, "passwordConfirm", returnToNormal(passwordConfirmInput, "passwordConfirm"));
    let email = filled(emailInput, "email", returnToNormal(emailInput, "email"));

    let passwordsMatch = passwordInput.value === passwordConfirmInput.value;

    if(!name || !surname || !usernameInput || !password || !passwordConfirm || !email || !passwordsMatch){
        return false;
    }
    else return true;
};

function filled(input, fieldName, callback){

    if(input.value === ''){
        input.style.borderBottom = "2px solid red";
        input.placeholder = `${fieldName} is required!`;
        return false;
    }
    else return true;

    callback(input, fieldName);
}

function returnToNormal(input, fieldName){
    setInterval(() => {
        input.style.borderBottom = "2px solid black";
        input.placeholder = `${fieldName}`;
    }, 3000);
}


