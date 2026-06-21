<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Registrasi Pasien - Rumah Sakit Sehat Sentosa</title>

    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">
    <link href="<?= base_url('assets/css/sb-admin-2.min.css');?>" rel="stylesheet">

    <style>

        body{
            font-family:'Nunito',sans-serif;
        }

        .bg-gradient-primary{
            background:linear-gradient(135deg,#0f4c81 0%,#3ba6ff 100%) !important;
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
            min-height:650px;
        }

        .login-title{
            color:#0f4c81;
            font-weight:700;
        }

        .form-control-user{
            border-radius:50px !important;
            min-height:55px;
        }

        textarea.form-control-user{
            border-radius:20px !important;
            min-height:100px;
            padding:15px;
        }

        .btn-primary{
            background:#0f4c81 !important;
            border-color:#0f4c81 !important;
            border-radius:50px !important;
            height:55px;
            font-weight:bold;
        }

        .btn-primary:hover{
            background:#0c3d67 !important;
        }

    </style>

</head>

<body class="bg-gradient-primary">

<div class="container">

    <div class="row justify-content-center">

        <div class="col-xl-11 col-lg-12 col-md-11">

            <div class="card o-hidden shadow-lg my-5">

                <div class="card-body p-0">

                    <div class="row">

                        <div class="col-lg-5 d-none d-lg-flex align-items-center justify-content-center hospital-side">

                            <div class="text-center text-white">

                                <i class="fas fa-user-plus fa-5x mb-4"></i>

                                <h2>Registrasi Pasien</h2>

                                <p class="mt-3">
                                    Daftarkan akun pasien untuk melakukan pendaftaran berobat secara online.
                                </p>

                            </div>

                        </div>

                        <div class="col-lg-7">

                            <div class="p-5">

                                <div class="text-center">

                                    <h2 class="login-title mb-2">
                                        Form Registrasi Pasien
                                    </h2>

                                    <p class="text-muted mb-4">
                                        Lengkapi data berikut
                                    </p>

                                </div>

                                <form method="post"
                                      action="<?= site_url('registrasi_pasien/simpan'); ?>">

                                    <div class="form-group">
                                        <input type="text"
                                               name="nama"
                                               class="form-control form-control-user"
                                               placeholder="Nama Lengkap"
                                               required>
                                    </div>

                                    <div class="form-group">
                                        <input type="date"
                                               name="tanggal_lahir"
                                               class="form-control form-control-user"
                                               required>
                                    </div>

                                    <div class="form-group">
                                        <textarea name="alamat"
                                                  class="form-control form-control-user"
                                                  placeholder="Alamat"
                                                  required></textarea>
                                    </div>

                                    <div class="form-group">
                                        <input type="text"
                                               name="no_telp"
                                               class="form-control form-control-user"
                                               placeholder="Nomor Telepon"
                                               required>
                                    </div>

                                    <div class="form-group">
                                        <input type="email"
                                               name="email"
                                               class="form-control form-control-user"
                                               placeholder="Email"
                                               required>
                                    </div>

                                    <div class="form-group">
                                        <input type="password"
                                               name="password"
                                               class="form-control form-control-user"
                                               placeholder="Password"
                                               required>
                                    </div>

                                    <button type="submit"
                                            class="btn btn-primary btn-user btn-block">

                                        <i class="fas fa-save"></i>
                                        Registrasi

                                    </button>

                                </form>

                                <hr>

                                <div class="text-center">

                                    <a href="<?= site_url('login_pasien'); ?>">
                                        Sudah punya akun? Login Pasien
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