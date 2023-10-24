


<<<<<<< HEAD
let form = document.querySelector('#form').addEventListener('submit', function enviarForm(event) {
=======
let form = document.querySelector('form').addEventListener('submit', function enviarForm(event) {
>>>>>>> d2c5970379022a3fcaa074037e6aaf50fe743f70
  event.preventDefault(); // Pausa o evento de envio

  

  const buttonLogin = document.querySelector('#button-submit');
  let InputEmail = document.getElementById('email');
  let InputSenha = document.getElementById('senha');

  let email = InputEmail.value;
  let senha = InputSenha.value;
  let erro = document.querySelector('.error-message');
  let erroLogin = document.querySelector('.erro-login');
  const regexLogin = /[,\;!?\[\]{}()#$%^&*]/;

  // Validando login
  if (email.trim() === '' || email.length <= 4 || regexLogin.test(email)) {
<<<<<<< HEAD

    InputEmail.style.border = "1px solid red";
    erro.textContent = 'Email inválido';
=======
    event.preventDefault();
    InputEmail.style.border = "1px solid red";
    erro.textContent = 'ERRO! Email inválido';
>>>>>>> d2c5970379022a3fcaa074037e6aaf50fe743f70
  } else {
    InputEmail.style.border = "";
    erro.textContent = '';
  }

  if (senha.trim() === '' || senha.length <= 2) {
<<<<<<< HEAD

    InputSenha.style.border = "1px solid red";
    InputSenha.parentElement.querySelector('.error-message').textContent = 'Digite uma senha válida';
=======
    event.preventDefault();
    InputSenha.style.border = "1px solid red";
    InputSenha.parentElement.querySelector('.error-message').textContent = 'ERRO! Digite uma senha válida';
>>>>>>> d2c5970379022a3fcaa074037e6aaf50fe743f70
  } else {
    InputSenha.style.border = "";
    InputSenha.parentElement.querySelector('.error-message').textContent = '';
  }

  if (email && senha) {
    buttonLogin.setAttribute('disabled', 'true');
    buttonLogin.innerHTML = `
    <svg class="animate-spin h-5 w-5 mr-3 ..." viewBox="0 0 24 24">
    <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M304 48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zm0 416a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM48 304a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm464-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM142.9 437A48 48 0 1 0 75 369.1 48 48 0 1 0 142.9 437zm0-294.2A48 48 0 1 0 75 75a48 48 0 1 0 67.9 67.9zM369.1 437A48 48 0 1 0 437 369.1 48 48 0 1 0 369.1 437z"/></svg>
   
    </svg>`;

    fetch('processar_login.php',{
      method: 'POST',
<<<<<<< HEAD
      body: new URLSearchParams(new FormData(document.querySelector('#form')))    //pegar os dados do form
    })

    .then(response => response.json())
    .then(response => {
      if (response.status == 'true') {
 
=======
      body: new URLSearchParams(new FormData(document.querySelector('form')))    //pegar os dados do form
    })

    .then(response => response.json())
    .then(data => {
      if (data.status == 'true') {
>>>>>>> d2c5970379022a3fcaa074037e6aaf50fe743f70
          setTimeout(function removerAnimação() { //função callback, ou seja uma função passada como argumento
            // tirando a animação
            buttonLogin.innerHTML = 'Enviar';
            buttonLogin.removeAttribute('disabled');

            // Enviar o formulário
<<<<<<< HEAD
            
            document.querySelector('#form').submit();
            window.location.href = response.redirect; //redirecionando pra home (página do usuario)

          }, 2800);
      } else {
=======
            document.querySelector('form').submit();
          }, 2800);
      } else {
        event.preventDefault();
>>>>>>> d2c5970379022a3fcaa074037e6aaf50fe743f70
        buttonLogin.innerHTML = 'Enviar';
        buttonLogin.removeAttribute('disabled');
        erroLogin.innerHTML = 'Login incorreto. Tente Novamente';
      }

    });


    
  } 
})
