<!-- Using Templating Engine Blade Laravel -->
<!-- Import from resources/views/layout/main.blade.php -->


<?php $__env->startSection('title', 'Detail Siswa'); ?>

<?php $__env->startSection('container'); ?>
<div class="row-3">
    <div class="col-5">
        <div class="mt-3" >
            <div class="card bg-light mb-3 card-inverse border-success">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($student -> nama); ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo e($student -> nis); ?></h6>
                    <p class="card-text"><?php echo e($student -> asrama); ?></p>


                    <a href="/scorestudents" class="card-link">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>