<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" name="nim" class="form-control" id="nim">
                            <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="prodi">Program Studi</label>
                                <select class="form-control" name="prodi" id="prodi" >
                                    <option value="#">-</option>
                                    <option value="Sistem Informasi">Sistem Informasi</option>
                                    <option value="Sistem Komputer">Sistem Komputer</option>
                                    <option value="Manajemen Informatika">Manajemen Informatika</option>
                                    <small class="form-text text-danger"><?= form_error('prodi'); ?></small>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline-info" name="tambah">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>