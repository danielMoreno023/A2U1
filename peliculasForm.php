<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <!-- Incluir bulma.min.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>
     <section class="hero is-primary">
  			<div class="hero-body">
    				<p class="title">
      					Datos de la película
    				</p>
  			</div>
	</section>
    <section class="section is-medium columns">
        <div class="column"></div>
        <div class= "column is-five-fifths">
            <form action="peliculas.php" method="post">
                

                    <div>
                    <label>Nombre de la pelicula</label>
					<input class="input is-primary" type="text" name="nombrePelicula" required>
                    </div>

                    <div>
                        <label>Nombre del director</label>
                        <input class="input is-primary" type="text" name="nombreDirector" required>
                    </div>

                    <div>
                        <label>Género</label>
                        <input class="input is-primary" type="text" name="genero" required>
                    </div>

                    <div>
                        <label>Descripción</label>
                        <input class="input is-primary" type="text" name="descripcion" required>
                    </div>

                    <br>

                    <div>
						<input class="button is-primary" type="submit" value="Enviar">
					</div>
                    
            </form>
        </div>
    
        <div class="column"></div>
    </section>
</body>
</html>
