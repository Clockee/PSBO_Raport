<!-- Using Templating Engine Blade Laravel -->
<!-- Import from resources/views/layout/main.blade.php -->


<?php $__env->startSection('title', 'Detail Siswa'); ?>

<?php $__env->startSection('container'); ?>

<div class="mx-3">
    <div class="row">
        <hr class="w-100">
        <div class="col-6">
            <!-- method 2 - seperate list groups in gutterless columns -->
            <div class="row no-gutters">
                <a class="list-group-item list-group-item-action list-group-item-success text-center">
                            <b>Data Siswa</b>
                </a>

                <div class="col-6">
                    <div class="d-flex flex-row flex-wrap">
                        <a class="list-group-item list-group-item-action list-group-item-secondary">
                            <b>Nama</b>
                          </a>
                        <a class="list-group-item list-group-item-action list-group-item-secondary">
                            <b>NIS</b>
                          </a>
                        <a class="list-group-item list-group-item-action list-group-item-secondary">
                            <b>Asrama</b>
                          </a>
                        <a class="list-group-item list-group-item-action list-group-item-secondary">
                            <b>Jenis Kelamin</b>
                          </a>
                        <a class="list-group-item list-group-item-action list-group-item-secondary">
                            <b>Tempat Lahir</b>
                          </a>
                        <a class="list-group-item list-group-item-action list-group-item-secondary">
                            <b>Tanggal Lahir</b>
                          </a>
                        <a class="list-group-item list-group-item-action list-group-item-secondary">
                            <b>Golongan Darah</b>
                          </a>
                        <a class="list-group-item list-group-item-action list-group-item-secondary">
                            <b>Tinggi Badan</b>
                          </a>
                        <a class="list-group-item list-group-item-action list-group-item-secondary">
                            <b>Berat Badan</b>
                          </a>
                        <a class="list-group-item list-group-item-action list-group-item-secondary">
                            <b>Alamat</b>
                          </a>
                    </div>
                   </div>
                <div class="col-6">
                    <div class="d-flex flex-row flex-wrap">
                    <a class="list-group-item list-group-item-action">
                            <?php echo e($student -> nama); ?>

                          </a>
                    <a class="list-group-item list-group-item-action">
                            <?php echo e($student -> nis); ?>

                          </a>
                    <a class="list-group-item list-group-item-action">
                            <?php echo e($student -> asrama); ?>

                          </a>
                    <a class="list-group-item list-group-item-action">
                            <?php echo e($student -> jenis_kelamin); ?>

                          </a>
                    <a class="list-group-item list-group-item-action">
                            <?php echo e($student -> tempat_lahir); ?>

                          </a>
                    <a class="list-group-item list-group-item-action">
                            <?php echo e($student -> tanggal_lahir); ?>

                          </a>
                    <a class="list-group-item list-group-item-action">
                            <?php echo e($student -> golongan_darah); ?>

                          </a>
                    <a class="list-group-item list-group-item-action">
                            <?php echo e($student -> tinggi_badan); ?>

                          </a>
                    <a class="list-group-item list-group-item-action">
                            <?php echo e($student -> berat_badan); ?>

                          </a>
                    <a class="list-group-item list-group-item-action">
                            <?php echo e($student -> alamat); ?>

                          </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-6">
            <!-- method 3 with cards  -->
            <a class="list-group-item list-group-item-action list-group-item-success text-center">
                            <b>Data Orang Tua</b>
                </a>
            <a class="list-group-item list-group-item-action list-group-item-info text-center">
                            <b>Ayah</b>
                </a>
            <div class="d-flex flex-row flex-wrap ">
                    <a class="card p-2 px-3 w-50 list-group-item-action list-group-item-secondary">
                    Nama
                </a>
                    <a class="card p-2 px-3 w-50 list-group-item-action">
                    <?php echo e($student -> nama_ayah); ?>

                </a>
                    <a class="card p-2 px-3 w-50 list-group-item-action list-group-item-secondary">
                    Tempat Lahir
                </a>
                    <a class="card p-2 px-3 w-50 list-group-item-action">
                    <?php echo e($student -> tempat_lahir_ayah); ?>

                </a>
                    <a class="card p-2 px-3 w-50 list-group-item-action list-group-item-secondary">
                    Tanggal Lahir
                </a>
                    <a class="card p-2 px-3 w-50 list-group-item-action">
                    <?php echo e($student -> tanggal_lahir_ayah); ?>

                </a>
                    <a class="card p-2 px-3 w-50 list-group-item-action list-group-item-secondary">
                    Pekerjaan
                </a>
                    <a class="card p-2 px-3 w-50 list-group-item-action">
                    <?php echo e($student -> pekerjaan_ayah); ?>

                </a>
                </a>
                    <a class="card p-2 px-3 w-50 list-group-item-action list-group-item-secondary">
                    Alamat
                </a>
                    <a class="card p-2 px-3 w-50 list-group-item-action">
                    <?php echo e($student -> alamat_ayah); ?>

                </a>
                </div>
                <a class="list-group-item list-group-item-action list-group-item-info text-center">
                                <b>Ibu</b>
                    </a>
                <div class="d-flex flex-row flex-wrap ">
                    <a class="card p-2 px-3 w-50 list-group-item-action list-group-item-secondary">
                    Nama
                </a>
                    <a class="card p-2 px-3 w-50 list-group-item-action">
                    <?php echo e($student -> nama_ibu); ?>

                </a>
                    <a class="card p-2 px-3 w-50 list-group-item-action list-group-item-secondary">
                    Tempat Lahir
                </a>
                    <a class="card p-2 px-3 w-50 list-group-item-action">
                    <?php echo e($student -> tempat_lahir_ibu); ?>

                </a>
                    <a class="card p-2 px-3 w-50 list-group-item-action list-group-item-secondary">
                    Tanggal Lahir
                </a>
                    <a class="card p-2 px-3 w-50 list-group-item-action">
                    <?php echo e($student -> tanggal_lahir_ibu); ?>

                </a>
                    <a class="card p-2 px-3 w-50 list-group-item-action list-group-item-secondary">
                    Pekerjaan
                </a>
                    <a class="card p-2 px-3 w-50 list-group-item-action">
                    <?php echo e($student -> pekerjaan_ibu); ?>

                </a>
                </a>
                    <a class="card p-2 px-3 w-50 list-group-item-action list-group-item-secondary">
                    Alamat
                </a>
                    <a class="card p-2 px-3 w-50 list-group-item-action">
                    <?php echo e($student -> alamat_ibu); ?>

                </a>
            </div>
        </div>
    </div>
</div>
<hr class="w-100">
<div class="mx-3">
<a href="/students" type="button" class="btn btn-secondary btn-lg" style="width: 15%">Kembali</a>
<a href="<?php echo e($student-> id); ?>/edit" type="button" class="btn btn-primary btn-lg" style="width: 15%" >Ubah</a>
<form action="/students/<?php echo e($student->id); ?>" method="post" class="d-inline">
    <!-- Manipulasi Method Delete -->
    <?php echo method_field('delete'); ?>
    <?php echo csrf_field(); ?>
    <button type="submit" class="btn btn-danger btn-lg" style="width: 15%">Hapus</button>
</form>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>