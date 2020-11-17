carritoDeCompras = 'carrito';
cargarCarrito();
function cargarCarrito()
{
    var finalizar = [],
        datoStorage = localStorage.getItem(carritoDeCompras),
        finalizarInter = document.querySelector("#tabla ");
        articulos = document.querySelector("#Articulos");
    if (datoStorage !== null)
    {
        finalizar = JSON.parse(datoStorage);
    }
    finalizarInter.innerHTML = '';
    var total =0;
    finalizar.forEach(function (x, i)
    {
      var contador = i+1;

        var div = document.createElement("input"),
        articulo = document.createElement('tr'),
        tdArticulo = document.createElement('td'),
        tdPrecio = document.createElement('td');

        div.id = "codigo"+contador;
        div.name = "codigo"+contador;
        div.value = x.codigo;
        div.hidden = true;
        total = total + Number(x.costo);
        tdArticulo.innerHTML = "◙ "+ x.nombre;
        tdPrecio.innerHTML = '¢'+x.costo;
        tdArticulo.id = 'tdProcesar';
        tdPrecio.id = 'tdProcesar';
        articulo.appendChild(tdArticulo);
        articulo.appendChild(tdPrecio);
        articulos.appendChild(articulo);
        finalizarInter.appendChild(div);

    });
    var date = new Date(),
    txtFecha = document.createElement("input");
    txtFecha.id = 'fecha';
    txtFecha.name = 'fecha';
    txtFecha.value = date.getFullYear()+"-"+(date.getMonth()+1)+"-"+date.getDate()+" "+date.getHours()+":"+date.getMinutes()+':'+date.getSeconds();
    txtFecha.hidden = true;
    finalizarInter.appendChild(txtFecha);
    var brArticulos = document.createElement('br');
    var lbltotal = document.createElement('label');
    var txtTotal = document.createElement('label');
    var nombreDelCiente = document.createElement('label');
    var txtnombreDelCliente = document.createElement('input');
    nombreDelCiente.textContent ='Nombre';
    txtnombreDelCliente.name = 'nombreDelCiente';
    txtnombreDelCliente.required = true;
    txtnombreDelCliente.className = 'form form-control';
    var domicilioDelCliente = document.createElement('label');
    var txtdomicilioDelCliente = document.createElement('input');
    domicilioDelCliente.textContent ='Domicilio actual';
    txtdomicilioDelCliente.name = 'domicilioDelCiente';
    txtdomicilioDelCliente.required = true;
    txtdomicilioDelCliente.className = 'form form-control';
    var telefonoDelCliente = document.createElement('label');
    var txttelefonoDelCliente = document.createElement('input');
    telefonoDelCliente.textContent ='Teléfono';
    txttelefonoDelCliente.name = 'telefonoDelCliente';
    txttelefonoDelCliente.required = true;
    txttelefonoDelCliente.type = 'number';
    txttelefonoDelCliente.className = 'form form-control';
    finalizarInter.appendChild(nombreDelCiente);
    finalizarInter.appendChild(txtnombreDelCliente);
    finalizarInter.appendChild(domicilioDelCliente);
    finalizarInter.appendChild(txtdomicilioDelCliente);
    finalizarInter.appendChild(telefonoDelCliente);
    finalizarInter.appendChild(txttelefonoDelCliente);
    var br = document.createElement('br');
    var br1 = document.createElement('br');
    var br2 = document.createElement('br');
    lbltotal.textContent = 'Total de la compra: ';
    txtTotal.textContent = "¢"+total;
    txtTotal.id = 'txtTotal';
    finalizarInter.appendChild(br1);
    finalizarInter.appendChild(lbltotal);
    finalizarInter.appendChild(txtTotal);
    finalizarInter.appendChild(br);
    var  btnFinalizar = document.createElement('button');
    var btnSpan = document.createElement('span');
    btnSpan.innerHTML = 'una vez finalizada la compra, no hay vuelta atrás';
    btnSpan.className = 'tooltiptext';
    btnFinalizar.type = 'submit';
    btnFinalizar.name = 'FinalizarCompra';
    btnFinalizar.textContent = 'Finalizar Compra';
    btnFinalizar.id = 'borrarCarrito';
    btnFinalizar.className = 'btn btn-primary';
      finalizarInter.appendChild(btnFinalizar);
          btnFinalizar.appendChild(btnSpan);
}
document.querySelector("#borrarCarrito").addEventListener('click', function()
{
  localStorage.clear();
});
