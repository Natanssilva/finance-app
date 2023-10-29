

let formAtualizar = document.querySelector('#formAtualizar').addEventListener('submit', function recuperarSenha(event){
    event.preventDefault();
 
     let buttonAtualizar = document.querySelector('#buttonAtualizaSenha');
     let inputSenhaAtualizada = document.querySelector('#atualizarSenha');
     let SenhaAtualizada = inputSenhaAtualizada.value;
    
     let error = document.querySelector('.error-message'); 

 
     if (SenhaAtualizada.trim() === '' || SenhaAtualizada.length <= 3) {
        inputSenhaAtualizada.style.border = '1px solid red';
         error.innerHTML = 'Digite uma senha válido!';
     } else {
        inputSenhaAtualizada.style.border = '';
         error.innerHTML = '';
     }

        //cria um novo objeto URLSearchParams que representa a parte da consulta (query string) da URL atual.
        
        const urlParams = new URLSearchParams(window.location.search);  //window.location.search pega o parametro da url ou seja apos o ? (query string)
        const chaveRecuperacao = urlParams.get('chave'); //pega com get o valor chave da url

        // Adicione a chaveRecuperacao aos dados do formulário
        const formData = new FormData(document.querySelector('#formAtualizar'));
        formData.append('chave', chaveRecuperacao);


     fetch('processar_atualizar_senha.php',{
        method: 'POST',
        body: formData   //pegar os dados do form
    })
    .then(response => response.json())
    .then(response =>{

        if (response.status == 'true') {
            console.log(response);
        } else {
            console.log(response);
        }

     
    });
 
 
   
    
 });