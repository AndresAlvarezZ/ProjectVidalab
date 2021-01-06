<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

        <title>Files</title>
    </head>
    <body>
        <h1>Exportar datos</h1>
        <p>
            Clic <a href="/RegistroDeAnalisis.xlsx">aquí</a>
            para descargar en EXCEL
        </p>    
        <form action="/importar/registros/pruebas" method="POST" enctype="multipart/form-data">
            @csrf
            
            @if(Session::has('message'))
            <p>{{ Session::get('message') }}</p>
            @endif

             


            <input type="file" name="file">

            <button type="submit">Importar Usuarios</button>
        </form>
    </body>
</html>

