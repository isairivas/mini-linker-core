<div class="row">
	<div class="span12">
		<h1>Roles de <?php echo $usuario['nombre']; ?></h1>
		<a href="#myModal" role="button" data-toggle="modal" > <button class="btn btn-primary"  >Agregar Rol</button> </a><br/><br/>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>Eliminar </th>
					<th>Id</th>
					<th>Nombre</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($roles as $rol): ?>
			<tr>
				<td onclick="return confirm('Desea Eliminar el rol: <?php echo $rol['nombre']; ?> ');" style="width: 80px;"> <a href="<?php echo go('usuarios', 'roles_delete','&id='.$rol['id'].'&user='.$rol['usuarios_id']); ?>" class="btn" title="Eliminar" ><i class="icon-remove"></i></a> </td>
				<td><?php echo $rol['id']; ?> </td>
				<td><?php echo $rol['nombre']; ?> </td>
				
			</tr>
			<?php endforeach; ?>
			</tbody>
			</table>
	</div>
</div>


 
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Agregar Nuevo Rol</h3>
  </div>
   <form method="post" action="<?php echo go('usuarios','roles_add'); ?>" >
  <div class="modal-body">
    
    	<input type="hidden" name="usuarios_id" value="<?php echo $usuario['id']; ?>" />
    	<select name="roles_id">
    		<option>Elige uno</option>
    	<?php foreach($allRoles as $rol ): ?>
    		<option value="<?php echo $rol['id']; ?>" ><?php echo $rol['nombre']; ?></option>
    	<?php endforeach; ?>
    	</select>
    
    
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
    <input value="Guardar" type="submit" class="btn btn-primary" />
  </div>
  </form>
</div>