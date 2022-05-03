   <?php 

	include'extend/header.php';
	error_reporting(E_ALL ^ E_NOTICE);
	
	if (isset($_POST['submit'])) {
		$error=array();

    //Nombre
    if ($_POST['name']=="") {
      $errores[]="Nombre vacio <br>";
    }else{
      $name=$_POST['name'];

      //Valores admitidos
      if(!preg_match("/^[a-zA-Z áéíóúñüÁÉÍÓÚÑÜ]*$/",$_POST['name'])){

        $errores[]="Revisa los caracteres insertados";
        }
    }

    //Estado
    if(!$_POST['state']){
     $errores[]="Estado <br>";
    }

     //Email
      if ($_POST['email']=="") {
      $errores[]="Campo email vacio <br>";
      }else{
      $name=$_POST['email'];

      //Valores admitodos
         if(!preg_match("/[-0-9a-zZ.+_]+@[-0-9a-z.+_]+.[a-z]{2,4}/",$_POST['email'])){
           $errores[]="Formato de email incorrecto";
            }
    }

    //Genero
    if (!$_POST['sex']=="") {
        $errores[]="Factor genero Vacio";

    }
    if ($_POST['sex']=="m") {
      $sex="m";
    }else{
      $sex="f";
    }

    //terminos y condiciones
    if (!$_POST['terms']=="") {
      $errores[]="Acepta los terminos para continuar";
    }
	}

?>
  <!-- Termina la validacion-->



	<!-- Formulario-->
	<form class="row g-3">
		<div class="col-12">
			<label for="name" class="form-label">Nombre</label>
			<input type="text" class="form-control" id="name" placeholder="Nombre/s">
		</div>

		<!--- Termina Nombre -->
		<div class="col-12">
			<label for="lastName" class="form-label">Apellido Paterno</label>
			<input type="text" class="form-control" id="lastName" placeholder="Apellido Paterno">
		</div>

		<!--- Termina apellido Paterno -->
		<div class="col-12">
			<label for="mom" class="form-label">Apellido Materno</label>
			<input type="text" class="form-control" id="mom" placeholder="Apellido Materno">
		</div>

		<!--- Termina apellido Paterno -->
		<div class="col-md-6">
			<label for="city" class="form-label">Ciudad </label>
			<input type="text" class="form-control" id="city" placeholder="Ej. México">
		</div>

		<!--- Termina Ciudad -->
		  <div class="col-md-6">
    		<label for="state" class="form-label">Estado</label>
    			<select id="state" class="form-select">
      				<option value="na"  disabled>Seleccionar</option>
      				<option value="Queretaro">Edo Mex</option>
      				<option value="Guanajuato">Neza</option>
              <option value="Guanajuato">Ecateponk</option>
    			</select>
  </div>

  			<!--- Termina Estado -->
  		<div class="col-12">
			<label for="email" class="form-label">Email</label>
			<input type="text" class="form-control" id="email" placeholder="correo@dominio.com">
		</div>

		<!--- Termina Email -->
		 <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Genero</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="sex" id="masc" value="option1" checked>
        <label class="form-check-label" for="gridRadios1">
          Masculino
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="sex" id="fem" value="option2">
        <label class="form-check-label" for="gridRadios2">
          Femenino
        </label>
      </div>
      <div class="form-check ">
        <input class="form-check-input" type="radio" name="sex" id="NA" value="NA" >
        <label class="form-check-label" for="gridRadios3">
          Sin preferencia
        </label>
      </div>
    </div>
  </fieldset>

  <!-- Termina Genero -->
<button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Terminos y Condiciones
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><font color="black">Terminos y condiciones</font></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <font color="black">Terminos y condiciones </font> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
       </div>
    </div>
  </div>
</div>

<!-- Termina ventana "modal" -->
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="terms">
      <label class="form-check-label" for="gridCheck">
        Acepto Terminos y condiciones
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="submit">Enviar</button>
  </div>
	</form>

<?php include'extend/footer.php'?>