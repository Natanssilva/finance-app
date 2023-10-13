let formCadastro = document.querySelector('#formCadastro').addEventListener('submit', function formCadastro(evento){
    let inputNome = document.querySelector('#nome');
    let nome = inputNome.value;
    let InputemailCadastro = document.querySelector('#emailCadastro');
    let emailCadastro = InputemailCadastro.value;

    let inputSenhaCadastro = document.querySelector('#senhaCadastro');
    let SenhaCadastro = inputSenhaCadastro.value;

    const regexComSimbolos = /[,\;!?\[\]{}()#$%^&*]/;


    if (nome.trim() == '' || nome.length <= 2) {
        evento.preventDefault();
        inputNome.style.border = "1px solid red";
        inputNome.parentElement.querySelector('.error-message').textContent = 'ERRO! Digite um nome válido';
    } else {
        inputNome.style.border = "";
        inputNome.parentElement.querySelector('.error-message').textContent = '';
    }

    if (emailCadastro.trim() == '' || emailCadastro.length <= 4 || regexComSimbolos.test(emailCadastro)) {
        evento.preventDefault();
        InputemailCadastro.style.border = "1px solid red";
        InputemailCadastro.parentElement.querySelector('.error-message').textContent = 'ERRO! Digite um email válido';
    } else {
        InputemailCadastro.style.border = "";
        InputemailCadastro.parentElement.querySelector('.error-message').textContent = '';
    }

    if (SenhaCadastro.trim() === '' || SenhaCadastro.length <= 2 ) {
        evento.preventDefault();
       
        inputSenhaCadastro.style.border = "1px solid red";
        inputSenhaCadastro.parentElement.querySelector('.error-message').textContent = 'ERRO! Digite uma senha válida';
    }else{
        inputSenhaCadastro.style.border = "";
        inputSenhaCadastro.parentElement.querySelector('.error-message').textContent = '';
    }

    return true;
})