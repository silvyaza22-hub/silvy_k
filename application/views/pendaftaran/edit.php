<div class="container-fluid">

<h2 class="h3 mb-4 text-gray-800">Edit Pendaftaran</h2>

<div class="card shadow">
<div class="card-body">

<form method="post" action="<?= site_url('pendaftaran/update/'.$data->id_daftar); ?>">

    <div class="form-group">
        <label>Pasien</label>
        <select name="pasien_id" class="form-control">
            <?php foreach($pasien as $p): ?>
                <option value="<?= $p->id_pasien; ?>"
                    <?= ($p->id_pasien == $data->id_pasien) ? 'selected' : ''; ?>>
                    <?= $p->nama; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label>Dokter</label>
        <select name="dokter_id" class="form-control">
            <?php foreach($dokter as $d): ?>
                <option value="<?= $d->id_dokter; ?>"
                    <?= ($d->id_dokter == $data->id_dokter) ? 'selected' : ''; ?>>
                    <?= $d->nama_dokter; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label>Keluhan</label>
        <textarea name="keluhan" class="form-control"><?= $data->keluhan; ?></textarea>
    </div>

    <div class="form-group">
        <label>Tanggal Daftar</label>
        <input type="date" name="tanggal_daftar"
               value="<?= $data->tanggal_daftar; ?>"
               class="form-control">
    </div>

    <div class="form-group">
        <label>Jam Kunjungan</label>
        <input type="time" name="jam_kunjungan"
               value="<?= $data->jam_kunjungan; ?>"
               class="form-control">
    </div>

    <div class="form-group">
        <label>Status</label>
        <select name="status" class="form-control">
            <option value="Menunggu" <?= ($data->status=='Menunggu')?'selected':''; ?>>Menunggu</option>
            <option value="Disetujui" <?= ($data->status=='Disetujui')?'selected':''; ?>>Disetujui</option>
            <option value="Ditolak" <?= ($data->status=='Ditolak')?'selected':''; ?>>Ditolak</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="<?= site_url('pendaftaran'); ?>" class="btn btn-secondary">Kembali</a>

</form>

</div>
</div>
</div>