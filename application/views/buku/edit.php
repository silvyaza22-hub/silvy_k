<div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">Edit Buku</h1>

<div class="card shadow">
<div class="card-body">

<form method="post" action="<?= site_url('buku/update/'.$buku->id); ?>">

<div class="form-group">
<label>Kode Buku</label>
<input type="text" name="kode_buku" value="<?= $buku->kode_buku ?>" class="form-control" required>
</div>

<div class="form-group">
<label>Judul Buku</label>
<input type="text" name="judul" value="<?= $buku->judul ?>" class="form-control" required>
</div>

<div class="form-group">
<label>Penulis</label>
<input type="text" name="penulis" value="<?= $buku->penulis ?>" class="form-control" required>
</div>

<div class="form-group">
<label>Penerbit</label>
<input type="text" name="penerbit" value="<?= $buku->penerbit ?>" class="form-control" required>
</div>

<div class="form-group">
<label>Tahun</label>
<input type="number" name="tahun" value="<?= $buku->tahun ?>" class="form-control" required>
</div>

<div class="form-group">
<label>Kategori</label>
<select name="kategori" class="form-control" required>
<?php foreach($kategori as $k): ?>
<option value="<?= $k->id ?>" <?= $buku->kategori_id == $k->id ? 'selected' : '' ?>>
<?= $k->nama_kategori ?>
</option>
<?php endforeach; ?>
</select>
</div>

<div class="form-group">
<label>Stok</label>
<input type="number" name="stok" value="<?= $buku->stok ?>" class="form-control" required>
</div>

<div class="form-group">
<label>Lokasi Rak</label>
<input type="text" name="lokasi_rak" value="<?= $buku->lokasi_rak ?>" class="form-control" required>
</div>

<button type="submit" class="btn btn-primary">Update</button>
<a href="<?= site_url('buku'); ?>" class="btn btn-secondary">Kembali</a>

</form>

</div>
</div>

</div>