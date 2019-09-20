<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Edit Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $mahasiswa['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>

                        <div class="form-group">
                            <input type="hidden" name="nim" class="form-control" id="nim" value="<?= $mahasiswa['nim']; ?>">
                            <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                        </div>
        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email" value="<?= $mahasiswa['email']; ?>">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                                <label for="prodi">Program Studi</label>
                                <select class="form-control" name="prodi" id="prodi">
                                <?php foreach( $prodi as $p ) : ?>
                                <?php if ( $p == $mahasiswa['prodi'] ) : ?>
                                        <option value="<?= $p; ?>" selected><?= $p; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $p; ?>"><?= $p; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                </select>

                                <button type="submit" class="btn btn-outline-info" name="edit">Edit Data</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>