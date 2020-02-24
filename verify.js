function verifyLogIn(){
    
    let usernameInput = document.getElementById('username-input');
    let passwordInput = document.getElementById('password-input');

    if(usernameInput.value === ''){
        
        usernameInput.style.borderBottom = "2px solid red";
        usernameInput.placeholder = "Username field required!";

        setInterval(()=> {
            usernameInput.style.borderBottom = "2px solid black";
            usernameInput.placeholder = "username";    
        }, 3000);
    };

    if(passwordInput.value === ''){
        passwordInput.style.borderBottom = "2px solid red";
        passwordInput.placeholder = "Password field required!";

        setInterval(()=> {
            passwordInput.style.borderBottom = "2px solid black";
            passwordInput.placeholder = "password";    
        }, 3000);

    };

    return false;
    

}