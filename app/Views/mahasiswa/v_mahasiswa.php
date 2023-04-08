<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"><?= $judul ?></h3>

            <div class="card-tools">
                <a href="<?= base_url('Mahasiswa/Tambah' ) ?>" class="btn btn-flat btn-primary btn-xm">
                    <i class="fas fa-plus"></i> Tambah
                </a>
                </button>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php
            if (session()->getFlashdata('insert')) {
                echo '<div class="alert alert-default-success">';
                echo session()->getFlashdata('insert');
                echo  '</div>';
            }
            ?>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Tempat, Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1;
                foreach ($mhs as $key => $value) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $value['nim'] ?></td>
                        <td><?= $value['nama_mahasiswa'] ?></td>
                        <td><?= $value['tempat_lahir'] ?>, <?= date('d-M-Y', strtotime($value['tgl_lahir'])) ?></td>
                        <td><?= $value['jenis_kelamin']=='L' ? 'Laki-laki' : 'Perempuan' ?></td>
                        <td></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.col -->