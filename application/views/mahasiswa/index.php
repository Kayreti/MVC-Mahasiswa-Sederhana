<div class="container">
    <?php if( $this->session->flashdata('flash') ) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
            </div>
        </div>
    </div>
<?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6"> 
            <form action="" method="post">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <button class="btn btn-info mt-0" type="submit">Cari</button>
                  </div>
                  <input type="text" class="form-control" placeholder="Cari Data..." aria-label="Example text with button addon" 
                  aria-describedby="button-addon1" name="keyword">
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h1>Daftar Mahasiswa</h1>
            <?php if (empty($mahasiswa) ) : ?>
                <div class="alert alert-danger" role=alert>
                Data Tidak Ditemukan
                </div>
            <?php endif; ?>
                <ul class="list-group">
                    <?php foreach($mahasiswa as $mhs) : ?>
                        <li class="list-group-item">
                            <?= $mhs['nama']; ?>
                            <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['nim']; ?>" class="badge badge-danger float-right" 
                            onclick="return confirm('Hapus Data?');">Hapus</a>
                            <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['nim']; ?>" class="badge badge-secondary float-right">Detail</a>
                            <a href="<?= base_url(); ?>mahasiswa/edit/<?= $mhs['nim']; ?>" class="badge badge-warning float-right">Edit</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <div class="row mt-3">
                <div class="col-md-6">
                    <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-info">Tambah Data Mahasiswa</a>
                </div>
            </div>
        </div>
    </div>
</div>