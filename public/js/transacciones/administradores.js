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
                url: "/nuevoAdministrador/registrar",
                data: $('#agregarForm').serialize(),
                success: function (response)
                {
                    console.log(response)
                    $('#agregarForm')[0].reset()
                    Alerta("agregarAdministrador", "HUMAcheck", "¡Datos del Administrador registrados exitosamente!", "success", "OK")
                },
                error: function(error)
                {
                    console.log(error)
                    Alerta("agregarAdministrador", "¡Error al registrar!", "Verifique que: \n\nEl administrador no se encuentra previamente registrado." + "\nO bien, que todos los campos solicitados estén completos y en el formato adecuado.\n¡Inténtelo nuevamente!", "warning", "OK")
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
                    $('#agregarForm')[0].reset()
                    Alerta("editarAdministrador", "HUMAcheck", "¡Datos del/la Administrador(a) actualizados correctamente!", "success", "OK")
                },
                error: function(error)
                {
                    console.log(error)
                    Alerta("editarAdministrador", "¡Error al actualizar registro!", "Verifique que: \n\nTodos los campos solicitados estén completos y en el formato adecuado.\n¡Inténtelo nuevamente!", "warning", "OK")
                }
            });
        });
    //FIN DE ACTUALIZAR


    //ACTUALIZAR ESTADO A INACTIVAR
        $('.btnInactivar').on('click', function()
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
            $('#numeroDeCedula4').val(data[2]);

        });

        $('#editarEstado').on('submit', function(e)
        { 
            e.preventDefault();
            var id = $('#idEditarEstado').val();
            $.ajax
            ({
                type: "PUT",
                url: "/administradores/inactivar/"+id,
                data: $('#editarEstadoForm').serialize(),
                success: function (response)
                {
                    console.log(response)
                    $('#agregarForm')[0].reset()
                    Alerta("inactivarAdministrador", "HUMAcheck", "¡Administrador(a) se le ha DENEGADO el acceso al sistema correctamente!", "success", "OK")
                },
                error: function(error)
                {
                    console.log(error)
                    Alerta("inactivarAdministrador","¡Error al actualizar estado inactivar!", "Verifique que: \n\nEl dato solicitado se haya ingresado y en el formato adecuado.\n¡Inténtelo nuevamente!", "warning", "OK")
                }
            });
        });
    //FIN DE ACTUALIZAR ESTADO


    //ACTUALIZAR ESTADO A ACTIVAR
        $('.btnActivar').on('click', function()
        {
            $('#editarEstadoActivar').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function()
            {
                return $(this).text();
            }).get();
            console.log(data);
            $('#idEditarEstadoActivar').val(data[0]);
            $('#nombreCompleto5').val(data[1]);
            $('#numeroDeCedula5').val(data[2]);

        });

        $('#editarEstadoActivar').on('submit', function(e)
        { 
            e.preventDefault();
            var id = $('#idEditarEstadoActivar').val();
            $.ajax
            ({
                type: "PUT",
                url: "/administradores/activar/"+id,
                data: $('#editarEstadoActivarForm').serialize(),
                success: function (response)
                {
                    console.log(response)
                    $('#agregarForm')[0].reset()
                    Alerta("activarAdministrador", "HUMAcheck", "¡Administrador(a) se le ha CONCEDIDO el acceso al sistema correctamente!", "success", "OK")
                },
                error: function(error)
                {
                    console.log(error)
                    Alerta("activarAdministrador", "¡Error al actualizar estado!", "Verifique que: \n\nEl dato solicitado se haya ingresado y en el formato adecuado. \n¡Inténtelo nuevamente!", "warning", "OK")
                }
            });
        });
    //FIN DE ACTUALIZAR ESTADO




    //FUNCIONES DE ALERTA
        function Alerta(proceso, titulo, mensaje, tipo, boton)
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
                            if(proceso == "activarAdministrador")
                            {
                                window.location.href = "/administradores/activos";
                            }
                            if(proceso == "inactivarAdministrador")
                            {
                                window.location.href = "/administradores/inactivos";
                            }
                            else
                            {
                                window.location.href = "/administradores";

                            }
                        }
                    }
                }); 
            }, 000);
        }
    //FIN DE FUNCIONES DE ALERTA

});