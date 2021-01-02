var fecha1 = moment('2016-07-12');
var fecha2 = moment('2016-08-01');

console.log(fecha2.diff(fecha1, 'days'), ' dias de diferencia');

var edad = document.getElementById('edad')

edad.innerHTML = (fecha2.diff(fecha1, 'days'), ' dias de diferencia');
