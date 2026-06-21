<form method="post" action="<?= site_url('pasien/simpan'); ?>">

    
<div class="container-fluid">

    <form method="post" action="<?= site_url('pasien/simpan'); ?>">

        <div class="card shadow mb-4 border-0">

            
            <div class="card-header py-4 text-white"
                 style="background:#0d4d8b;">

                <h2 class="m-0 font-weight-bold">
                    <i class="fas fa-user-injured mr-2"></i>
                    Tambah Data Pasien
                </h2>

            </div>

            
            <div class="card-body p-4">

                <div class="form-group mb-4">

                    <label class="font-weight-bold text-primary">
                        <i class="fas fa-user mr-2"></i>
                        Nama Pasien
                    </label>

                    <input type="text"
                           name="nama"
                           class="form-control form-control-lg"
                           placeholder="Masukkan nama pasien"
                           required>

                </div>

                <div class="form-group mb-4">

                    <label class="font-weight-bold text-primary">
                        <i class="fas fa-calendar-alt mr-2"></i>
                        Tanggal Lahir
                    </label>

                    <input type="date"
                           name="tanggal_lahir"
                           class="form-control form-control-lg"
                           required>

                </div>

                <div class="form-group mb-4">

                    <label class="font-weight-bold text-primary">
                        <i class="fas fa-map-marker-alt mr-2"></i>
                        Alamat
                    </label>

                    <textarea name="alamat"
                              class="form-control"
                              rows="4"
                              placeholder="Masukkan alamat lengkap pasien"
                              required></textarea>

                </div>

                <div class="form-group mb-4">

                    <label class="font-weight-bold text-primary">
                        <i class="fas fa-phone mr-2"></i>
                        Nomor Telepon
                    </label>

                    <input type="text"
                           name="no_telp"
                           class="form-control form-control-lg"
                           placeholder="Contoh: 081234567890"
                           required>

                </div>

                <hr>

                <div class="text-right">

                    <a href="<?= site_url('pasien'); ?>"
                       class="btn btn-secondary px-4">

                        <i class="fas fa-arrow-left mr-1"></i>
                        Kembali

                    </a>

                    <button type="submit"
                            class="btn btn-primary px-4">

                        <i class="fas fa-save mr-1"></i>
                        Simpan Data

                    </button>

                </div>

            </div>

        </div>

    </form>

</div>
