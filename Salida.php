<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title> PROGRAMA GRACIAS AL DIA DE LA MUJER. </title>
	</head>
	<body>
		<?php

			$Nombre = $_GET["TXT_Nombre_visitante"];
			$Edad = $_GET["TXT_Edad"];
		    $Genero = $_GET["RB_Genero"];
	    
			if ($Genero == 'Mujer') 
			{
				$conexion = mysqli_connect("localhost:8889","root","root","BD_Registros");
				$consulta = mysqli_query($conexion,"insert into Visitas values ('','$Nombre','$Edad','$Genero');") or die (mysqli_error());

				$consulta_2 = mysqli_query($conexion,"select * from Visitas;") or die (mysqli_error());
				if (mysqli_num_rows($consulta_2) > 0) 
				{
					while($renglon = mysqli_fetch_array($consulta_2)) 
					{
						echo "<font color='blue'>" ."Nombre: ".$renglon['nombre']."<br>". "</font>";
						echo "<font color='red'>" ."Edad: ".$renglon['edad']."<br>". "</font>";
						echo "<font color='blue'>" ."Genero: ".$renglon['genero']."<br><br>". "</font>";
						
						echo "<br>Feliz dia de la mujer!<br>";
					}
				} 
				else 
				{
				echo "No existen visitas registradas...";
				}
				mysqli_close($conexion);
			}
			else 
			{
				$conexion = mysqli_connect("localhost:8889","root","root","BD_Registros");
				$consulta = mysqli_query($conexion,"insert into Visitas values ('','$Nombre','$Edad','$Genero');") or die (mysqli_error());

				$consulta_2 = mysqli_query($conexion,"select * from Visitas;") or die (mysqli_error());
				if (mysqli_num_rows($consulta_2) > 0) 
				{
					while($renglon = mysqli_fetch_array($consulta_2)) 
					{
						echo "Nombre: ".$renglon['nombre']."<br>" ;
						echo "Edad: ".$renglon['edad']."<br>";
						echo "Genero: ".$renglon['genero']."<br><br>";
						echo "<br>Feliz dia de la mujer!<br>";
					}
				} 
				else 
				{
				echo "No existen visitas registradas...";
				}
				mysqli_close($conexion);
			}

		?>
	</body>
</html>