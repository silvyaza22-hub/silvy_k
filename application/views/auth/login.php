```php
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
        .bg-gradient-primary{
            background: linear-gradient(135deg, #800020 0%, #a52a2a 100%) !important;
        }

        .btn-primary{
            background-color: #f6c23e !important;
            border-color: #f6c23e !important;
            color: #800020 !important;
            font-weight: bold;
        }

        .btn-primary:hover{
            background-color: #e0a800 !important;
            border-color: #e0a800 !important;
            color: #800020 !important;
        }

        .card{
            border-top: 5px solid #f6c23e !important;
        }

        .text-gray-900{
            color: #800020 !important;
        }

        .form-control-user:focus{
            border-color: #800020 !important;
            box-shadow: 0 0 0 .2rem rgba(128,0,32,.25) !important;
        }
    </style>

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">

                    <div class="card-body p-0">

                        <div class="row">

                            <div class="col-lg-6 d-none d-lg-block"
                                 style="background:linear-gradient(135deg,#800020,#f6c23e);">
                            </div>

                            <div class="col-lg-6">

                                <div class="p-5">

                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">
                                            Login Sistem Rumah Sakit
                                        </h1>
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
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">
                                                    Simpan Login
                                                </label>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>

                                    </form>

                                    <hr>

                                    <div class="text-center">
                                        <small class="text-muted">
                                            Sistem Informasi Rumah Sakit
                                        </small>
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
    <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js');?>"></script>
    <script src="<?= base_url('assets/js/sb-admin-2.min.js');?>"></script>

</body>

</html>
```
