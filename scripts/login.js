    const inputPassword = document.querySelector('#password');
    inputPassword.addEventListener('input', ()=>{
        
        if(inputPassword.type == 'password'){
            inputPassword.type = 'text';
        }else{
            inputPassword.type = 'password';
        }
    });