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
    cambiarTipo.setAttribute("min",10000000000)
    cambiarTipo.setAttribute("max",999999999999)
  }
  if (cambio.options[cambio.selectedIndex].value ==3) {
    cambiarTipo.setAttribute("min",1000000000)
    cambiarTipo.setAttribute("max",9999999999)
  }
  if (cambio.options[cambio.selectedIndex].value ==1) {
    cambiarTipo.setAttribute("min",100000000)
    cambiarTipo.setAttribute("max",999999999)
  }
}
function visible() {
  var cambio = document.getElementById('opcion')
  var lblImagen = document.getElementById('lblImagen')
  var txtImagen = document.getElementById('txtImagen')
  var lblVideo = document.getElementById('lblVideo')
  var txtVideo = document.getElementById('txtVideo')
  if (cambio.options[cambio.selectedIndex].value ==='0') {
  lblImagen.hidden = true
  txtImagen.hidden = true
  lblVideo.hidden = true
  txtVideo.hidden = true
  }
  if (cambio.options[cambio.selectedIndex].value ==='1') {
    lblImagen.hidden = false
    txtImagen.hidden = false
    lblVideo.hidden = true
    txtVideo.hidden = true
  }
  if (cambio.options[cambio.selectedIndex].value ==='2') {
    lblImagen.hidden = true
    txtImagen.hidden = true
    lblVideo.hidden = false
    txtVideo.hidden = false
  }
}
function visible1() {
  var cambio = document.getElementById('opcion1')
  var lblImagen = document.getElementById('lblImagen1')
  var txtImagen = document.getElementById('txtImagen1')
  var lblVideo = document.getElementById('lblVideo1')
  var txtVideo = document.getElementById('txtVideo1')
  if (cambio.options[cambio.selectedIndex].value ==='0') {
  lblImagen.hidden = true
  txtImagen.hidden = true
  lblVideo.hidden = true
  txtVideo.hidden = true
  }
  if (cambio.options[cambio.selectedIndex].value ==='1') {
    lblImagen.hidden = false
    txtImagen.hidden = false
    lblVideo.hidden = true
    txtVideo.hidden = true
  }
  if (cambio.options[cambio.selectedIndex].value ==='2') {
    lblImagen.hidden = true
    txtImagen.hidden = true
    lblVideo.hidden = false
    txtVideo.hidden = false
  }
}
