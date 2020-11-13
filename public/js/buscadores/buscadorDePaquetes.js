$(document).ready(function ()
{
    var table = $('#TablaPaquetes').DataTable();

    table.on('click', '.edit', function()
    {
        $tr = $(this).closest('tr');
        if($($tr).hasclass('child'))
        {
            $tr = $tr.prev('.parent');
        }

        var data = table.row($tr).data();
        console.log(data);
    });
});