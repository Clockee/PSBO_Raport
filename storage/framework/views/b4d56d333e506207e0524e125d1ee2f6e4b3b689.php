<!-- Using Templating Engine Blade Laravel -->
<!-- Import from resources/views/layout/main.blade.php -->


<?php $__env->startSection('title', 'Asrama'); ?>

<?php $__env->startSection('container'); ?>


<h1> Asrama</h1>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>