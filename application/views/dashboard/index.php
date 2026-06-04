
<h1 class="h3 mb-4 text-gray-800">
    <i class="fas fa-hospital-alt"></i>
    Dashboard Rumah Sakit
</h1>

<div class="row">

    <!-- Total Pasien -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card shadow h-100 py-2"
             style="border-left:5px solid #800020; border-radius:15px;">
            <div class="card-body text-center">

                <i class="fas fa-user-injured fa-3x mb-3"
                   style="color:#800020;"></i>

                <h5 class="font-weight-bold">Total Pasien</h5>

                <h2 class="font-weight-bold"
                    style="color:#800020;">
                    <?= $total_pasien; ?>
                </h2>

            </div>
        </div>
    </div>

    <!-- Total Dokter -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card shadow h-100 py-2"
             style="border-left:5px solid #f6c23e; border-radius:15px;">
            <div class="card-body text-center">

                <i class="fas fa-user-md fa-3x mb-3"
                   style="color:#f6c23e;"></i>

                <h5 class="font-weight-bold">Total Dokter</h5>

                <h2 class="font-weight-bold"
                    style="color:#f6c23e;">
                    <?= $total_dokter; ?>
                </h2>

            </div>
        </div>
    </div>

    <!-- Total Pendaftaran -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card shadow h-100 py-2"
             style="border-left:5px solid #800020; border-radius:15px;">
            <div class="card-body text-center">

                <i class="fas fa-calendar-check fa-3x mb-3"
                   style="color:#800020;"></i>

                <h5 class="font-weight-bold">Total Pendaftaran</h5>

                <h2 class="font-weight-bold"
                    style="color:#800020;">
                    <?= $total_pendaftaran; ?>
                </h2>

            </div>
        </div>
    </div>

</div>
```
