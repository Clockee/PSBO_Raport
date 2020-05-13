<!-- Using Templating Engine Blade Laravel -->
<!-- Import from resources/views/layout/main.blade.php -->


<?php $__env->startSection('title', 'Niai Siswa'); ?>

<?php $__env->startSection('container'); ?>
<div class="container">
        <div class=table-responsive>
            <h1 class="mt-2"> Nilai Siswa</h1>

            <div class="my-3">

            <!-- Alert Notification (status from StudentsController) -->
            <?php if(session('status')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>
            </div>
            <break>

            <table class="table" >
                <thead class="bg-info">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Rata-Rata</th>
                        <th scope="col">Selengkapnya</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e($loop -> iteration); ?></th>
                            <td><?php echo e($student -> nama); ?></td>
                            <td><?php echo e($student -> nis); ?></td>
                            <td>-</td>
                            <td>
                                <a href="/scorestudents/<?php echo e($student->id); ?>" class="badge badge-info">Cek Detil</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
        </table>
        </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>