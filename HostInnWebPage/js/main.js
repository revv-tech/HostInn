let ubicacionPrincipal = window.pageYOffset;

AOS.init();

window.addEventListener("scroll", function(){

    let desplazamientoActual = window.pageYOffset;

    if (ubicacionPrincipal >= desplazamientoActual){
        document.getElementsByTagName("nav")[0].style.top = "0px"
    }
    else{
        this.document.getElementsByTagName("nav")[0].style.top = "-100px"
    }
    ubicacionPrincipal = desplazamientoActual;
})