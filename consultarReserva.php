<?php
header("Access-Control-Allow-Origin: *");
include("conexion.php");

$sentencia = "select * from reserva";

$query = mysqli_query($conexion,$sentencia);

$cantidadRegistros = mysqli_num_rows($query);

if($cantidadRegistros > 0)
		{
			while($row = mysqli_fetch_array($query))//Recorrer los resultados de la consulta
			{
				echo "Nombre: ".$row["nombre"]."<br/>";
				echo "Apellido: ".$row["apellido"]."<br/>";
				echo "Placa: ".$row["placa"]."<br/>"."<br/>";
			}
		}
		else
		{
			print "No se encontraron registros.";
		}


mysqli_close($conexion);
?>