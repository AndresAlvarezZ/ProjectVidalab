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
                url: "/citas/registrar",
                data: $('#agregarForm').serialize(),
                success: function (response)
                {
                    console.log(response)
                    $('#agregarForm')[0].reset()
                    Alerta("HUMAcheck", "¡Datos de la Cita registrados exitosamente!", "success", "OK")
                },
                error: function(error)
                {
                    console.log(error)
                    Alerta("¡Error al registrar!", "Verifique que: \n\nTodos los campos solicitados estén completos y en el formato adecuado.\n¡Inténtelo nuevamente!", "warning", "OK")
                }
            });
        });
    //FIN DE AGREGAR



    //ACTUALIZAR
        $('.btnEditar').on('click', function(ev)
        {
            ev.preventDefault();
            $('#editarCita').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function()
            {
                return $(this).text();
            }).get();
            console.log(data);
            $('#idEditar').val(data[0]);
            $('#idCita').val(data[1]);
            $('#fechaDeCita3').val(data[2]);
            $('#horaDeCita3').val(data[3]);
            $('#numeroDeClientesPorAtender3').val(data[4]);
            $('#tiposDeAnalisisRequeridos3').val(data[5]);
            $('#nombreDelSolicitante3').val(data[6]);
        });

        $('#editarCita').on('submit', function(e)
        {
            e.preventDefault();
            var id = $('#idCita').val();
            $.ajax
            ({
                type: "PUT",
                url: "/citas/"+id,
                data: $('#editarForm').serialize(),
                success: function (response)
                {


                    Alerta("HUMAcheck", "¡Datos de la Empresa actualizados correctamente!", "success", "OK")
                },
                error: function(error)
                {
                    console.log(error)
                }
            });
        });
    //FIN DE ACTUALIZAR


    //ELIMINAR
        $('.btnEliminar').on('click', function()
        {
            $('#eliminarCita').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function()
            {
                return $(this).text();
            }).get();
            $('#idEliminar').val(data[1]);
            $('#fechaDeCita4').val(data[2]);
            $('#horaDeCita4').val(data[3]);
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
                        url: "/citas/"+id,
                        data: $('#eliminarForm').serialize(),
                        success: function (response)
                        {
                            console.log(response);
                            $('#eliminarCita').modal('hide');
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
                        window.location.href = "/empresas";
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
                            window.location.href = "/citas/";
                        }
                    }
                });
            }, 000);
        }
    //FIN DE FUNCIONES DE ALERTA


});
