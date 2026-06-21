<div class="container-fluid">

    
    <div class="card border-0 shadow-lg mb-4"
         style="border-radius:25px;
         background:linear-gradient(135deg,#667eea,#764ba2);">

        <div class="card-body p-4 text-white">

            <div class="row align-items-center">

                <div class="col-md-8">

                    <h2 class="font-weight-bold">
                        🏥 Daftar Berobat Online
                    </h2>

                    <p class="mb-0">
                        Lengkapi data kunjungan Anda untuk mendapatkan pelayanan terbaik.
                    </p>

                </div>

                <div class="col-md-4 text-center">

                    <i class="fas fa-notes-medical"
                       style="font-size:90px;opacity:.25;"></i>

                </div>

            </div>

        </div>

    </div>

    <!-- FORM -->
    <div class="card border-0 shadow-lg"
         style="border-radius:20px;">

        <div class="card-header bg-white">

            <h5 class="font-weight-bold text-primary mb-0">
                Form Pendaftaran
            </h5>

        </div>

        <div class="card-body p-4">

            <form method="post"
                  action="<?= site_url('pendaftaran_pasien/simpan'); ?>">

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label><b>Nama Pasien</b></label>

                        <input type="text"
                               class="form-control"
                               value="<?= $this->session->userdata('nama_pasien'); ?>"
                               readonly>

                    </div>

                    <div class="col-md-6 mb-3">

                        <label><b>Email</b></label>

                        <input type="text"
                               class="form-control"
                               value="<?= $this->session->userdata('email_pasien'); ?>"
                               readonly>

                    </div>

                </div>

                <div class="form-group">

                    <label><b>Pilih Dokter</b></label>

                    <select name="dokter_id"
                            class="form-control"
                            required>

                        <option value="">
                            -- Pilih Dokter --
                        </option>

                        <?php foreach($dokter as $d): ?>

                        <option value="<?= $d->id_dokter; ?>">
                            <?= $d->nama_dokter; ?>
                        </option>

                        <?php endforeach; ?>

                    </select>

                </div>

                <div class="form-group">

                    <label><b>Keluhan</b></label>

                    <textarea name="keluhan"
                              class="form-control"
                              rows="4"
                              placeholder="Tuliskan keluhan Anda..."
                              required></textarea>

                </div>

                <div class="row">

                    <div class="col-md-6">

                        <div class="form-group">

                            <label><b>Tanggal Kunjungan</b></label>

                            <input type="date"
                                   name="tanggal_daftar"
                                   class="form-control"
                                   required>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="form-group">

                            <label><b>Jam Kunjungan</b></label>

                            <input type="time"
                                   name="jam_kunjungan"
                                   class="form-control"
                                   required>

                        </div>

                    </div>

                </div>

                <div class="alert alert-info">

                    <i class="fas fa-info-circle"></i>
                    Pastikan tanggal dan jam kunjungan sudah sesuai sebelum mengirim pendaftaran.

                </div>

                <button type="submit"
                        class="btn btn-primary btn-lg shadow-sm">

                    <i class="fas fa-paper-plane"></i>
                    Kirim Pendaftaran

                </button>

                <a href="<?= site_url('dashboard_pasien'); ?>"
                   class="btn btn-secondary btn-lg">

                    Kembali

                </a>

            </form>

        </div>

    </div>

</div>