<div class="container-fluid">

<h2 class="h3 mb-4 text-gray-800">Tambah Spesialis</h2>

<div class="card shadow">
    <div class="card-body">

<form method="post" action="<?= site_url('spesialis/simpan'); ?>">

    <div class="form-group">
        <label>Nama Spesialis</label>
        <input type="text"
               name="nama_spesialis"
               class="form-control"
               required>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?= site_url('spesialis'); ?>" class="btn btn-secondary">Kembali</a>

</form>

    </div>
</div>

</div>