var hayError;

$(document).ready(function ()
{
    //AGREGAR EMPRESA
        $('#tareaForm').on('submit', function(ev)
        {
            ev.preventDefault();
            $.ajax
            ({
                type: "POST",
                url: "/tareas/registrar",
                data: $('#tareaForm').serialize(),
                success: function (response)
                {
                    console.log(response)
                    $('#tareaForm')[0].reset()
                    Alerta("HUMAcheck", "¡Tarea agregada!", "success", "OK")
                },
                error: function(error)
                {
                    console.log(error)
                    Alerta("¡Error al agregar!", "Verifique que: \n\nQue todos los campos solicitados estén completos.\n¡Inténtelo nuevamente!", "warning", "OK")
                }
            });
        });
    //FIN DE AGREGAR




    //ELIMINAR
        $('.btnCompletar').on('click', function(ev)
        {
            ev.preventDefault();
            $('#eliminarTarea').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function()
            {
                return $(this).text();
            }).get();
            console.log(data);
            $('#idEliminar').val(data[0]);
            $('#tarea2').val(data[2]);
        });
        $('#eliminarTareaForm').on('submit', function(e)
        {
            e.preventDefault();
            var id = $('#idEliminar').val();

            Swal.fire
            ({
                title: '¿Desea eliminar esta tarea?',
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
                        url: "/tareas/eliminar/"+id,
                        data: $('#eliminarTareaForm').serialize(),
                        success: function (response)
                        {
                            console.log(response);
                            $('#eliminarTarea').modal('hide');
                            Alerta("HUMAcheck", "Tarea eliminada!", "success", "OK")
                        },
                        error: function(error)
                        {
                            console.log(error)
                            Alerta("¡Error al eliminar tarea!", "\n\n¡Inténtelo nuevamente!", "warning", "OK")
                        }
                        
                    });
                }else
                {
                    Swal.fire({
                        title: 'Cancelado',
                        text: '¡El proceso fue cancelado y la tarea no sufrió cambios!',
                        icon: 'error',
                    }).then((result) => 
                    {
                        window.location.href = "/homeAdmins";
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
                            window.location.href = "/homeAdmins";
                        }
                    }
                }); 
            }, 000);
        }
    //FIN DE FUNCIONES DE ALERTA


});