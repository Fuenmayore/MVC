<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Voler Admin Dashboard</title>

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/chartjs/Chart.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/app.css')); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon.svg')); ?>" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <img src="assets/images/logo.svg" alt="" srcset="">
                </div>
                <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="main-content container-fluid">
                <?php echo $__env->yieldContent('content'); ?>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-left">
                        <p>2020 &copy; Voler</p>
                    </div>
                    <div class="float-right">
                        <p>Crafted with <span class='text-danger'><i data-feather="heart"></i></span> by <a
                                href="http://ahmadsaugi.com">Ahmad Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="<?php echo e(asset('assets/js/feather-icons/feather.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/vendors/chartjs/Chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendors/apexcharts/apexcharts.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/pages/dashboard.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
    <script>
        var fecha = new Date();
        document.getElementById("FechaActual").value = fecha.toJSON().slice(0, 10);
        </script>
</body>

</html>



    <?php /**PATH C:\Users\DELL\Documents\Universidad\MVC\resources\views/layouts/app.blade.php ENDPATH**/ ?>