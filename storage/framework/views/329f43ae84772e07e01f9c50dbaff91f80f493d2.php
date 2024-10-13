<?php $__env->startSection('content'); ?>
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Usuarios</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <a class="btn btn-warning" href="<?php echo e(route('usuarios.create')); ?>">Nuevo</a>

                        <table class="table table-striped mt-2">
                            <thead style="background-color: #00b8f0;">
                                <th style="display: none;">Id</th>
                                <th style="color: #fff;">Nombre</th>
                                <th style="color: #fff;">E-mail</th>
                                <th style="color: #fff;">Rol</th>
                                <th style="color: #fff;">Acciones</th>

                            </thead>
                            <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tbody>
                                
                                <td style="display: none;" ><?php echo e($usuario->id); ?></td>
                                <td><?php echo e($usuario->name); ?></td>
                                <td><?php echo e($usuario->email); ?></td>
                                <td>
                                    <?php if(!empty($usuario->getRoleNames())): ?>

                                    <?php $__currentLoopData = $usuario->getRoleNames(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $roleName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <h5><span class="badge badge-dark"><?php echo e($roleName); ?></span></h5> 
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a class="btn btn-info" href="<?php echo e(route('usuarios.edit', $usuario->id)); ?>">
                                        Editar
                                    </a>

                                    <?php echo Form::open(['method' => 'DELETE', 'route' => ['usuarios.destroy', $usuario->id], 'style' => 'display:inline']); ?>


                                    <?php echo Form::submit('Borrar', ['class' => 'btn btn-danger']); ?>

                                    <?php echo Form::close(); ?>

                                </td>
                               
                            </tbody>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>

                        <div class="pagination justify-content-end">
                           <?php echo $usuarios->links(); ?> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DELL\Documents\Universidad\MVC\resources\views/usuarios/index.blade.php ENDPATH**/ ?>