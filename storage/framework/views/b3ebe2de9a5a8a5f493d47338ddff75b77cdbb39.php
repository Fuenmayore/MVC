

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Tareas</h1>
    <a href="<?php echo e(route('tareas.create')); ?>" class="btn btn-primary">Agregar Tarea</a>
    
    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <table class="table">
        <thead>
            <tr>
                <th>Título</th>
                <th>Descripción</th>
                <th>Completada</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $tareas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tarea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($tarea->titulo); ?></td>
                    <td><?php echo e($tarea->descripcion); ?></td>
                    <td><?php echo e($tarea->completada ? 'Sí' : 'No'); ?></td>
                    <td>
                        <a href="<?php echo e(route('tareas.edit', $tarea)); ?>" class="btn btn-warning">Editar</a>
                        <form action="<?php echo e(route('tareas.destroy', $tarea)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DELL\Documents\Universidad\MVC\resources\views/tareas/index.blade.php ENDPATH**/ ?>