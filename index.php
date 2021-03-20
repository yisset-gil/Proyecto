<!DOCTYPE html>
<html lang="es">
<head>
	<title>Proyecto Heroku</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" content="text/css" href="css/normalize.css" />
	<link rel="stylesheet" content="text/css" href="css/estilos.css" />
</head>
<body>
<div id= "envoltura">
	<header>
	<h1>Software 2</h1>
	</header>
	<div id="main">
	  <p>
	      En este curso aprender&aacute; a programasr p&aacute;ginas web

		  <?php
		     $curso= "Construccion de elementos de software 2";
			echo "<br /> <br />Todo lo necesario $curso ."
		  ?>
	  </p>

		<?php
		require 'Moto.php';
		?>

		<?php
		$akt = new Moto(); //Instancias
		$ducati = new Moto();
		$yamaha = new Moto();

		echo "Color del atk: $akt->color";
		echo "<br />";
		echo "Color del ducati: $ducati->color";

		$akt ->color = "azul";
		$akt ->empresa = "AKT";

		$ducati -> color = "negro";
		$ducati -> empresa = "Ducati";

		echo "color del akt: $akt->color <br /> compania: $akt->empresa";
		echo "<br />";
		echo "Color de la ducati: $ducati->color <br /> compania: $ducati->empresa";
		echo "<br />";
		echo "<br />";
		echo "Akt pintado : ". $akt->pitar();
		echo "<br />";
		echo "ducati pintado : ".$ducati->pitar();
		echo "<br /><br /> El uso de this";

		$moto1 = new Moto();
		$moto2 = new Moto();

		$moto1 ->frenoDisco = false;
		$moto1 ->empresa = "Auteco";
		$moto1 -> color = "roja";

		$moto2 -> empresa ="suzuki";
		$moto2 -> color =" Blanco";

		$moto1 -> pedirRevision();
		$moto1 -> frenarDiscoTrasero();
		echo "<br /><br />";
		$moto2 -> pedirRevision();
		$moto2 -> frenarDiscoTrasero();

		echo "<br /><br />usando el encademiento";
		echo "<br />";
		$moto3 = new Moto();
		 
		$gasolina = $moto3 -> llenar(10) -> corre(40) -> contenidoTanque;

		echo "El número de gasolina que queda en el tanque son " . $gasolina . "galones.";
		
		echo "<br /><br /> accediendo a un atributo publico"; 
		echo "<br />";
		//$moto3 -> modelo = "2021";

		$moto3 -> setModelo("2021");
		echo "Moto \$3 tiene el siguiente modelo: ".$moto3 -> getModelo();		
		
		?>
		


	</div>
	</div>
</body>
</html>