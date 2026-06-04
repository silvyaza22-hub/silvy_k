<div class="container-fluid">

<h2 class="h3 mb-4 text-gray-800">Edit Spesialis</h2>

<div class="card shadow">
    <div class="card-body">

<form method="post" action="<?= site_url('spesialis/update/'.$spesialis->id); ?>">

<div class="form-group">
    <label>Nama Spesialis</label>
    <input type="text"
           name="nama_spesialis"
           class="form-control"
           value="<?= $spesialis->nama_spesialis; ?>"
           required>
</div>

<button type="submit" class="btn btn-primary">Simpan</button>
<a href="<?= site_url('spesialis'); ?>" class="btn btn-secondary">Kembali</a>

</form>

    </div>
</div>

</div>