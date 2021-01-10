<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
        <link href="{{ asset('icons/fuentes.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
        <link href="{{ asset('css/accesoDenegado.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>

	<body>

		<section class="acceso" id="acceso" >
			<div class="contenedor">
				<h2>¡Opps {{$name}}, ACCESO DENEGADO!</h2>
				<span class="icon-document-locked"></span>
				<p>
					Administración <span class="raiz">VIDA</span><span class="sufijo">lab</span> le comunica, que ha denegado su acceso al sistema o a esta sección del sistema <span class="raiz">HUMA</span><span class="sufijo">check</span>
				</p>
			</div>
		</section>
	</body>
</html>