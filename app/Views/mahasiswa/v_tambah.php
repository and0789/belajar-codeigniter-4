<?php

use Config\Services;

?>
<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"><?= $judul ?></h3>

            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">

            <?php
            session();
            $validation = Services::validation();
            ?>

<!--            --><?php
//            if (session()->getFlashdata('errors')) {
//                echo '<div class="alert alert-default-danger">';
//                echo session()->getFlashdata('error');
//                echo '</div>';
//            }
//            ?>

            <?php echo form_open('Mahasiswa/InsertData'); ?>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>NIM</label>
                        <input type="text" name="nim" id="nim" value="<?= old('nim') ?>"
                               class="form-control<?= $validation->hasError('nim') ? 'is-invalid' : ''; ?>">
                        <p class="text-danger">
                            <?= $validation->hasError('nim') ? $validation->getError('nim') : ''; ?>
                        </p>
<!--                        <div class="invalid-feedback">-->
<!--                            --><?php //= $validation->getError('nim'); ?>
<!--                        </div>-->
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nama Mahasiswa</label>
                        <input name="nama_mahasiswa" value="<?= old('nama_mahasiswa') ?>"
                               class="form-control">
                        <p class="text-danger">
                            <?= $validation->getError('nama_mahasiswa'); ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input name="tempat_lahir" value="<?= old('tempat_lahir') ?>" class="form-control">
                        <p class="text-danger">
                            <?= $validation->hasError('tempat_lahir') ?
                                $validation->getError('tempat_lahir') : ''; ?>
                        </p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" value="<?= old('tgl_lahir') ?>" class="form-control">
                        <p class="text-danger">
                            <?= $validation->hasError('tgl_lahir') ?
                                $validation->getError('tgl_lahir') : ''; ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Jenis Kelamin</label>

                        <select name="jenis_kelamin" class="form-control">
                            <option value="">--Pilih Jenis Kelamin--</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>

                    </div>
                </div>
                <div class="col-sm-6">

                </div>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= base_url('Mahasiswa') ?>" class="btn btn-success">Kembali</a>

            <?php echo form_close(); ?>


        </div>
    </div>
</div>