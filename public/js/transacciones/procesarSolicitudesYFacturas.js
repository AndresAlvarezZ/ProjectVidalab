var hayError;

$(document).ready(function ()
{
   
    //ACTUALIZAR SOLICITUD EN ESPERA
       $('.btnEnEspera').on('click', function(ev)
       {
           ev.preventDefault();
           $('#editarEnEspera').modal('show');
           $tr = $(this).closest('tr');
           var data = $tr.children("td").map(function()
           {
               return $(this).text();
           }).get();
           console.log(data);
           $('#idSolicitudEnEspera').val(data[0]);
           $('#nombreDelCliente1').val(data[1]);
           $('#analisisSolicitados1').val(data[4]);
           $('#costoDelServicio1').val(data[5]);
       });

       $('#editarEnEspera').on('submit', function(e)
       { 
           e.preventDefault();
           var id = $('#idSolicitudEnEspera').val();
           $.ajax
           ({
               type: "PUT",
               url: "/solicitudes/procesarSolicitud/"+id,
               data: $('#editarEnEsperaForm').serialize(),
               success: function (response)
               {
                   console.log(response)
                   $('#editarEnEsperaForm')[0].reset()
                   Alerta("HUMAcheck", "¡Esta Solicitud a Domicilio se ha actualizado exitosamente!", "success", "OK")
               },
               error: function(error)
               {
                   console.log(error)
                   Alerta("¡Error al actualizar estado de solicitud!", "Verifique que: \n\nEl campo solicitado esté completo.\n¡Inténtelo nuevamente!", "warning", "OK")
               }
           });
       });
   //FIN DE ACTUALIZAR SOLICITUD EN ESPERA


    //ACTUALIZAR SOLICITUD CONFIRMADA
        $('.btnEnConfirmada').on('click', function(ev)
        {
            ev.preventDefault();
            $('#editarConfirmada').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function()
            {
                return $(this).text();
            }).get();
            console.log(data);
            $('#idSolicitudConfirmada').val(data[0]);
            $('#nombreDelCliente2').val(data[1]);
            $('#analisisSolicitados2').val(data[4]);
            $('#costoDelServicio2').val(data[5]);
        });

        $('#editarConfirmada').on('submit', function(e)
        { 
            e.preventDefault();
            var id = $('#idSolicitudConfirmada').val();
            $.ajax
            ({
                type: "PUT",
                url: "/solicitudes/procesarSolicitud/"+id,
                data: $('#editarConfirmadaForm').serialize(),
                success: function (response)
                {
                    console.log(response)
                    $('#editarConfirmadaForm')[0].reset()
                    Alerta("HUMAcheck", "¡Esta Solicitud a Domicilio se ha actualizado exitosamente!", "success", "OK")
                },
                error: function(error)
                {
                    console.log(error)
                    Alerta("¡Error al actualizar registro!", "Error al actualizar estado de solicitud!", "Verifique que: \n\nEl campo solicitado esté completo.\n¡Inténtelo nuevamente!", "warning", "OK")
                }
            });
        });
    //FIN DE ACTUALIZAR SOLICITUD CONFIRMADA


    //ACTUALIZAR SOLICITUD CANCELADA
        $('.btnEnCancelada').on('click', function(ev)
        {
            ev.preventDefault();
            $('#editarCancelada').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function()
            {
                return $(this).text();
            }).get();
            console.log(data);
            $('#idSolicitudCancelada').val(data[0]);
            $('#nombreDelCliente3').val(data[1]);
            $('#analisisSolicitados3').val(data[4]);
            $('#costoDelServicio3').val(data[5]);
        });

        $('#editarCancelada').on('submit', function(e)
        { 
            e.preventDefault();
            var id = $('#idSolicitudCancelada').val();
            $.ajax
            ({
                type: "PUT",
                url: "/solicitudes/procesarSolicitud/"+id,
                data: $('#editarCanceladaForm').serialize(),
                success: function (response)
                {
                    console.log(response)
                    $('#editarCanceladaForm')[0].reset()
                    Alerta("HUMAcheck", "¡Esta Solicitud a Domicilio se ha actualizado exitosamente!", "success", "OK")
                },
                error: function(error)
                {
                    console.log(error)
                    Alerta("¡Error al actualizar registro!", "Error al actualizar estado de solicitud!", "Verifique que: \n\nEl campo solicitado esté completo.\n¡Inténtelo nuevamente!", "warning", "OK")
                }
            });
        });
    //FIN DE ACTUALIZAR SOLICITUD CANCELADA

    
    //ACTUALIZAR FACTURA
    $('.btnProcesarFactura').on('click', function(ev)
    {
        ev.preventDefault();
        $('#editarFactura').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function()
        {
            return $(this).text();
        }).get();
        console.log(data);
        $('#idFactura').val(data[0]);
        $('#nombreDelCliente1').val(data[1]);
        $('#analisisSolicitados1').val(data[4]);
        $('#costoDelServicio1').val(data[5]);
    });

    $('#editarFactura').on('submit', function(e)
    { 
        e.preventDefault();
        var id = $('#idFactura').val();
        $.ajax
        ({
            type: "PUT",
            url: "/procesarFactura/"+id,
            data: $('#editarFacturaForm').serialize(),
            success: function (response)
            {
                console.log(response)
                $('#editarFacturaForm')[0].reset()
                Alerta("HUMAcheck", "¡Esta Factura se ha actualizado exitosamente!", "success", "OK")
            },
            error: function(error)
            {
                console.log(error)
                Alerta("¡Error al actualizar estado de Factura!", "Verifique que: \n\nEl campo solicitado esté completo.\n¡Inténtelo nuevamente!", "warning", "OK")
            }
        });
    });
//FIN DE ACTUALIZAR FACTURA



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
                            window.location.href = "/solicitudes/enEspera";
                        }
                    }
                }); 
            }, 000);
        }
    //FIN DE FUNCIONES DE ALERTA

})