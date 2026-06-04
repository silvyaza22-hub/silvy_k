<div class="container-fluid">
    <h2 class="h3 mb-4 text-gray-800">Edit Pasien</h2>

    <form method="post" action="<?= site_url('pasien/update/'.$pasien->id_pasien); ?>">

        <div class="form-group">
            <label>ID Pasien</label>
            <input type="text" class="form-control" value="<?= $pasien->id_pasien ?>" readonly>
        </div>

        <div class="form-group">
            <label>Nama Pasien</label>
            <input type="text" name="nama" class="form-control" value="<?= $pasien->nama ?>" required>
        </div>

        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" value="<?= $pasien->tanggal_lahir ?>" required>
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required><?= $pasien->alamat ?></textarea>
        </div>

        <div class="form-group">
            <label>No Telepon</label>
            <input type="text" name="no_telp" class="form-control" value="<?= $pasien->no_telp ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="<?= site_url('pasien'); ?>" class="btn btn-secondary">Kembali</a>

    </form>
</div>