<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Login Pasien - Rumah Sakit Sehat Sentosa</title>

    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">
    <link href="<?= base_url('assets/css/sb-admin-2.min.css');?>" rel="stylesheet">

    <style>

        body{
            font-family: 'Nunito', sans-serif;
        }

        .bg-gradient-primary{
            background: linear-gradient(135deg,#0f4c81 0%,#3ba6ff 100%) !important;
            min-height:100vh;
        }

        .card{
            border:none !important;
            border-radius:25px !important;
            overflow:hidden;
            box-shadow:0 15px 40px rgba(0,0,0,.15) !important;
        }

        .hospital-side{
            background:linear-gradient(135deg,#0f4c81,#3ba6ff);
            min-height:550px;
        }

        .login-title{
            color:#0f4c81;
            font-weight:700;
        }

        .form-control-user{
            height:55px !important;
            border-radius:50px !important;
        }

        .btn-success{
            background:#28a745 !important;
            border-color:#28a745 !important;
            border-radius:50px !important;
            height:55px;
            font-weight:bold;
        }

        .btn-success:hover{
            background:#218838 !important;
            border-color:#218838 !important;
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

                        <div class="col-lg-6 d-none d-lg-flex align-items-center justify-content-center hospital-side">

                            <div class="text-center text-white">

                                <i class="fas fa-user-injured fa-5x mb-4"></i>

                                <h2>Portal Pasien</h2>

                                <p class="mt-3">
                                    Rumah Sakit Sehat Sentosa
                                </p>

                            </div>

                        </div>

                        <div class="col-lg-6">

                            <div class="p-5">

                                <div class="text-center">

                                    <h2 class="login-title mb-2">
                                        Login Pasien
                                    </h2>

                                    <p class="text-muted mb-4">
                                        Masukkan email dan password Anda
                                    </p>

                                </div>

                                <?php if($this->session->flashdata('error')): ?>
                                    <div class="alert alert-danger">
                                        <?= $this->session->flashdata('error'); ?>
                                    </div>
                                <?php endif; ?>

                                <form class="user" method="post" action="<?= site_url('login_pasien/login'); ?>">

                                    <div class="form-group">

                                        <input
                                            type="email"
                                            name="email"
                                            class="form-control form-control-user"
                                            placeholder="Masukkan Email"
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

                                    <button type="submit"
                                        class="btn btn-success btn-user btn-block">
                                    <i class="fas fa-sign-in-alt"></i>
                                    Login Pasien
                                </button>

                                <div class="mt-3">

                                    <a href="<?= site_url('registrasi_pasien'); ?>"
                                    class="btn btn-primary btn-user btn-block">

                                        <i class="fas fa-user-plus"></i>
                                        Registrasi Pasien

                                    </a>

                                </div>
                                </form>

                                <hr>

                                <div class="text-center">
                                    <a href="<?= site_url('auth'); ?>">
                                        Kembali ke Login Admin
                                    </a>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<script src="<?= base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<script src="<?= base_url('assets/js/sb-admin-2.min.js');?>"></script>

</body>
</html>