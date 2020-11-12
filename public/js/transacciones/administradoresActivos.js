$(document).ready(function ()
{
  //ACTUALIZAR
    $('.btnEstado').on('click', function()
    {
        $('#editarEstado').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function()
        {
            return $(this).text();
        }).get();
        console.log(data);
        $('#idEditar').val(data[0]);
        $('#nombreCompleto3').val(data[1]);
    });

    $('#editarEstado').on('submit', function(e)
    { 
        e.preventDefault();
        var id = $('#idEditar').val();
        $.ajax
        ({
            type: "PUT",
            url: "/administradores/estado/"+id,
            data: $('#editarForm').serialize(),
            success: function (response)
            {
                console.log(response)
                $('#editarEstado').modal('hide')
                alert("¡Actualización de datos exitosa!");
                location.reload();
            },
            error: function(error)
            {
                console.log(error)
                alert("¡Error de actualización, inténtelo nuevamente!");
            }
        });
    });
//FIN DE EDITAR
});