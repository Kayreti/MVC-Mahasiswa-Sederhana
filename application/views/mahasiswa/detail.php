

<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Detail Data Mahasiswa</h5>
                    <div class="card-body text-info">
                    <h5 class="card-title"><?= $mahasiswa['nama']; ?></h5>
                    <h5 class="card-title"><?= $mahasiswa['nim']; ?></h5>
                    <h5 class="card-title"><?= $mahasiswa['email']; ?></h5>
                    <h5 class="card-title"><?= $mahasiswa['prodi']; ?></h5>
                    </div>
                </div>
                <a href="<?= base_url(); ?>mahasiswa" class="btn btn-info">Kembali</a>
            </div>
        </div>
    </div>
</div>