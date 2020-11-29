function cambiarNombre() {
  let asunto = document.getElementById('asunto')
  let mensaje = document.getElementById('mensaje')
  let boton = document.getElementById('btnEnviar')

if (asunto.value!='') {
  setTimeout(cambio(),9000)
}
}
function cambio() {
  let boton = document.getElementById('btnEnviar')
  boton.innerHTML = 'enviando.'
}
