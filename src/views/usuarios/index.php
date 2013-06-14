

<div class="row">
	<div class="span12">
	<h1>usuarios</h1>
	  <a href="<?php echo go('usuarios','nuevo'); ?>"> <button class="btn btn-primary" >Agregar</button> </a><br/><br/>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>Acciones </th>
					<th>Id</th>
					<th>Usuario</th>
					<th>Nombre</th>
					<th>Apellidos </th>
					<th>Email </th>
					<th>Status </th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($usuarios as $user): ?>
			<tr>
				<td>
					<a href="<?php echo go('usuarios', 'edit','&id='.$user['id']); ?>" class="btn" title="Editar"><i class="icon-pencil"></i></a>
					<a onclick="return confirm('Desea Eliminar el usuario: <?php echo $user['nombre'].' '.$user['apellidos']; ?> ');" href="<?php echo go('usuarios', 'delete','&id='.$user['id']); ?>" class="btn" title="Eliminar" ><i class="icon-remove"></i></a>
				</td>
				<td><?php echo $user['id']; ?></td>
				<td><?php echo $user['usuario']; ?></td>
				<td> <?php echo $user['nombre']; ?></td>
				<td><?php echo $user['apellidos']; ?> </td>
				<td> <?php echo $user['email']; ?> </td>
				<td><?php echo $user['status']; ?></td>
			</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
