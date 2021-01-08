
<<?php
	session_start();
	if (isset($_SESSION['usuario'])) {
		include "header.php";
		?>



		<div class="container">
			<div class="row">
				<div class="col-sm-12">
				<div class="jumbotron text-center">
                <h1 class="display-4">Bienvenido </h1>
                <p class="lead">Gestor de Archivos realizado por Jannete</p>
                <hr class="my-4">
                <p>Instituto Tecnologico de Tlahuac [ITT1]</p>
				</div>
				<div class="jumbotron text-center">
						<div class="display-4">
							<a class="nav-link" href="../procesos/usuario/salir.php" style="color: #F8FBEF">
							<button class="btn btn-primary">Bienvenido</button>
						</div>	
				</div>
			</div>
		</div>
		<?php
		
		include "footer.php";

	} else {
		header("location:../index.php");
	}
