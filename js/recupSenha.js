

let formRecupSenha = document.querySelector('#formRecup').addEventListener('submit', function recuperarSenha(event){
   event.preventDefault();

    let buttonRecup = document.querySelector('#button-recuperar-senha');
    let inputEmailRecup = document.querySelector('#emailSenha');
    let emailRecup = inputEmailRecup.value;
   
    let error = document.querySelector('.error-message'); 
    const regexLogin = /[,\;!?\[\]{}()#$%^&*]/;

    if (emailRecup.trim() === '' || regexLogin.test(emailRecup) ) {
        inputEmailRecup.style.border = '1px solid red';
        error.innerHTML = 'Digite um email válido!';
    } else {
        inputEmailRecup.style.border = '';
        error.innerHTML = '';
    }


    if (emailRecup) {
        
        buttonRecup.setAttribute('disabled', 'true')
        buttonRecup.innerHTML = `
            <svg class="animate-spin h-5 w-5 mr-3 ..." viewBox="0 0 24 24">
            <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M304 48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zm0 416a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM48 304a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm464-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM142.9 437A48 48 0 1 0 75 369.1 48 48 0 1 0 142.9 437zm0-294.2A48 48 0 1 0 75 75a48 48 0 1 0 67.9 67.9zM369.1 437A48 48 0 1 0 437 369.1 48 48 0 1 0 369.1 437z"/></svg>
            </svg>
        `;


        fetch('processar_recuperar_senha.php',{
            method: 'POST',
            body: new URLSearchParams(new FormData(document.querySelector('#formRecup')))    //pegar os dados do form
        })
        .then(response => response.json())
        .then(response =>{

            if (response.status == 'true') {

                setTimeout(function removerAnimação(){
            
                    buttonRecup.innerHTML = 'ENVIAR';
                    buttonRecup.removeAttribute('disabled');
        
                     document.querySelector('#formRecup').submit();
                    window.location.href = response.redirect;
                }, 2000)
            }else if(response.status == 'false'){
             
                buttonRecup.innerHTML = 'ENVIAR';
                buttonRecup.removeAttribute('disabled');
                error.innerHTML = 'Não existe um login com esse email!';
            }
        
        });
    }

   
});