document.getElementById("btn__iniciar-sesion").addEventListener("click", IniciarSesion);
document.getElementById("btn__registrarse").addEventListener("click", register);
window.addEventListener("resize", anchoPagina);


//Declaracion de variables
var contenedor_login_register = document.querySelector(".contenedor__login-register");
var formulario_login = document.querySelector(".formulario__login");
var formulario_register = document.querySelector(".formulario__register");
var caja__trasera_login = document.querySelector(".caja__trasera-login");
var caja__trasera_register = document.querySelector(".caja__trasera-register");


function anchoPagina(){
    if(window.innerWidth > 850){
        caja__trasera_login.style.display = "block";
    caja__trasera_register.style.display = "block";
    }else{
        caja__trasera_register.style.display = "block";
        caja__trasera_register.style.opacity = "1";
        caja__trasera_login.style.display = "none";
        formulario_login.style.display = "block";
        formulario_registerstyle.display = "none";
        contenedor_login_register.style.left = "0px";
    }

}

anchoPagina();

function IniciarSesion(){

    if(window.innerWidth > 850){
    formulario_register.style.display = "none";
    contenedor_login_register.style.left = "10px";
    formulario_login.style.display = "block";
    caja__trasera_register.style.opacity = "1";
    caja__trasera_login.style.opacity = "0";

    }else{
        formulario_register.style.display = "none";
        contenedor_login_register.style.left = "0px";
        formulario_login.style.display = "block";
        caja__trasera_register.style.display = "block";
        caja__trasera_login.style.display = "none";

    }
    
}


function register(){

    if(window.innerWidth > 850){
        formulario_register.style.display = "block";
        contenedor_login_register.style.left = "410px";
        formulario_login.style.display = "none";
        caja__trasera_register.style.opacity = "0";
        caja__trasera_login.style.opacity = "1";
        
        }else{
            formulario_register.style.display = "block";
            contenedor_login_register.style.left = "0px";
            formulario_login.style.display = "none";
            caja__trasera_register.style.display = "none";
            caja__trasera_login.style.display = "block";
            caja__trasera_login.style.opacity = "1";
        }
    
}

function reload(){
    
}

function Showhide() {
    var ocultar = document.querySelector(".contenedor")[0];
    if(ocultar.style.visibility == "hidden"){
        ocultar.style.visibility = "visible";
    }else{
        ocultar.style.visibility = "hidden";
    }
}

const hideButton = document.getElement('hide-button');

hideButton.addEventListener('click', () =>{
    let hideImage = document.getElementById('hide-image');
    let currentDisplay = hideImage.style.display;

    hideImage.style.display = none;

})