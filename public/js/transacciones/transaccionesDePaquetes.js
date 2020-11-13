$(document).ready(function ()
{
    //AGREGAR
        $('#agregarForm').on('submit', function(e)
        {
            e.preventDefault();
            $.ajax
            ({
                type: "POST",
                url: "/paquetes/registrar",
                data: $('#agregarForm').serialize(),
                success: function (response)
                {
                    console.log(response)
                    $('#agregarPaquete').modal('hide')
                    alert("¡Datos de paquete promocional registrados exitosamente!");
                    location.reload();
                    $('#agregarForm')[0].reset()
                },
                error: function(error)
                {
                    console.log(error)
                    alert("¡Error de registro, inténtelo nuevamente! Asegurese que los campos solicitados estén rellenos.");
                }
            });
        });



    //EDITAR
        $('.btnEditar').on('click', function()
        {
            $('#editarPaquete').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function()
            {
                return $(this).text();
            }).get();
            console.log(data);
            $('#idEditar').val(data[0]);
            $('#codigoDelPaquete3').val(data[0]);
            $('#nombreDelPaquete3').val(data[1]);
            $('#descripcionDelPaquete3').val(data[2]);
            $('#costoDelPaquete3').val(data[3]);

        });

        $('#editarPaquete').on('submit', function(e)
        { 
            e.preventDefault();
            var id = $('#idEditar').val();
            $.ajax
            ({
                type: "PUT",
                url: "/paquetes/"+id,
                data: $('#editarForm').serialize(),
                success: function (response)
                {
                    console.log(response)
                    $('#editarPaquete').modal('hide')
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
            $('#eliminarPaquete').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function()
            {
                return $(this).text();
            }).get();
            console.log(data);
            $('#idEliminar').val(data[0]);
            $('#codigoDelPaquete4').val(data[0]);
            $('#nombreDelPaquete4').val(data[1]);
            $('#costoDelPaquete4').val(data[3]);
        });
        $('#eliminarForm').on('submit', function(e)
        {
            e.preventDefault();
            var id = $('#idEliminar').val();

            $.ajax
            ({
                type: "DELETE",
                url: "/paquetes/"+id,
                data: $('#eliminarForm').serialize(),
                success: function (response)
                {
                    console.log(response);
                    $('#eliminarPaquete').modal('hide');
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