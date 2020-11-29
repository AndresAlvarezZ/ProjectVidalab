var invertalId = null;
var contador = 0;
var cambiador = 0;

function actualizar() {
    contador++;
    cambiador++;

    let asunto = document.getElementById('asunto')
    let mensaje = document.getElementById('mensaje')
    let boton = document.getElementById('btnEnviar')
    if (asunto.value!=''&&mensaje.value!='') {
    if (cambiador==1) {
      boton.innerHTML = 'enviando.'
      console.log(contador)
    }
    if (cambiador==2) {
      boton.innerHTML = 'enviando..'
      console.log(contador)
    }
    if (cambiador==3) {
      boton.innerHTML = 'enviando...'
      console.log(contador)
    }
    if (cambiador==3) {
      cambiador=0
    }
    if (contador==21) {
      clearInterval(intervalId)
    }
}
}

function iniciarContador() {
    intervalId = setInterval(actualizar, 1000); // Cada segundo
}
