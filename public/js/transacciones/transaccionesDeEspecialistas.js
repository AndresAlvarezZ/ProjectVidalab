var hayError;

$(document).ready(function ()
{
    
    //AGREGAR IMAGEN DE PERFIL
        $('.btnPerfil').on('click', function(ev)
        {
            ev.preventDefault();
            $('#agregarImagen').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function()
            {
                return $(this).text();
            }).get();
            console.log(data);
            $('#idAgregarImagen').val(data[0]);
            
        });

    //FIN AGREGAR IMAGEN DE PERFIL   
    
    
    //AGREGAR
        $('#agregarEspecialista').on('submit', function(ev)
        {
            ev.preventDefault();
            $.ajax
            ({
                type: "POST",
                url: "/especialistas/registrar",
                data: $('#agregarForm').serialize(),
                success: function (response)
                {
                    console.log(response)
                    $('#agregarForm')[0].reset()
                    Alerta("HUMAcheck", "¡Datos del/la Especialista registrados exitosamente!", "success", "OK")
                },
                error: function(error)
                {
                    console.log(error)
                    Alerta("¡Error al registrar!", "Verifique que: \n\nEl/la especialista NO se encuentre previamente registrado.\nO bien, que todos los campos solicitados estén completos y en el formato adecuado.\n¡Inténtelo nuevamente!", "warning", "OK")
                }
            });
        });
    //FIN DE AGREGAR


    //ACTUALIZAR
        $('.btnEditar').on('click', function(ev)
        {
            ev.preventDefault();
            $('#editarEspecialista').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function()
            {
                return $(this).text();
            }).get();
            console.log(data);
            $('#idEditar').val(data[0]);
            $('#correoDelEspecialista3').val(data[3]);
            $('#sedeDelEspecialista3').val(data[4]);
            $('#especialidadesDelEspecialista3').val(data[5]);
        });

        $('#editarEspecialista').on('submit', function(e)
        { 
            e.preventDefault();
            var id = $('#idEditar').val();
            $.ajax
            ({
                type: "PUT",
                url: "/especialistas/"+id,
                data: $('#editarForm').serialize(),
                success: function (response)
                {
                    console.log(response)
                    $('#editarForm')[0].reset()
                    Alerta("HUMAcheck", "¡Datos del/la especialista actualizados correctamente!", "success", "OK")
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
            $('#eliminarEspecialista').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function()
            {
                return $(this).text();
            }).get();
            console.log(data);
            $('#idEliminar').val(data[0]);
            $('#nombreCompletoDelEspecialista4').val(data[1]);
            $('#sedeDelEspecialista4').val(data[4]);
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
                        url: "/especialistas/"+id,
                        data: $('#eliminarForm').serialize(),
                        success: function (response)
                        {
                            console.log(response);
                            $('#eliminarEspecialista').modal('hide');
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
                        window.location.href = "/especialistas";
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
                            window.location.href = "/especialistas";
                        }
                    }
                }); 
            }, 000);
        }
    //FIN DE FUNCIONES DE ALERTA


});