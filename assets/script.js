passwordId = document.getElementById('password').oninput = function() { passwordValidation() };
function passwordValidation(){
	passwordValue = document.getElementById('password').value;
	password = document.getElementById('password');
	passHelp = document.getElementById('passHelp');
	submitButton = document.querySelector('.btn-danger');
	if(passwordValue.length == ""){
		passHelp.innerHTML = "required filed";
		submitButton.type = "button";
	}else if(passwordValue.length <= 5){
		passHelp.innerHTML = "weak";
		passHelp.style.color = "red";
		password.style.border = "none";
		password.style.borderBottom = "2px solid red";
		submitButton.type = "button";
	}else{
		passHelp.innerHTML = "";
		password.style.border = "none";
		password.style.borderBottom = "2px solid blue";
		submitButton.type = "submit";
	}
}
emailId = document.getElementById('email').oninput = function() { emailValidation() };
function emailValidation(){
	emailValue = document.getElementById('email').value;
	password = document.getElementById('email');
	emailHelp = document.getElementById('emailHelp');
	    var filterEmail = /[@.]+/
    	if (emailValue.match(filterEmail)) {
 		emailHelp.innerHTML = "";
 		email.style.border = "none";
		email.style.borderBottom = "2px solid blue";
        }else{
        emailHelp.innerHTML = "Invalid email";
        emailHelp.style.color = "red";
        email.style.border = "none";
		email.style.borderBottom = "2px solid red";
        }
    }