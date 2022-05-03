<?php include'extend/header.php'?>

	<form action="recibe.php" method="post">
		<input type="text" placeholder="Ingresa tu nombre" name="nombre">	
		<br>
		<label for="hombre">Hombre</label>
		<input type="radio" name="sexo" value="hombre">

		<label for="mujer">Mujer</label>
		<input type="radio" name="sexo" value="mujer">
		<br>
		<select name="year" id="year">
			<option value="2000">2000</option>
			<option value="1900">1900</option>
			<option value="1800">1800</option>


		</select>
		<br>
		<label for="terminos">Acepta los terminos y condiciones</label>
		<input type="checkbox" name="terminos" value="OK">
		<br>
		<input type="submit" value="Enviar">
	</form>

<?php include'extend/footer.php'?>