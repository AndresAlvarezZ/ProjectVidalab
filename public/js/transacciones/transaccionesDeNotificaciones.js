var hayError;

$(document).ready(function ()
{
    //NOTIFICACION ESPECÍFICA CLIENTES
        $('#notificacionClienteE').on('submit', function(e)
        {
            e.preventDefault();
            $.ajax
            ({
                type: "POST",
                url: "/envioNotificacionEspecifica",
                data: $('#notificacionClienteE').serialize(),
                success: function (response)
                {
                    console.log(response)
                    Alerta("HUMAcheck", "¡El mensaje se envió de forma exitosa al/la cliente!", "success", "OK")
                },
                error: function(error)
                {
                    console.log(error)
                    Alerta("¡Error al enviar!", "Verifique que: \n\nTodos los campos solicitados estén completos y en el formato adecuado.\n¡Inténtelo nuevamente!", "warning", "OK")
                }
            });
        });
    //FIN DE NOTIFICACION ESPECÍFICA CLIENTES


    //NOTIFICACION ESPECÍFICA EMPRESA
        $('#notificacionEmpresaE').on('submit', function(e)
        {
            e.preventDefault();
            $.ajax
            ({
                type: "POST",
                url: "/envioNotificacionEspecificaEmpresarial",
                data: $('#notificacionEmpresaE').serialize(),
                success: function (response)
                {
                    console.log(response)
                    Alerta("HUMAcheck", "¡El correo se envió de forma exitosa a la empresa!", "success", "OK")
                },
                error: function(error)
                {
                    console.log(error)
                    Alerta("¡Error al enviar!", "Verifique que: \n\nTodos los campos solicitados estén completos y en el formato adecuado.\n¡Inténtelo nuevamente!", "warning", "OK")
                }
            });
        });
    //FIN DE NOTIFICACION ESPECÍFICA EMPRESA

    
    //NOTIFICACION MASIVA CLIENTES
        $('#notificacionClientesM').on('submit', function(e)
        {
            e.preventDefault();
            $.ajax
            ({
                type: "POST",
                url: "/envioNotificacionMasiva",
                data: $('#notificacionClientesM').serialize(),
                success: function (response)
                {
                    console.log(response)
                    Alerta("HUMAcheck", "¡El mensaje se envió de forma exitosa a los clientes!", "success", "OK")
                },
                error: function(error)
                {
                    console.log(error)
                    Alerta("¡Error al enviar!", "Verifique que: \n\nTodos los campos solicitados estén completos y en el formato adecuado.\n¡Inténtelo nuevamente!", "warning", "OK")
                }
            });
        });
    //FIN DE NOTIFICACION MASIVA CLIENTES


    //NOTIFICACION MASIVA EMPRESAS
        $('#notificacionEmpresasM').on('submit', function(e)
        {
            e.preventDefault();
            $.ajax
            ({
                type: "POST",
                url: "/envioNotificacionMasivaEmpresarial",
                data: $('#notificacionEmpresasM').serialize(),
                success: function (response)
                {
                    console.log(response)
                    Alerta("HUMAcheck", "¡El correo se envió de forma exitosa a las empresas!", "success", "OK")
                },
                error: function(error)
                {
                    console.log(error)
                    Alerta("¡Error al enviar!", "Verifique que: \n\nTodos los campos solicitados estén completos y en el formato adecuado.\n¡Inténtelo nuevamente!", "warning", "OK")
                }
            });
        });
    //FIN DE NOTIFICACION MASIVA EMPRESAS


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
                           window.location.href = "/notificaciones";
                       }
                   }
               }); 
           }, 000);
       }
    //FIN DE FUNCIONES DE ALERTA
   
})