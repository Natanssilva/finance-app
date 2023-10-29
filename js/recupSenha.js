

let formRecupSenha = document.querySelector('#formRecup').addEventListener('submit', function recuperarSenha(event){
   event.preventDefault();

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

    fetch('processar_recuperar_senha.php',{
        method: 'POST',
        body: new URLSearchParams(new FormData(document.querySelector('#formRecup')))    //pegar os dados do form
    })
    .then(response => response.json())
    .then(response =>{
        
    })
});