<!-- Using Templating Engine Blade Laravel -->
<!-- Import from resources/views/layout/main.blade.php -->


<?php $__env->startSection('title', 'Form Ubah Data Siswa'); ?>

<?php $__env->startSection('container'); ?>
<div class="container">
    <div class="row">
        <div class="col-8" >
            <div class="mt-3">
                <h1 class="mt-3">Form Ubah Data Siswa</h1>
                <form method="post" action="/students/<?php echo e($student->id); ?>">

                    <!-- Manipulasi Method Post untuk Update -->
                    <?php echo method_field('patch'); ?>


                    <!-- Token Cross Site Research Forgery (security form Laravel-->
                    <?php echo csrf_field(); ?>

                    <div class="my-4">
                        <h3> Data Siswa</h3>
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" value="<?php echo e($student->nama); ?>" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia) -->
                        <?php if($errors->has('nama')): ?>
                                <div class="error"><?php echo e($errors->first('nama')); ?></div>
                        <?php endif; ?>

                    </div>

                    <div class="form-group">
                        <label for="nis">NIS</label>
                        <input type="text" class="form-control" id="nis" placeholder="Masukkan NIS" name="nis" value="<?php echo e($student->nis); ?>" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia)
                        (3) Jika input nis sudah ada, akan terjadi error -->
                        <?php if($errors->has('nis')): ?>
                                <div class="error"><?php echo e($errors->first('nis')); ?></div>
                        <?php endif; ?>

                    </div>

                    <div class="form-group">
                        <label for="asrama">Asrama</label>
                        <input type="text" class="form-control" id="asrama" placeholder="Masukkan Asrama" name="asrama" value="<?php echo e($student->asrama); ?>" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia) -->
                        <?php if($errors->has('asrama')): ?>
                                <div class="error"><?php echo e($errors->first('asrama')); ?></div>
                        <?php endif; ?>

                    </div>

                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" placeholder="Masukkan Tempat Lahir" name="tempat_lahir" value="<?php echo e($student->tempat_lahir); ?>" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia) -->
                        <?php if($errors->has('tempat_lahir')): ?>
                                <div class="error"><?php echo e($errors->first('tempat_lahir')); ?></div>
                        <?php endif; ?>

                    </div>

                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="text" class="form-control" id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" name="tanggal_lahir" value="<?php echo e($student->tanggal_lahir); ?>" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia) -->
                        <?php if($errors->has('tanggal_lahir')): ?>
                                <div class="error"><?php echo e($errors->first('tanggal_lahir')); ?></div>
                        <?php endif; ?>

                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <input type="text" class="form-control" id="jenis_kelamin" placeholder="Pilih Jenis Kelamin" name="jenis_kelamin" value="<?php echo e($student->jenis_kelamin); ?>" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia)
                        (3) Jika input nis sudah ada, akan terjadi error -->
                        <?php if($errors->has('jenis_kelamin')): ?>
                                <div class="error"><?php echo e($errors->first('jenis_kelamin')); ?></div>
                        <?php endif; ?>

                    </div>

                    <div class="form-group">
                        <label for="golongan_darah">Golongan Darah</label>
                        <input type="text" class="form-control" id="golongan_darah" placeholder="Masukkan Golongan Darah" name="golongan_darah" value="<?php echo e($student->golongan_darah); ?>" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia)
                        (3) Jika input nis sudah ada, akan terjadi error -->
                        <?php if($errors->has('golongan_darah')): ?>
                                <div class="error"><?php echo e($errors->first('golongan_darah')); ?></div>
                        <?php endif; ?>

                    </div>

                    <div class="form-group">
                        <label for="tinggi_badan">Tinggi Badan</label>
                        <input type="text" class="form-control" id="tinggi_badan" placeholder="Masukkan Tinggi Badan" name="tinggi_badan" value="<?php echo e($student->tinggi_badan); ?>" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia)
                        (3) Jika input nis sudah ada, akan terjadi error -->
                        <?php if($errors->has('tinggi_badan')): ?>
                                <div class="error"><?php echo e($errors->first('tinggi_badan')); ?></div>
                        <?php endif; ?>

                    </div>

                    <div class="form-group">
                        <label for="berat_badan">Berat Badan</label>
                        <input type="text" class="form-control" id="berat_badan" placeholder="Masukkan Berat Badan" name="berat_badan" value="<?php echo e($student->berat_badan); ?>" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia)
                        (3) Jika input nis sudah ada, akan terjadi error -->
                        <?php if($errors->has('berat_badan')): ?>
                                <div class="error"><?php echo e($errors->first('berat_badan')); ?></div>
                        <?php endif; ?>

                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat" value="<?php echo e($student->alamat); ?>" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia) -->
                        <?php if($errors->has('alamat')): ?>
                                <div class="error"><?php echo e($errors->first('alamat')); ?></div>
                        <?php endif; ?>

                    </div>

                    <div class="my-4">
                        <h3>Data Orang Tua</h3>
                        <h4>Ayah</h4>
                    </div>

                    <div class="form-group">
                        <label for="nama_ayah">Nama Ayah</label>
                        <input type="text" class="form-control" id="nama_ayah" placeholder="Masukkan Nama Ayah" name="nama_ayah" value="<?php echo e($student->nama_ayah); ?>" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia) -->
                        <?php if($errors->has('nama_ayah')): ?>
                                <div class="error"><?php echo e($errors->first('nama_ayah')); ?></div>
                        <?php endif; ?>

                    </div>

                    <div class="form-group">
                        <label for="tempat_lahir_ayah">Tempat Lahir Ayah</label>
                        <input type="text" class="form-control" id="tempat_lahir_ayah" placeholder="Masukkan Tempat Lahir Ayah" name="tempat_lahir_ayah" value="<?php echo e($student->tempat_lahir_ayah); ?>" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia) -->
                        <?php if($errors->has('tempat_lahir_ayah')): ?>
                                <div class="error"><?php echo e($errors->first('tempat_lahir_ayah')); ?></div>
                        <?php endif; ?>

                    </div>

                    <div class="form-group">
                        <label for="tanggal_lahir_ayah">Tanggal Lahir Ayah</label>
                        <input type="text" class="form-control" id="tanggal_lahir_ayah" placeholder="Masukkan Tanggal Lahir Ayah" name="tanggal_lahir_ayah" value="<?php echo e($student->tanggal_lahir_ayah); ?>" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia) -->
                        <?php if($errors->has('tanggal_lahir_ayah')): ?>
                                <div class="error"><?php echo e($errors->first('tanggal_lahir_ayah')); ?></div>
                        <?php endif; ?>

                    </div>

                    <div class="form-group">
                        <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                        <input type="text" class="form-control" id="pekerjaan_ayah" placeholder="Masukkan Pekerjaan Ayah" name="pekerjaan_ayah" value="<?php echo e($student->pekerjaan_ayah); ?>" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia) -->
                        <?php if($errors->has('pekerjaan_ayah')): ?>
                                <div class="error"><?php echo e($errors->first('pekerjaan_ayah')); ?></div>
                        <?php endif; ?>

                    </div>

                    <div class="form-group">
                        <label for="alamat_ayah">Alamat Ayah</label>
                        <input type="text" class="form-control" id="alamat_ayah" placeholder="Masukkan Alamat Ayah" name="alamat_ayah" value="<?php echo e($student->alamat_ayah); ?>" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia) -->
                        <?php if($errors->has('alamat_ayah')): ?>
                                <div class="error"><?php echo e($errors->first('alamat')); ?></div>
                        <?php endif; ?>

                    </div>

                    <div class="my-4">
                        <h4>Ibu</h4>
                    </div>

                    <div class="form-group">
                        <label for="nama_ibu">Nama ibu</label>
                        <input type="text" class="form-control" id="nama_ibu" placeholder="Masukkan Nama ibu" name="nama_ibu" value="<?php echo e($student->nama_ibu); ?>" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia) -->
                        <?php if($errors->has('nama_ibu')): ?>
                                <div class="error"><?php echo e($errors->first('nama_ibu')); ?></div>
                        <?php endif; ?>

                    </div>

                    <div class="form-group">
                        <label for="tempat_lahir_ibu">Tempat Lahir ibu</label>
                        <input type="text" class="form-control" id="tempat_lahir_ibu" placeholder="Masukkan Tempat Lahir ibu" name="tempat_lahir_ibu" value="<?php echo e($student->tempat_lahir_ibu); ?>" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia) -->
                        <?php if($errors->has('tempat_lahir_ibu')): ?>
                                <div class="error"><?php echo e($errors->first('tempat_lahir_ibu')); ?></div>
                        <?php endif; ?>

                    </div>

                    <div class="form-group">
                        <label for="tanggal_lahir_ibu">Tanggal Lahir ibu</label>
                        <input type="text" class="form-control" id="tanggal_lahir_ibu" placeholder="Masukkan Tanggal Lahir ibu" name="tanggal_lahir_ibu" value="<?php echo e($student->tanggal_lahir_ibu); ?>" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia) -->
                        <?php if($errors->has('tanggal_lahir_ibu')): ?>
                                <div class="error"><?php echo e($errors->first('tanggal_lahir_ibu')); ?></div>
                        <?php endif; ?>

                    </div>

                    <div class="form-group">
                        <label for="pekerjaan_ibu">Pekerjaan ibu</label>
                        <input type="text" class="form-control" id="pekerjaan_ibu" placeholder="Masukkan Pekerjaan ibu" name="pekerjaan_ibu" value="<?php echo e($student->pekerjaan_ibu); ?>" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia) -->
                        <?php if($errors->has('pekerjaan_ibu')): ?>
                                <div class="error"><?php echo e($errors->first('pekerjaan_ibu')); ?></div>
                        <?php endif; ?>

                    </div>

                    <div class="form-group">
                        <label for="alamat_ibu">Alamat ibu</label>
                        <input type="text" class="form-control" id="alamat_ibu" placeholder="Masukkan Alamat ibu" name="alamat_ibu" value="<?php echo e($student->alamat_ibu); ?>" required>

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia) -->
                        <?php if($errors->has('alamat_ibu')): ?>
                                <div class="error"><?php echo e($errors->first('alamat')); ?></div>
                        <?php endif; ?>

                    </div>

                    <button type="submit" class="btn btn-primary">Ubah Data</button>
                </form>

            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>