<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>registrasi</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('asset/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('asset/css/sb-admin-2.min.css'); ?>" rel="stylesheet">

</head>

<body style="background-color: #1C2833;">
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun!</h1>
                            </div>
                            <form class="user" method="post" action="<?= base_url('index.php/Adm_ctrl/register'); ?>">

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>">
                                    <small class="text-danger"><?= form_error('nama'); ?></small>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                    <small class="text-danger"><?= form_error('email'); ?></small>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="Password1" name="Password1" placeholder="Password">
                                        <small class="text-danger"><?= form_error('Password1'); ?></small>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="Password2" name="Password2" placeholder="Repeat Password">

                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('index.php/Adm_ctrl'); ?>">Sudah punya akun? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('asset/vendor/jquery/jquery.min.js"'); ?>"></script>
    <script src="<?= base_url('asset/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('asset/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('asset/js/sb-admin-2.min.js'); ?>"></script>

</body>

</html>