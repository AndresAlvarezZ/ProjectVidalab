var hayError;

$(document).ready(function ()
{
    //AGREGAR
        $('#agregarForm').on('submit', function(ev)
        {
            ev.preventDefault();
            $.ajax
            ({
                type: "POST",
                url: "/paquetes/registrar",
                data: $('#agregarForm').serialize(),
                success: function (response)
                {
                    console.log(response)
                    $('#agregarForm')[0].reset()
                    Alerta("HUMAcheck", "¡Datos del Paquete registrados exitosamente!", "success", "OK")
                },
                error: function(error)
                {
                    console.log(error)
                    Alerta("¡Error al registrar!", "Verifique que: \n\nEl código del paquete NO se encuentre previamente registrado." + "\nO bien, que todos los campos solicitados estén completos y en el formato adecuado.\n¡Inténtelo nuevamente!", "warning", "OK")
                }
            });
        });
    //FIN DE AGREGAR



    //ACTUALIZAR
        $('.btnEditar').on('click', function(ev)
        {
            ev.preventDefault();
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
                    $('#agregarForm')[0].reset()
                    Alerta("HUMAcheck", "¡Datos del Paquete actualizados correctamente!", "success", "OK")
                },
                error: function(error)
                {
                    console.log(error)
                    Alerta("¡Error al actualizar registro!", "Verifique que: \n\nTodos los campos solicitados estén completos y en el formato adecuado.\n¡Inténtelo nuevamente!", "warning", "OK")
                }
            });
        });
    //FIN DE ACTUALIZAR


    //ELIMINAR
    $('.btnEliminar').on('click', function(ev)
    {
        ev.preventDefault();
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

    Swal.fire
    ({
        title: '¿Desea eliminar este registro?',
        text: "¡Los cambios no serán revertibles una vez sea eliminado!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '¡Sí!'
    }).then((result) => 
    {
        if (result.isConfirmed) 
        {
            $.ajax
            ({
                type: "DELETE",
                url: "/paquetes/"+id,
                data: $('#eliminarForm').serialize(),
                success: function (response)
                {
                    console.log(response);
                    $('#eliminarEmpresa').modal('hide');
                    Alerta("HUMAcheck", "¡Registro eliminado correctamente!", "success", "OK")
                },
                error: function(error)
                {
                    console.log(error)
                    Alerta("¡Error al eliminar registro!", "\n\n¡Inténtelo nuevamente!", "warning", "OK")
                }
                
            });
        }else
        {
            Swal.fire({
                title: 'Cancelado',
                text: '¡El proceso fue cancelado y el registro no sufrió cambios!',
                icon: 'error',
            }).then((result) => 
            {
                window.location.href = "/paquetes";
            })
        }
    })
});
//FIN DE ELIMINAR




    //FUNCIONES DE ALERTA
        function Alerta(titulo, mensaje, tipo, boton)
        {
            setTimeout(function () 
            {
                swal
                ({
                    title: titulo,
                    text: mensaje,
                    type: tipo,
                    confirmButtonText: boton
                },
                function(isConfirm)
                {
                    if(tipo == "success")
                    {
                        if (isConfirm) 
                        {
                            window.location.href = "/paquetes";
                        }
                    }
                }); 
            }, 000);
        }
    //FIN DE FUNCIONES DE ALERTA
});