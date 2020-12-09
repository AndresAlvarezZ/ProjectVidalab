//ACTUALIZAR
    $('.btnEditar').on('click', function(ev)
    {
        ev.preventDefault();
        $('#editarMultimedia').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function()
        {
            return $(this).text();
        }).get();
        console.log(data);
        $('#idEditar').val(data[0]);
        $('#descripcionDelArchivo').val(data[3]);
        var id = $('#idEditar').val();
        var form = document.getElementById('editarForm')
        form.setAttribute('action','/multimedia/'+id)
    });

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
                            window.location.href = "/multimedia";
                        }
                    }
                });
            }, 000);
        }
    //FIN DE FUNCIONES DE ALERTA
