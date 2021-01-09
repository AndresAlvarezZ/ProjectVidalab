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

    //Eliminar
        $('.btnEliminar').on('click', function(ev)
        {
            ev.preventDefault();
            $('#eliminarMultimedia').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function()
            {
                return $(this).text();
            }).get();
            console.log(data);
            $('#idEliminar').val(data[0]);
            $('#descripcionDelArchivo1').val(data[3]);
            var id = $('#idEliminar').val();
            var form = document.getElementById('eliminarForm')
            form.setAttribute('action','/multimedia/'+id)
        });
