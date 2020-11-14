$(document).ready(function ()
{
    //AGREGAR 
        $('#agregarForm').on('submit', function(e)
        {
            e.preventDefault();
            $.ajax
            ({
                type: "POST",
                url: "/nuevoAdministrador/registro",
                data: $('#agregarForm').serialize(),
                success: function (response)
                {
                    console.log(response)
                    $('#agregarAdministrador').modal('hide')
                    alert("¡Datos del administrador(a) registrados exitosamente!");
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
    //FIN DE AGREGAR

    //ACTUALIZAR
        $('.btnEditar').on('click', function()
        {
            $('#editarAdministrador').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function()
            {
                return $(this).text();
            }).get();
            console.log(data);
            $('#idEditar').val(data[0]);
            $('#nombreCompleto3').val(data[1]);
            $('#telefonoDelUsuarioAdministrador3').val(data[3]);
            $('#email3').val(data[4]);
        });

        $('#editarAdministrador').on('submit', function(e)
        { 
            e.preventDefault();
            var id = $('#idEditar').val();
            $.ajax
            ({
                type: "PUT",
                url: "/administradores/"+id,
                data: $('#editarForm').serialize(),
                success: function (response)
                {
                    console.log(response)
                    $('#editarAdministrador').modal('hide')
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
    //FIN DE ACTUALIZAR


    //ACTUALIZAR
        $('.btnEstado').on('click', function()
        {
            $('#editarEstado').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function()
            {
                return $(this).text();
            }).get();
            console.log(data);
            $('#idEditarEstado').val(data[0]);
            $('#nombreCompleto4').val(data[1]);
        });

        $('#editarEstado').on('submit', function(e)
        { 
            e.preventDefault();
            var id = $('#idEditarEstado').val();
            $.ajax
            ({
                type: "PUT",
                url: "/administradores/"+id,
                data: $('#editarEstadoForm').serialize(),
                success: function (response)
                {
                    console.log(response)
                    $('#editarEstado').modal('hide')
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
    //FIN DE ACTUALIZAR ESTADO

});