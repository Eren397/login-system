import keyup from './keyup.js'

export default function validateCad() {
    let btnCad = document.querySelector('.btn_cadastrar')
    let nomeCadastro = document.getElementById('nome')
    let usuarioCadastro = document.getElementById('usuario')
    let emailCadastro = document.getElementById('email')
    let senhaCadastro = document.getElementById('senha')
    let confirmarSenhaCadastro = document.getElementById('senha2')  

    if(btnCad !== null || nomeCadastro !== null || usuarioCadastro !== null || emailCadastro !== null || senhaCadastro !== null || confirmarSenhaCadastro !== null) {                 
    
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
   
}