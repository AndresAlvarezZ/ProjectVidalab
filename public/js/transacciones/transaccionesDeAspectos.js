var hayError;

$(document).ready(function ()
{
    //AGREGAR EMPRESA
        $('#agregarAspecto').on('submit', function(ev)
        {
            ev.preventDefault();
            $.ajax
            ({
                type: "POST",
                url: "/aspectos/registrar",
                data: $('#agregarForm').serialize(),
                success: function (response)
                {
                    console.log(response)
                    $('#agregarForm')[0].reset()
                    Alerta("HUMAcheck", "Información sobre VIDAlab registrada exitosamente!", "success", "OK")
                },
                error: function(error)
                {
                    console.log(error)
                    Alerta("¡Error al registrar!", "Verifique que: \n\nLos campos con asterisco (*) estén completos.\n¡Inténtelo nuevamente!", "warning", "OK")
                }
            });
        });
    //FIN DE AGREGAR


    //ACTUALIZAR ASPECTOS
        $('#ubicacionForm').on('submit', function(e)
        { 
            e.preventDefault();
            var id = 1;
            $.ajax
            ({
                type: "PUT",
                url: "/aspectos/"+id,
                data: $('#ubicacionForm').serialize(),
                success: function (response)
                {
                    console.log(response)
                    $('#ubicacionForm')[0].reset()
                    Alerta("HUMAcheck", "Ubicación de VIDAlab actualizada correctamente!", "success", "OK")
                },
                error: function(error)
                {
                    console.log(error)
                    Alerta("¡Error al actualizar registro!", "Verifique que: \n\El campo solicitado esté completo. \n¡Inténtelo nuevamente!", "warning", "OK")
                }
            });
        });

        $('#telefonoForm').on('submit', function(e)
        { 
            e.preventDefault();
            var id = 2;
            $.ajax
            ({
                type: "PUT",
                url: "/aspectos/"+id,
                data: $('#telefonoForm').serialize(),
                success: function (response)
                {
                    console.log(response)
                    $('#telefonoForm')[0].reset()
                    Alerta("HUMAcheck", "Teléfono de VIDAlab actualizado correctamente!", "success", "OK")
                },
                error: function(error)
                {
                    console.log(error)
                    Alerta("¡Error al actualizar registro!", "Verifique que: \n\El campo solicitado esté completo. \n¡Inténtelo nuevamente!", "warning", "OK")
                }
            });
        });

        $('#correoForm').on('submit', function(e)
        { 
            e.preventDefault();
            var id = 3;
            $.ajax
            ({
                type: "PUT",
                url: "/aspectos/"+id,
                data: $('#correoForm').serialize(),
                success: function (response)
                {
                    console.log(response)
                    $('#correoForm')[0].reset()
                    Alerta("HUMAcheck", "Correo electrónico de VIDAlab actualizado correctamente!", "success", "OK")
                },
                error: function(error)
                {
                    console.log(error)
                    Alerta("¡Error al actualizar registro!", "Verifique que: \n\El campo solicitado esté completo. \n¡Inténtelo nuevamente!", "warning", "OK")
                }
            });
        });

        $('#facebookForm').on('submit', function(e)
        { 
            e.preventDefault();
            var id = 4;
            $.ajax
            ({
                type: "PUT",
                url: "/aspectos/"+id,
                data: $('#facebookForm').serialize(),
                success: function (response)
                {
                    console.log(response)
                    $('#facebookForm')[0].reset()
                    Alerta("HUMAcheck", "Facebook de VIDAlab actualizado correctamente!", "success", "OK")
                },
                error: function(error)
                {
                    console.log(error)
                    Alerta("¡Error al actualizar registro!", "Verifique que: \n\El campo solicitado esté completo. \n¡Inténtelo nuevamente!", "warning", "OK")
                }
            });
        });

        $('#instagramForm').on('submit', function(e)
        { 
            e.preventDefault();
            var id = 5;
            $.ajax
            ({
                type: "PUT",
                url: "/aspectos/"+id,
                data: $('#instagramForm').serialize(),
                success: function (response)
                {
                    console.log(response)
                    $('#instagramForm')[0].reset()
                    Alerta("HUMAcheck", "Instagram de VIDAlab actualizado correctamente!", "success", "OK")
                },
                error: function(error)
                {
                    console.log(error)
                    Alerta("¡Error al actualizar registro!", "Verifique que: \n\El campo solicitado esté completo. \n¡Inténtelo nuevamente!", "warning", "OK")
                }
            });
        });

        $('#whatsappForm').on('submit', function(e)
        { 
            e.preventDefault();
            var id = 6;
            $.ajax
            ({
                type: "PUT",
                url: "/aspectos/"+id,
                data: $('#whatsappForm').serialize(),
                success: function (response)
                {
                    console.log(response)
                    $('#whatsappForm')[0].reset()
                    Alerta("HUMAcheck", "WhatsApp de VIDAlab actualizado correctamente!", "success", "OK")
                },
                error: function(error)
                {
                    console.log(error)
                    Alerta("¡Error al actualizar registro!", "Verifique que: \n\El campo solicitado esté completo. \n¡Inténtelo nuevamente!", "warning", "OK")
                }
            });
        });

        $('#horarioRegularForm').on('submit', function(e)
        { 
            e.preventDefault();
            var id = 7;
            $.ajax
            ({
                type: "PUT",
                url: "/aspectos/"+id,
                data: $('#horarioRegularForm').serialize(),
                success: function (response)
                {
                    console.log(response)
                    $('#horarioRegularForm')[0].reset()
                    Alerta("HUMAcheck", "Horario Regular de VIDAlab actualizado correctamente!", "success", "OK")
                },
                error: function(error)
                {
                    console.log(error)
                    Alerta("¡Error al actualizar registro!", "Verifique que: \n\El campo solicitado esté completo. \n¡Inténtelo nuevamente!", "warning", "OK")
                }
            });
        });

        $('#horarioEspecialForm').on('submit', function(e)
        { 
            e.preventDefault();
            var id = 8;
            $.ajax
            ({
                type: "PUT",
                url: "/aspectos/"+id,
                data: $('#horarioEspecialForm').serialize(),
                success: function (response)
                {
                    console.log(response)
                    $('#horarioEspecialForm')[0].reset()
                    Alerta("HUMAcheck", "Horario Especial de VIDAlab actualizado correctamente!", "success", "OK")
                },
                error: function(error)
                {
                    console.log(error)
                    Alerta("¡Error al actualizar registro!", "Verifique que: \n\El campo solicitado esté completo. \n¡Inténtelo nuevamente!", "warning", "OK")
                }
            });
        });

        $('#lemaForm').on('submit', function(e)
        { 
            e.preventDefault();
            var id = 9;
            $.ajax
            ({
                type: "PUT",
                url: "/aspectos/"+id,
                data: $('#lemaForm').serialize(),
                success: function (response)
                {
                    console.log(response)
                    $('#lemaForm')[0].reset()
                    Alerta("HUMAcheck", "Lema de VIDAlab actualizado correctamente!", "success", "OK")
                },
                error: function(error)
                {
                    console.log(error)
                    Alerta("¡Error al actualizar registro!", "Verifique que: \n\El campo solicitado esté completo. \n¡Inténtelo nuevamente!", "warning", "OK")
                }
            });
        });

        $('#historiaForm').on('submit', function(e)
        { 
            e.preventDefault();
            var id = 10;
            $.ajax
            ({
                type: "PUT",
                url: "/aspectos/"+id,
                data: $('#historiaForm').serialize(),
                success: function (response)
                {
                    console.log(response)
                    $('#historiaForm')[0].reset()
                    Alerta("HUMAcheck", "Hostoria de VIDAlab actualizada correctamente!", "success", "OK")
                },
                error: function(error)
                {
                    console.log(error)
                    Alerta("¡Error al actualizar registro!", "Verifique que: \n\El campo solicitado esté completo. \n¡Inténtelo nuevamente!", "warning", "OK")
                }
            });
        });

        $('#valoresForm').on('submit', function(e)
        { 
            e.preventDefault();
            var id = 11;
            $.ajax
            ({
                type: "PUT",
                url: "/aspectos/"+id,
                data: $('#valoresForm').serialize(),
                success: function (response)
                {
                    console.log(response)
                    $('#valoresForm')[0].reset()
                    Alerta("HUMAcheck", "Valores de VIDAlab actualizados correctamente!", "success", "OK")
                },
                error: function(error)
                {
                    console.log(error)
                    Alerta("¡Error al actualizar registro!", "Verifique que: \n\El campo solicitado esté completo. \n¡Inténtelo nuevamente!", "warning", "OK")
                }
            });
        });

        $('#compromisoForm').on('submit', function(e)
        { 
            e.preventDefault();
            var id = 12;
            $.ajax
            ({
                type: "PUT",
                url: "/aspectos/"+id,
                data: $('#compromisoForm').serialize(),
                success: function (response)
                {
                    console.log(response)
                    $('#compromisoForm')[0].reset()
                    Alerta("HUMAcheck", "Compromiso de VIDAlab actualizado correctamente!", "success", "OK")
                },
                error: function(error)
                {
                    console.log(error)
                    Alerta("¡Error al actualizar registro!", "Verifique que: \n\El campo solicitado esté completo. \n¡Inténtelo nuevamente!", "warning", "OK")
                }
            });
        });

        $('#misionForm').on('submit', function(e)
        { 
            e.preventDefault();
            var id = 13;
            $.ajax
            ({
                type: "PUT",
                url: "/aspectos/"+id,
                data: $('#misionForm').serialize(),
                success: function (response)
                {
                    console.log(response)
                    $('#misionForm')[0].reset()
                    Alerta("HUMAcheck", "Misión de VIDAlab actualizada correctamente!", "success", "OK")
                },
                error: function(error)
                {
                    console.log(error)
                    Alerta("¡Error al actualizar registro!", "Verifique que: \n\El campo solicitado esté completo. \n¡Inténtelo nuevamente!", "warning", "OK")
                }
            });
        });

        $('#visionForm').on('submit', function(e)
        { 
            e.preventDefault();
            var id = 14;
            $.ajax
            ({
                type: "PUT",
                url: "/aspectos/"+id,
                data: $('#visionForm').serialize(),
                success: function (response)
                {
                    console.log(response)
                    $('#visionForm')[0].reset()
                    Alerta("HUMAcheck", "Visión de VIDAlab actualizada correctamente!", "success", "OK")
                },
                error: function(error)
                {
                    console.log(error)
                    Alerta("¡Error al actualizar registro!", "Verifique que: \n\El campo solicitado esté completo. \n¡Inténtelo nuevamente!", "warning", "OK")
                }
            });
        });
    //

        
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
                            window.location.href = "/informacion";
                        }
                    }
                }); 
            }, 000);
        }
    //FIN DE FUNCIONES DE ALERTA


});