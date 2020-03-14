function verify(){

    let oldPasswordInput = document.getElementById('oldPassword');
    let newPasswordInput = document.getElementById('newPassword');
    let retypeNewPasswordInput = document.getElementById('retypeNewPassword');

    let oldPassword = filled(oldPasswordInput, "old password", returnToNormal(oldPasswordInput, "old password"));
    let newPassword = filled(newPasswordInput, "new password", returnToNormal(newPasswordInput, "new password"));
    let retypeNewPassword = filled(retypeNewPasswordInput, "retyped new password", returnToNormal(retypeNewPasswordInput, "retyped new password"));
    let doPasswordsMatch = passwordsMatch(newPasswordInput, retypeNewPasswordInput, returnPasswordToNormal(newPasswordInput, retypeNewPasswordInput));

    if(oldPassword && newPassword && retypeNewPassword && doPasswordsMatch){
        return true;
    }
    else {
        return false;
    }
    

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

    function passwordsMatch(passInput1, passInput2, callback){

        if(passInput1.value === passInput2.value){
            return true;
        }
        else {
            passInput1.value = '';
            passInput2.value = '';

            let message = 'Passwords do not match!';
            passInput1.style.borderBottom = "2px solid red";
            passInput1.placeholder = message;
            passInput2.style.borderBottom = "2px solid red";
            passInput2.placeholder = message;

            return false;
        }

        callback(passInput1, passInput2);
    }

    function returnPasswordToNormal(passInput1, passInput2){
        setInterval(()=> {
            passInput1.style.borderBottom = "2px solid black";
            passInput2.style.borderBottom = "2px solid black";

            passInput1.placeholder = "new password";
            passInput2.placeholder = "retyped new password";

        }, 3000);
    }
}