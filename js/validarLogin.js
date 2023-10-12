
let form = document.querySelector('form').addEventListener('submit',function enviarForm(event){

    let InputEmail = document.getElementById('email');
    let InputSenha = document.getElementById('senha');

    let email = InputEmail.value;
    let senha = InputSenha.value;
    let erro = document.querySelector('.error-message');

    //error.innerHTML = '';

    //validando login 
    if (email.trim() === '' || email.length <=4 ) {
        event.preventDefault();
        InputEmail.style.border = "1px solid red";
        erro.textContent = 'ERRO! Digite um email válido';
        
    }else{
        InputEmail.style.border = "";
        erro.textContent = '';
    }
    
    if (senha.trim() === '' || senha.length <= 2 ) {
        event.preventDefault();
       
        InputSenha.style.border = "1px solid red";
        InputSenha.parentElement.querySelector('.error-message').textContent = 'ERRO! Digite uma senha válida';
    }else{
        InputSenha.style.border = "";
        InputSenha.parentElement.querySelector('.error-message').textContent = '';
    }

   

    
   //solicitação ajax pra verificar com servidor

    return true;
   
})




