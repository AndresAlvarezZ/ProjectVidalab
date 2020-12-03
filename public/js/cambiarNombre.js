var invertalId = null;
var contador = 0;
var cambiador = 0;

function actualizar() {
    contador++;
    cambiador++;

    let asunto = document.getElementById('asunto')
    let mensaje = document.getElementById('mensaje')
    let boton = document.getElementById('btnEnviar')
    if (asunto.value=='' || mensaje.value=='') {
      clearInterval(intervalId)
    }
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
  let boton = document.getElementById('btnEnviar')
  if (asunto.value!=''&&mensaje.value!='') {
  boton.innerHTML = 'enviando'
}
    intervalId = setInterval(actualizar, 1000); // Cada segundo
}
function tipoIdentification() {
  var cambio = document.getElementById('tipoIdentificacion')
  var cambiarTipo = document.getElementById('dniDelUsuario')
  if (cambio.options[cambio.selectedIndex].value ==2) {
    cambiarTipo.setAttribute("min",11)
    cambiarTipo.setAttribute("max",12)
  }
  if (cambio.options[cambio.selectedIndex].value ==3) {
    cambiarTipo.setAttribute("min",10)
    cambiarTipo.setAttribute("max",10)
  }
  if (cambio.options[cambio.selectedIndex].value ==1) {
    cambiarTipo.setAttribute("min",9)
    cambiarTipo.setAttribute("max",9)
  }
}
