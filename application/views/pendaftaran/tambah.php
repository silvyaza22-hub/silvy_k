<form method="post" action="<?= site_url('pendaftaran/simpan'); ?>">

    <div class="form-group">
        <label>Pasien</label>
        <select name="pasien_id" class="form-control" required>
            <?php foreach($pasien as $p): ?>
                <option value="<?= $p->id_pasien; ?>">
                    <?= $p->nama; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label>Dokter</label>
        <select name="dokter_id" class="form-control" required>
            <?php foreach($dokter as $d): ?>
                <option value="<?= $d->id_dokter; ?>">
                    <?= $d->nama_dokter; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label>Keluhan</label>
        <textarea name="keluhan" class="form-control" required></textarea>
    </div>

    <div class="form-group">
        <label>Tanggal Daftar</label>
        <input type="date" name="tanggal_daftar" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Jam Kunjungan</label>
        <input type="time" name="jam_kunjungan" class="form-control" required>
    </div>

    <div class="form-group">
    <label>Status</label>
    <select name="status" class="form-control">
        <option value="Diproses">Menunggu</option>
        <option value="Disetujui">Disetujui</option>
        <option value="Ditolak">Ditolak</option>
    </select>
</div>

    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?= site_url('pendaftaran'); ?>" class="btn btn-secondary">Kembali</a>

</form>