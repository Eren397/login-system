import keyup from './keyup.js'

export default function loginValidate() {
    let usuario = document.getElementById('usuario_login')
    let senha = document.getElementById('senha_login')
    let btnLogin = document.querySelector('.btn-login')
    let userEvents = ['click', 'touchend']

    userEvents.forEach(userEvent => {
        btnLogin.addEventListener(userEvent, validate)
    }
    )
    function validate(e) {
        if(usuario.value === null || usuario.value === '') {
            e.preventDefault()
            usuario.style.border = '1px solid red'
            keyup('.form-login input')
            console.log('oi')
        }else if(senha.value === null || senha.value === '') {
            e.preventDefault()
            senha.style.border = '1px solid red'
            keyup('.form-login input')
           
        }   
    }
}