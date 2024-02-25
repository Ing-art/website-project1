// checks if the password and the repeated password match and changes the input background color

function checkPasswordMatch() {
    var password1 = document.getElementById('password').value;
    var password2 = document.getElementById('password2').value;

    var input1 = document.getElementById('password');
    var input2 = document.getElementById('password2');

    if (password1 === password2 && password1 !== '' && password2 !== '' ) {

        input1.style.backgroundColor = 'lightgreen';
        input2.style.backgroundColor = 'lightgreen';
                
        } else {

        input1.style.backgroundColor = 'salmon';
        input2.style.backgroundColor = 'salmon';

    }
}

