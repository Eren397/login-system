import keyup from './keyup.js'

export default function validateCad() {

    let btnCad = document.querySelector('.btn_cadastrar')
    let nomeCadastro = cad.nome_cadastro
    let usuarioCadastro = cad.usuario_cadastro
    let emailCadastro = cad.email_cadastro
    let senhaCadastro = cad.senha_cadastro
    let confirmarSenhaCadastro = cad.senha_confirmacao_cadastro

    

    let userEvents = ['click', 'touchend']
    userEvents.forEach(userEvent => {
        btnCad.addEventListener(userEvent, verificarCad)
    })

    function verificarCad(e) {
        
        if(nomeCadastro.value === undefined || nomeCadastro.value === '') {
            e.preventDefault()
            nomeCadastro.style.border = '1px solid red'
            keyup('.form__cadastro input')
        }else if(usuarioCadastro.value === undefined || usuarioCadastro.value === '') {
            e.preventDefault()
            usuarioCadastro.style.border = '1px solid red'
            keyup('.form__cadastro input')
        }else if(emailCadastro.value === undefined || emailCadastro.value === '') {
            e.preventDefault()
            emailCadastro.style.border = '1px solid red'
            keyup('.form__cadastro input')
        }else if(senhaCadastro.value === undefined || senhaCadastro.value === '') {
            e.preventDefault()
            senhaCadastro.style.border = '1px solid red'
            keyup('.form__cadastro input')
        }else if(confirmarSenhaCadastro.value === undefined || confirmarSenhaCadastro.value === '') {
            e.preventDefault()
            confirmarSenhaCadastro.style.border = '1px solid red'
            keyup('.form__cadastro input')
        }else if(confirmarSenhaCadastro.value !== senhaCadastro.value) {
            e.preventDefault()
            let errorMsg = document.querySelector('.error-msg')
            errorMsg.innerHTML = `<p>As senhas devem ser iguais</p>`
        }        
    }
}