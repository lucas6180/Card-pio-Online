const inputPassword = document.querySelector('#password');
const btnRevealPassword = document.querySelector('.reveal-password');

// Função para alternar a visibilidade da senha
const togglePasswordVisibility = () => {
    if (inputPassword.type === 'password') {
        inputPassword.type = 'text';
        btnRevealPassword.classList.add('open-eye');
        btnRevealPassword.classList.remove('closed-eye');
    } else {
        inputPassword.type = 'password';
        btnRevealPassword.classList.remove('open-eye');
        btnRevealPassword.classList.add('closed-eye');
    }
};

// Evento de clique no botão
btnRevealPassword.addEventListener('click', togglePasswordVisibility);

// Evento de input no campo de senha
inputPassword.addEventListener('input', (event) => {
    const value = event.target.value.trim();
    if (value !== '') {
        btnRevealPassword.classList.add('actived');
        btnRevealPassword.classList.remove('disable');
    } else {
        btnRevealPassword.classList.remove('actived');
        btnRevealPassword.classList.add('disable');
        
        // Restaura o tipo de input e a classe do botão
        inputPassword.type = 'password';
        btnRevealPassword.classList.remove('open-eye');
        btnRevealPassword.classList.add('closed-eye');
    }
});

// Evento de perda de foco no campo de senha
inputPassword.addEventListener('blur', () => {
    if (inputPassword.value.trim() === '') {
        inputPassword.type = 'password';
        btnRevealPassword.classList.remove('open-eye');
        btnRevealPassword.classList.add('closed-eye');
    }
});
