<?php 

	class Conexion{
		funtion conectarse(){
			$conn=mysqli_connect("localhost","root","","dinamita","3306") or die("Pagina Inexistente");
		}

	}

 ?>