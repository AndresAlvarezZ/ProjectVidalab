var hayError;
$(document).ready(function ()
{
    //AGREGAR
        $('#agregarForm').on('submit', function(e)
        {
            e.preventDefault();
            $.ajax
            ({
                type: "POST",
                url: "/pruebas/registrar",
                data: $('#agregarForm').serialize(),
                success: function (response)
                {
                    console.log(response)
                    $('#agregarForm')[0].reset()
                    recargar()
                },
                error: function(error)
                {
                    console.log(error)
                    swal({
                      title: "¡Error de registro!",
                      text: "Asegurese que los campos solicitados estén rellenos. o si el codigo ingresado ya existe!",
                      type: "warning",
                    });

                }

            });

        });
function recargar(){
  setTimeout(function () {
swal({
  title: "Analisis Agregado Exitosamente!",
  text: "HUMACHECK",
  type: "success",
  confirmButtonText: "OK"
},
function(isConfirm){
  if (isConfirm) {
    window.location.href = "/pruebas";
  }
}); }, 000);
}

    //EDITAR
        $('.btnEditar').on('click', function()
        {
            $('#editarPrueba').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function()
            {
                return $(this).text();
            }).get();
            console.log(data);
            $('#idEditar').val(data[0]);
            $('#codigoDelAnalisis3').val(data[0]);
            $('#nombreDelAnalisis3').val(data[1]);
            $('#numeroDeMaquina3').val(data[2]);
            $('#descripcionDelAnalisis3').val(data[3]);
            $('#costoDelAnalisis3').val(data[4]);
        });

        $('#editarPrueba').on('submit', function(e)
        {
            e.preventDefault();
            var id = $('#idEditar').val();
            $.ajax
            ({
                type: "PUT",
                url: "/pruebas/"+id,
                data: $('#editarForm').serialize(),
                success: function (response)
                {
                    console.log(response)
                    $('#editarPrueba').modal('hide')
                    alert("¡Actualización de datos exitosa!");
                    location.reload();
                },
                error: function(error)
                {
                    console.log(error)
                    alert("¡Error de actualización, inténtelo nuevamente!");
                }
            });
        });


    //ELIMINAR
        $('.btnEliminar').on('click', function()
        {
            $('#eliminarPrueba').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function()
            {
                return $(this).text();
            }).get();
            console.log(data);
            $('#idEliminar').val(data[0]);
            $('#codigoDelAnalisis4').val(data[0]);
            $('#nombreDelAnalisis4').val(data[1]);
            $('#costoDelAnalisis4').val(data[4]);
        });
        $('#eliminarForm').on('submit', function(e)
        {
            e.preventDefault();
            var id = $('#idEliminar').val();

            $.ajax
            ({
                type: "DELETE",
                url: "/pruebas/"+id,
                data: $('#eliminarForm').serialize(),
                success: function (response)
                {
                    console.log(response);
                    $('#eliminarPrueba').modal('hide');
                    alert('Registro eliminado correctamente!');
                    location.reload();
                },
                error: function(error)
                {
                    console.log(error)
                    alert("Error, inténtelo nuevamente!");
                }
            });
        });
});
