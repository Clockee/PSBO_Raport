<!-- Using Templating Engine Blade Laravel -->
<!-- Import from resources/views/layout/main.blade.php -->


<?php $__env->startSection('title', 'Data Guru'); ?>

<?php $__env->startSection('container'); ?>


<h1> Data Guru</h1>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>