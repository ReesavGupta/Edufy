burger = document.querySelector('.burger')
navbar = document.querySelector('.navbar')
rightNav = document.querySelector('.rightNav')
navlist = document.querySelector('.nav-list')

burger.addEventListener('click', ()=>{
    rightNav.classList.toggle('v-class');
    navlist.classList.toggle('v-class');
    navbar.classList.toggle('h-class');
}) 