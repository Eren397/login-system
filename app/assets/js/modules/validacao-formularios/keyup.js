export default function keyup(inputs) {
    let input = document.querySelectorAll(inputs)
    
    input.forEach((i, index) => {
        i.addEventListener('keyup', () => {
            removeRedBorder(index)
        })
    })

    function removeRedBorder(i) {
        input[i].style.border = null
    }
}