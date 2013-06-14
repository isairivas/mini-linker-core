<div class="row">
	<div class="span12">
		<h1><?php echo $title; ?></h1>
		<br/>
		<div class="wrap-form">
			<h3>Ingrese los datos</h3>
			<form class="form-horizontal" action="<?php echo $action; ?>" method="post" >
				<?php if(isset($usuario['id']) && is_numeric($usuario['id'])): ?>
				<input type="hidden" name="id" value="<?php echo $usuario['id']; ?>" />
				<?php endif; ?>
				<div class="control-group">
					<label style="text-align: left;" class="control-label" for="txtUsuario">Usuario</label>
				    <div class="controls">
				      <input type="text" required="required" id="txtUsuario" value="<?php echo isset($usuario['usuario'])?$usuario['usuario']:''; ?>" name="usuario" placeholder="Usuario">
				    </div>
				</div>
				
				<div class="control-group">
					<label style="text-align: left;" class="control-label" for="txtPassword">Password </label>
				    <div class="controls">
				      <input type="password" <?php echo $passwordRequered?'required="required"':''; ?>  id="txtPassword" value="" name="password" placeholder="Password">
				      <span><?php echo $passwordRequered?'':'(Dejar en blanco para no actualizarlo)'; ?></span>
				    </div>
				</div>
				
				<div class="control-group">
					<label style="text-align: left;" class="control-label" for="txtNombre">Nombre(s)</label>
				    <div class="controls">
				      <input type="text" required="required" id="txtNombre" value="<?php echo isset($usuario['nombre'])?$usuario['nombre']:''; ?>" name="nombre" placeholder="Nombre">
				    </div>
				</div>
				
				<div class="control-group">
					<label style="text-align: left;" class="control-label" for="txtApellidos">Apellidos</label>
				    <div class="controls">
				      <input type="text" id="txtApellidos" name="apellidos" placeholder="Apellidos" value="<?php echo isset($usuario['apellidos'])?$usuario['apellidos']:''; ?>">
				    </div>
				</div>
				
				<div class="control-group">
					<label style="text-align: left;" class="control-label" for="txtEmail">Email</label>
				    <div class="controls">
				      <input type="email" id="txtEmail" name="email" placeholder="Email" value="<?php echo isset($usuario['email'])?$usuario['email']:''; ?>">
				    </div>
				</div>
				
				<div class="control-group">
					<label style="text-align: left;" class="control-label" for="txt">Status</label>
				    <div class="controls">
				      	<select name="status">
				      		<option  value="ACTIVO" >ACTIVO</option>
				      		<option <?php echo $usuario['status']=='INACTIVO'?'selected="selected"':''; ?>  value="INACTIVO" >INACTIVO</option>
				      	</select>
				    </div>
				</div>
				
				<div><br/>
				    <input type="submit" value="Guardar" class="btn btn-primary" />
				</div>
				
			</form>
		</div>
	</div>
</div>
