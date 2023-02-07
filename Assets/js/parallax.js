let header = document.getElementById('header')

let nube1 = document.getElementById('nube1')
let transparente = document.getElementById('transparente')
let nube2 = document.getElementById('nube2')
let slogan = document.getElementById('slogan')
let btnIniciar = document.getElementById('btnIniciar')
let viento = document.getElementById('viento')
let persona = document.getElementById('persona')


window.addEventListener('scroll', function(){
    let value = window.scrollY;
    
    transparente.style.marginLeft =  value * 0.7 + 'px';
    nube1.style.left = value* -3  + 'px';
    nube2.style.left = value* -3  + 'px';
    btnIniciar.style.marginTop = value * 0.7 + 'px';
    slogan.style.marginBottom =   value* -1  + 'px';
    viento.style.left = value* -1  + 'px';
    /* header.style.marginTop = value * 0.4 + 'px'; */
    persona.style.marginLeft = value* 1  + 'px';

})

const navigation = document.querySelector('nav')
document.querySelector('.menu').onclick = function (){
    this.classList.toggle('active');
    navigation.classList.toggle('active');
}