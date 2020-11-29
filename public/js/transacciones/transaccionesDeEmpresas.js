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
                url: "/empresas/registrar",
                data: $('#agregarForm').serialize(),
                success: function (response)
                {
                    console.log(response)
                    $('#agregarForm')[0].reset()
                    Alerta("HUMAcheck", "¡Datos de la Empresa registrados exitosamente!", "success", "OK")
                },
                error: function(error)
                {
                    console.log(error)
                    Alerta("¡Error al registrar!", "Verifique que: \n\nLa empresa NO se encuentre previamente registrada.\nO bien, que todos los campos solicitados estén completos y en el formato adecuado.\n¡Inténtelo nuevamente!", "warning", "OK")
                }
            });
        });
    //FIN DE AGREGAR


    //ACTUALIZAR
        $('.btnEditar').on('click', function()
        {
            $('#editarEmpresa').modal('show');
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

        $('#editarEmpresa').on('submit', function(e)
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
                    $('#agregarForm')[0].reset()
                    Alerta("HUMAcheck", "¡Datos de la Empresa actualizados correctamente!", "success", "OK")
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
                            window.location.href = "/empresas";
                        }
                    }
                }); 
            }, 000);
        }
    //FIN DE FUNCIONES DE ALERTA


});