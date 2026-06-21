<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Login Sistem Rumah Sakit</title>

    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">

    <link href="<?= base_url('assets/css/sb-admin-2.min.css');?>" rel="stylesheet">

    <style>

        body{
            font-family: 'Nunito', sans-serif;
        }

        .bg-gradient-primary{
            background: linear-gradient(135deg, #0f4c81 0%, #3ba6ff 100%) !important;
            min-height: 100vh;
        }

        .card{
            border: none !important;
            border-radius: 25px !important;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0,0,0,.15) !important;
        }

        .hospital-side{
            background: linear-gradient(135deg,#0f4c81,#3ba6ff);
            min-height: 550px;
        }

        .hospital-side h2{
            font-weight: 800;
        }

        .hospital-side p{
            font-size: 15px;
        }

        .feature{
            margin-top: 20px;
            text-align: left;
            display: inline-block;
        }

        .feature p{
            margin-bottom: 10px;
            font-size: 15px;
        }

        .login-title{
            color: #0f4c81;
            font-weight: 700;
        }

        .form-control-user{
            height: 55px !important;
            border-radius: 50px !important;
            font-size: 15px;
        }

        .form-control-user:focus{
            border-color: #0f4c81 !important;
            box-shadow: 0 0 0 .2rem rgba(15,76,129,.2) !important;
        }

        .btn-primary{
            background: #0f4c81 !important;
            border-color: #0f4c81 !important;
            color: white !important;
            border-radius: 50px !important;
            height: 55px;
            font-weight: bold;
        }

        .btn-primary:hover{
            background: #0c3d67 !important;
            border-color: #0c3d67 !important;
        }

        .footer-text{
            color: #6c757d;
        }

    .btn-success{
            background: #28a745 !important;
            border-color: #28a745 !important;
            color: white !important;
            border-radius: 50px !important;
            height: 55px;
            font-weight: bold;
        }

        .btn-success:hover{
            background: #218838 !important;
            border-color: #218838 !important;
        }

    </style>

</head>

<body class="bg-gradient-primary">

<div class="container">

    <div class="row justify-content-center">

        <div class="col-xl-11 col-lg-12 col-md-10">

            <div class="card o-hidden shadow-lg my-5">

                <div class="card-body p-0">

                    <div class="row">

                        <!-- SISI KIRI -->
                        <div class="col-lg-6 d-none d-lg-flex align-items-center justify-content-center hospital-side">

                            <div class="text-center text-white">

                                <i class="fas fa-user-md fa-5x mb-4"></i>

                                <h2>Rumah Sakit Sehat Sentosa</h2>

                                <p class="mt-3">
                                    Sistem Pendaftaran Pasien Online
                                </p>

                                <div class="feature">
                                    <p>✔ Daftar Berobat Online</p>
                                    <p>✔ Pilih Dokter Spesialis</p>
                                    <p>✔ Cek Status Pendaftaran</p>
                                    <p>✔ Pelayanan Cepat & Mudah</p>
                                </div>

                            </div>

                        </div>

                        <!-- SISI KANAN -->
                        <div class="col-lg-6">

                            <div class="p-5">

                                <div class="text-center">

                                    <h2 class="login-title mb-2">
                                        Selamat Datang
                                    </h2>

                                    <p class="text-muted mb-4">
                                        <p class="text-muted mb-4">
                                        Pilih akses sebagai Admin atau Pasien

                                    </p>

                                </div>

                                <?php if($this->session->flashdata('error')): ?>
                                    <div class="alert alert-danger">
                                        <?= $this->session->flashdata('error'); ?>
                                    </div>
                                <?php endif; ?>

                                <form class="user" method="post" action="<?= site_url('auth/login'); ?>">

                                    <div class="form-group">

                                        <input
                                            type="text"
                                            name="username"
                                            class="form-control form-control-user"
                                            placeholder="Masukkan Username"
                                            required>

                                    </div>

                                    <div class="form-group">

                                        <input
                                            type="password"
                                            name="password"
                                            class="form-control form-control-user"
                                            placeholder="Masukkan Password"
                                            required>

                                    </div>

                                    <div class="form-group">

                                        <div class="custom-control custom-checkbox small">

                                            <input type="checkbox"
                                                   class="custom-control-input"
                                                   id="customCheck">

                                            <label class="custom-control-label"
                                                   for="customCheck">
                                                Simpan Login
                                            </label>

                                        </div>

                                    </div>

                                    <button type="submit"
                                            class="btn btn-primary btn-user btn-block">
                                        <i class="fas fa-sign-in-alt"></i>
                                        Login Admin
                                    </button>

                                    <div class="text-center my-3">
                                        <span class="text-muted font-weight-bold">
                                            ATAU
                                        </span>
                                    </div>

                                    <a href="<?= site_url('login_pasien'); ?>"
                                    class="btn btn-success btn-user btn-block">
                                        <i class="fas fa-user-injured"></i>
                                        Login Pasien
                                    </a>
                                    

                                </form>

                                <hr>

                                <div class="text-center">

                                    <small class="footer-text">
                                        © <?= date('Y'); ?> Rumah Sakit Sehat Sentosa
                                    </small>

                                </div>

                            </div>

                        </div>
                        <!-- END KANAN -->

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<script src="<?= base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js');?>"></script>
<script src="<?= base_url('assets/js/sb-admin-2.min.js');?>"></script>

</body>
</html>

