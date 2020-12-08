$(document).on('click', '.btneditar', function(e)
{
    e.preventDefault();
    console.log($(this).parent.parent.children.first().text());
})