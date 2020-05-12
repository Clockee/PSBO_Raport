<!-- Using Templating Engine Blade Laravel -->
<!-- Import from resources/views/layout/main.blade.php -->


<?php $__env->startSection('title', 'Biodata Siswa'); ?>

<?php $__env->startSection('container'); ?>
<div>
        <div class="table">
            <h1 class="mt-2 mx-3"> Biodata Siswa</h1>

            <a href="/students/create" class="btn btn-primary mx-3">Tambah Data Siswa</a>
            <div class="my-3">

            <!-- Alert Notification (status from StudentsController) -->
            <?php if(session('status')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>
            </div>
            <break>

            <table class="table container mx-3" >
                <thead class="bg-info">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Asrama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <!-- <th scope="col">Golongan Darah</th>
                        <th scope="col">Tinggi Badan</th>
                        <th scope="col">Berat Badan</th>
                        <th scope="col">Alamat</th>

                        <th scope="col">Nama Ayah</th>
                        <th scope="col">Tempat Lahir Ayah</th>
                        <th scope="col">Tanggal Lahir Ayah</th>
                        <th scope="col">Pekerjaan Ayah</th>
                        <th scope="col">Alamat Ayah</th>

                        <th scope="col">Nama Ibu</th>
                        <th scope="col">Tempat Lahir Ibu</th>
                        <th scope="col">Tanggal Lahir Ibu</th>
                        <th scope="col">Pekerjaan Ibu</th>
                        <th scope="col">Alamat Ibu</th> -->
                        <th scope="col">Selengkapnya</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e($loop -> iteration); ?></th>
                            <td><?php echo e($student -> nama); ?></td>
                            <td><?php echo e($student -> nis); ?></td>
                            <td><?php echo e($student -> asrama); ?></td>
                            <td><?php echo e($student -> jenis_kelamin); ?></td>
                            <!-- <td><?php echo e($student -> golongan_darah); ?></td>
                            <td><?php echo e($student -> tinggi_badan); ?></td>
                            <td><?php echo e($student -> berat_badan); ?></td>
                            <td><?php echo e($student -> alamat); ?></td>

                            <td><?php echo e($student -> nama_ayah); ?></td>
                            <td><?php echo e($student -> tempat_lahir_ayah); ?></td>
                            <td><?php echo e($student -> tanggal_lahir_ayah); ?></td>
                            <td><?php echo e($student -> pekerjaan_ayah); ?></td>
                            <td><?php echo e($student -> alamat_ayah); ?></td>

                            <td><?php echo e($student -> nama_ibu); ?></td>
                            <td><?php echo e($student -> tempat_lahir_ibu); ?></td>
                            <td><?php echo e($student -> tanggal_lahir_ibu); ?></td>
                            <td><?php echo e($student -> pekerjaan_ibu); ?></td>
                            <td><?php echo e($student -> alamat_ibu); ?></td> -->
                            <td>
                                <a href="/students/<?php echo e($student->id); ?>" class="badge badge-info">Cek Detil</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
        </table>
        </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>