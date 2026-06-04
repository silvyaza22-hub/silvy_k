<form method="post" action="<?= site_url('pasien/simpan'); ?>">

    <div class="form-group">
        <label>Nama Pasien</label>
        <input type="text" name="nama" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control" required></textarea>
    </div>

    <div class="form-group">
        <label>No Telepon</label>
        <input type="text" name="no_telp" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?= site_url('pasien'); ?>" class="btn btn-secondary">Kembali</a>

</form>