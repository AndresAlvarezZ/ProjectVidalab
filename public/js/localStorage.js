
var carritoDeCompras = 'carrito';
cargarCarrito();

function AgregarCarrito(codigo,nombre,descripcion,costo,numeroDeMaquina,identificador)
{
    var codigo;
    var nombre;
    var descripcion;
    var costo = costo;
    var numeroDeMaquina;
    if (codigo === 0) return;
    let carrito =
    {
    	codigo: codigo,
      nombre: nombre,
      descripcion: descripcion,
      costo: costo,
      numeroDeMaquina: numeroDeMaquina

    };
    codigo.value = '';
    nombre.value = '';
    descripcion.value = '';
    costo.value = '';
    numeroDeMaquina.value = '';
    swal({
      title: identificador + " Agregado!",
      text: "Cuando estes listo recuerda ir al carrito para finalizar tu compra!",
      icon: "success",
    });
    AgregarCompra(carrito);
}



function AgregarCompra(carrito)
{
    var agregandoCarrito = [],
    datoStorage = localStorage.getItem(carritoDeCompras);
    if (datoStorage !== null)
    {
        agregandoCarrito = JSON.parse(datoStorage);
    }
    agregandoCarrito.push(carrito);
    localStorage.setItem(carritoDeCompras, JSON.stringify(agregandoCarrito));

}



function cargarCarrito()
{
    var carrito = [],
        datoStorage = localStorage.getItem(carritoDeCompras),
        carritoInter = document.querySelector("#tabla tbody");
    if (datoStorage !== null)
    {
        carrito = JSON.parse(datoStorage);
    }
    carritoInter.innerHTML = '';

    carrito.forEach(function (x, i)
    {
      var contador = i+1;
        var tr = document.createElement("tr"),
            tdIndice = document.createElement("td"),
            tdDescripcion = document.createElement("td", "tdDescripcion"),
            tdEliminar = document.createElement("td"),
            btnEliminar = document.createElement("button", "btnEliminar");

        tdIndice.innerHTML = contador;
        tdDescripcion.innerHTML ='<b>'+x.codigo +'<br>'+ x.nombre+'</b><br>'+ x.descripcion;

        btnEliminar.textContent = 'Eliminar Análisis';
        tdDescripcion.id = "tdDescripcion";
        btnEliminar.addEventListener('click', function()
        {
            eliminarDelCarrito(i);
        });

        tdEliminar.appendChild(btnEliminar);
        tr.appendChild(tdIndice);
        tr.appendChild(tdDescripcion);
        tr.appendChild(tdEliminar);
        carritoInter.appendChild(tr);
    });
}


function eliminarDelCarrito(carrito)
{
    var carritoAlmacenado = [],
        datoStorage = localStorage.getItem(carritoDeCompras);

    carritoAlmacenado = JSON.parse(datoStorage);
    carritoAlmacenado.splice(carrito, 1);
    localStorage.setItem(carritoDeCompras, JSON.stringify(carritoAlmacenado));
    cargarCarrito();
}
