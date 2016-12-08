<h2>Lista de tipos de types:</h2>
<!--<?php if(!empty($types)): ?> -->

<table class="table table-striped">
	<tr>
		<th>Id</th>
		<th>Nombre</th>
        <th>Opciones</th>
	</tr>
	    <?php foreach ($types as $type): ?>
	<tr>
		<td><?php echo $type["types"]["id"]; ?></td>
		<td><?php echo $type["types"]["name"]; ?></td>
        
        <td>
            <?php echo $this->Html->link("Edit", array("controller"=>"types","method"=>"edit","arg"=>$type["types"]["id"]));?> |
            <?php echo $this->Html->link("Delete", array("controller"=>"types","method"=>"delete","arg"=>$type["types"]["id"]));?>
			<!--<a href="<?php echo APP_URL."/types/edit/".$type["types"]["id"]; ?>">Edit</a>-->
			<!--<a href="<?php echo APP_URL."/types/delete/".$type["types"]["id"]; ?>">Delete</a>-->
		</td>
	</tr>
	<?php endforeach; ?>
</table>
<a href="types/add" class="btn btn-info" role="button">Add Types</a>
<?php endif; ?>