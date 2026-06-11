<form method="post" action="<?= site_url('pendaftaran/simpan'); ?>">

    
<div class="container-fluid">

    <form method="post" action="<?= site_url('pendaftaran/simpan'); ?>">

        <div class="card shadow border-0 mb-4">

            <!-- HEADER -->
            <div class="card-header py-4 text-white"
                 style="background:#0d4d8b;">

                <h2 class="m-0 font-weight-bold">
                    <i class="fas fa-notes-medical mr-2"></i>
                    Tambah Pendaftaran Pasien
                </h2>

            </div>

            <!-- BODY -->
            <div class="card-body p-4">

                <div class="row">

                    <div class="col-md-6">

                        <div class="form-group mb-4">
                            <label class="font-weight-bold text-primary">
                                <i class="fas fa-user mr-2"></i>
                                Pasien
                            </label>

                            <select name="pasien_id"
                                    class="form-control form-control-lg"
                                    required>

                                <option value="">-- Pilih Pasien --</option>

                                <?php foreach($pasien as $p): ?>
                                    <option value="<?= $p->id_pasien; ?>">
                                        <?= $p->nama; ?>
                                    </option>
                                <?php endforeach; ?>

                            </select>
                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="form-group mb-4">
                            <label class="font-weight-bold text-primary">
                                <i class="fas fa-user-md mr-2"></i>
                                Dokter
                            </label>

                            <select name="dokter_id"
                                    class="form-control form-control-lg"
                                    required>

                                <option value="">-- Pilih Dokter --</option>

                                <?php foreach($dokter as $d): ?>
                                    <option value="<?= $d->id_dokter; ?>">
                                        <?= $d->nama_dokter; ?>
                                    </option>
                                <?php endforeach; ?>

                            </select>
                        </div>

                    </div>

                </div>

                <div class="form-group mb-4">

                    <label class="font-weight-bold text-primary">
                        <i class="fas fa-comment-medical mr-2"></i>
                        Keluhan
                    </label>

                    <textarea name="keluhan"
                              class="form-control"
                              rows="4"
                              placeholder="Masukkan keluhan pasien"
                              required></textarea>

                </div>

                <div class="row">

                    <div class="col-md-6">

                        <div class="form-group mb-4">
                            <label class="font-weight-bold text-primary">
                                <i class="fas fa-calendar-alt mr-2"></i>
                                Tanggal Daftar
                            </label>

                            <input type="date"
                                   name="tanggal_daftar"
                                   class="form-control form-control-lg"
                                   required>
                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="form-group mb-4">
                            <label class="font-weight-bold text-primary">
                                <i class="fas fa-clock mr-2"></i>
                                Jam Kunjungan
                            </label>

                            <input type="time"
                                   name="jam_kunjungan"
                                   class="form-control form-control-lg"
                                   required>
                        </div>

                    </div>

                </div>

                <div class="form-group mb-4">

                    <label class="font-weight-bold text-primary">
                        <i class="fas fa-info-circle mr-2"></i>
                        Status
                    </label>

                    <select name="status"
                            class="form-control form-control-lg">

                        <option value="Diproses">Menunggu</option>
                        <option value="Disetujui">Disetujui</option>
                        <option value="Ditolak">Ditolak</option>

                    </select>

                </div>

                <hr>

                <div class="text-right">

                    <a href="<?= site_url('pendaftaran'); ?>"
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

