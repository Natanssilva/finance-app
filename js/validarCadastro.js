let formSubmited = false
let formCadastro = document.querySelector('#formCadastro').addEventListener('submit', function formCadastro(evento){
    evento.preventDefault();

    const buttonCadastro = document.querySelector('#buttonCadastro');
    let inputNome = document.querySelector('#nome');
    let nome = inputNome.value;
    let InputemailCadastro = document.querySelector('#emailCadastro');
    let emailCadastro = InputemailCadastro.value;
    let erroCadastro = document.querySelector('.cadastro-error');
    let inputSenhaCadastro = document.querySelector('#senhaCadastro');
    let SenhaCadastro = inputSenhaCadastro.value;
    let sobrenome = document.querySelector('#sobrenome');

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

    if (nome && emailCadastro && SenhaCadastro) {
        buttonCadastro.setAttribute('disabled', 'true')
        buttonCadastro.innerHTML = `
            <svg class="animate-spin h-5 w-5 mr-3 ..." viewBox="0 0 24 24">
            <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M304 48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zm0 416a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM48 304a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm464-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM142.9 437A48 48 0 1 0 75 369.1 48 48 0 1 0 142.9 437zm0-294.2A48 48 0 1 0 75 75a48 48 0 1 0 67.9 67.9zM369.1 437A48 48 0 1 0 437 369.1 48 48 0 1 0 369.1 437z"/></svg>
            </svg>
        `;

        fetch('processar_cadastro.php',{
            method: 'POST',
            body: new URLSearchParams(new FormData(document.querySelector('#formCadastro')))    //pegar os dados do form
        })
        .then(response => response.json())
        .then(data => {
            if (data.status == 'true') {
                setTimeout(function removerAnimação(){
            
                    buttonCadastro.innerHTML = 'ENVIAR';
                    buttonCadastro.removeAttribute('disabled');
        
                    document.querySelector('#formCadastro').submit();
                    window.location.href(data.redirect)
                }, 2800)
            }else{
                evento.preventDefault();
                buttonCadastro.innerHTML = 'ENVIAR';
                buttonCadastro.removeAttribute('disabled');
                erroCadastro.innerHTML = 'Cadastro mal sucedido!';
            }
        })

       
    }


})