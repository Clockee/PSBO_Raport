<!-- Using Templating Engine Blade Laravel -->
<!-- Import from resources/views/layout/main.blade.php -->


<?php $__env->startSection('title', 'Biodata Siswa'); ?>

<?php $__env->startSection('container'); ?>
<div class="container">
        <div class=table-responsive>
            <h1 class="mt-2"> Biodata Siswa</h1>
            <table class="table" >
                <thead class="bg-info">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Asrama</th>
                        <th scope="col">Cek Detil</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $swa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e($loop -> iteration); ?></th>
                            <td><?php echo e($swa -> nama); ?></td>
                            <td><?php echo e($swa -> nis); ?></td>
                            <td><?php echo e($swa -> asrama); ?></td>
                            <td>
                                <a href="" class="badge badge-info">Cek Detil</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
        </table>
        </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>