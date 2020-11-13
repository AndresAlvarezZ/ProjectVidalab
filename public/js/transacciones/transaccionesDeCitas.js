$(document).ready(function ()
{
    //AGREGAR EMPRESA
        $('#agregarForm').on('submit', function(e)
        {
            e.preventDefault();
            $.ajax
            ({
                type: "POST",
                url: "/citas/registrar",
                data: $('#agregarForm').serialize(),
                success: function (response)
                {
                    console.log(response)
                    $('#agregarEmpresa').modal('hide')
                    alert("¡Datos de la cita registrados exitosamente!");
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
    //



    //EDITAR
        $('.btnEditar').on('click', function()
        {
            $('#editarCita').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function()
            {
                return $(this).text();
            }).get();
            console.log(data);
            $('#idEditar').val(data[0]);
            $('#nombreDeLaEmpresa3').val(data[1]);
            $('#numeroDeTelefonoDeLaEmpresa3').val(data[2]);
            $('#correoElectronicoDeLaEmpresa3').val(data[3]);
            $('#direccionDeLaEmpresa3').val(data[4]);
        });

        $('#editarCita').on('submit', function(e)
        { 
            e.preventDefault();
            var id = $('#idEditar').val();
            $.ajax
            ({
                type: "PUT",
                url: "/empresas/"+id,
                data: $('#editarForm').serialize(),
                success: function (response)
                {
                    console.log(response)
                    $('#editarECita').modal('hide')
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
            $('#eliminarEmpresa').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function()
            {
                return $(this).text();
            }).get();
            console.log(data);
            $('#idEliminar').val(data[0]);
            $('#idDeLaEmpresa4').val(data[0]);
            $('#nombreDeLaEmpresa4').val(data[1]);
        });
        $('#eliminarForm').on('submit', function(e)
        {
            e.preventDefault();
            var id = $('#idEliminar').val();

            $.ajax
            ({
                type: "DELETE",
                url: "/empresas/"+id,
                data: $('#eliminarForm').serialize(),
                success: function (response)
                {
                    console.log(response);
                    $('#eliminarEmpresa').modal('hide');
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