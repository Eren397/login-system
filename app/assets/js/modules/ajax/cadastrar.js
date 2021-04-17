export default function cadAJAX() {
    const formCadastro = document.querySelector('.form__cadastro')
   
    formCadastro.addEventListener('submit', cadastrar)

    function cadastrar(e) {
        e.preventDefault()
        let nome =  document.getElementById('nome').value
        let usuario = document.getElementById('usuario').value
        let email = document.getElementById('email').value
        let senha = document.getElementById('senha').value
        let senha2 = document.getElementById('senha2').value
        let mensagem = document.querySelector('.error-msg')
        
        let xhr = new XMLHttpRequest()
        let params = 'nome_cadastro='+nome+'&usuario_cadastro='+usuario+'&email_cadastro='+email+'&senha_cadastro='+senha+'&senha_confirmacao_cadastro='+senha2
        let url = 'cadastro/cadastrar'
        xhr.open('POST', url, true)
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')
        xhr.onload = () => {
            if(xhr.status === 200) {
                
                if(xhr.responseText === 'Cadastrado') {
                    mensagem.innerHTML = xhr.responseText
                    cleanInputs()
                }else if(xhr.responseText === 'Erro ao cadastrar. Tente novamente') {
                    mensagem.innerHTML = xhr.responseText
                }else if(xhr.responseText === 'Usuário já existe') {
                    mensagem.innerHTML = xhr.responseText
                }
                
            }        
        }
        xhr.send(params)        
    }

    function cleanInputs() {
        document.getElementById('nome').value = ''
        document.getElementById('usuario').value = ''
        document.getElementById('email').value = ''
        document.getElementById('senha').value = ''
        document.getElementById('senha2').value = ''
    }
}