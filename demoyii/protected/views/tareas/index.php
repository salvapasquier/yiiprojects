<h1>Listado de tareas</h1>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <td colspan="4"><?php echo CHtml::link('Nueva tarea', array('add', )); ?></td>
        </tr>
    </tfoot>
    <tbody>
        <?php foreach ($tareas as $tnum => $t): ?>
            <tr>
                <td><?php echo "$t->id"; ?></td>
                <td><?php echo "$t->nombre"; ?></td>
                <td><?php echo "$t->descripcion"; ?></td>
                <td>
                    <?php echo CHtml::link('Ver', array('view', 'id' => $t->id)); ?> | 
                    <?php echo CHtml::link('Editar', array('edit', 'id' => $t->id)); ?> | 
                    <?php echo CHtml::link('Eliminar', array('delete', 'id' => $t->id), array('confirm' => '¿Está seguro de eliminar la tarea especificada?')); ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
