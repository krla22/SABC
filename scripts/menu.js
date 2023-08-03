let nav = document.querySelector('nav')
let button = document.querySelector('.hamburger-menu')
let signUp = document.querySelector('.signUp')
let outside = document.getElementById('id02')

button.addEventListener('click', (event) => {
    nav.classList.toggle('open')
})      

signUp.addEventListener('click', () =>{
    nav.style.display = 'none'
})

outside.addEventListener('click', () =>{
    nav.style.display = 'block'
})