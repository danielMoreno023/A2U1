<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Películas</title>
    <!-- Incluir bulma.min.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>

    <section class="hero is-info">
  		<div class="hero-body">
   		    <p class="title">Acerca de la película</p>
		</div>
	</section>
    
    <section class="section is-medium columns">

      <div class="column"></div>

        <div>

            <?php
                 
                 $nombrePelicula = $_POST['nombrePelicula'];
                 $nombreDirector = $_POST['nombreDirector'];
                 $genero = $_POST['genero'];
                 $descripcion = $_POST['descripcion'];

                 $crearArchivo = fopen("notas.txt", "a+");
                 fwrite($crearArchivo,"<br>Nombre de la película: ");
                 fwrite($crearArchivo, $nombrePelicula);

                 fwrite($crearArchivo,"<br>Nombre del director: ");
                 fwrite($crearArchivo, $nombreDirector);

                 fwrite($crearArchivo,"<br>Género: ");
                 fwrite($crearArchivo, $genero);

                 fwrite($crearArchivo, "<br>Descripción de la película: ");
                 fwrite($crearArchivo, $descripcion);
                 fclose($crearArchivo);

            $lectura = fopen("notas.txt", "r");

            while(!feof($lectura)){
                $mostrar = fgets($lectura);
                echo nl2br($mostrar);
            }

            fclose($lectura);
            ?>
        </div>
      </div>

      <div class="column"></div>
    </section>
</body>
</html>
