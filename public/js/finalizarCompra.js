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
        tdArticulo = document.createElement('td');
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
    var brArticulos = document.createElement('br');
    var lbltotal = document.createElement('label');
    var txtTotal = document.createElement('label');
    var br = document.createElement('br');
    var br1 = document.createElement('br');
    lbltotal.textContent = 'Total de la compra: ';
    txtTotal.textContent = "¢"+total;
    txtTotal.id = 'txtTotal';
    finalizarInter.appendChild(br1);
    finalizarInter.appendChild(lbltotal);
    finalizarInter.appendChild(txtTotal);
    finalizarInter.appendChild(br);
    var  btnFinalizar = document.createElement('button');
    btnFinalizar.type = 'submit';
    btnFinalizar.name = 'FinalizarCompra';
    btnFinalizar.textContent = 'Finalizar Compra';
    btnFinalizar.id = 'borrarCarrito';
      finalizarInter.appendChild(btnFinalizar);
}
document.querySelector("#borrarCarrito").addEventListener('click', function()
{
  localStorage.clear();
});
