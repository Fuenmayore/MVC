

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Editar Tarea</h1>
    <form action="<?php echo e(route('tareas.update', $tarea)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" class="form-control" value="<?php echo e($tarea->titulo); ?>" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" class="form-control"><?php echo e($tarea->descripcion); ?></textarea>
        </div>
        <div class="form-group">
            <label for="completada">Completada</label>
            <input type="checkbox" name="completada" value="1" <?php echo e($tarea->completada ? 'checked' : ''); ?>>
        </div>
        <button type="submit" class="btn btn-success">Actualizar Tarea</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DELL\Documents\Universidad\MVC\resources\views/tareas/edit.blade.php ENDPATH**/ ?>