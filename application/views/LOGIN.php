<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LOGIN</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('asset/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('asset/images/LOGO.png') ?>">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('asset/css/sb-admin-2.css'); ?>" rel="stylesheet">

</head>

<body>
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img src="<?= base_url('asset/images/LOGO.png') ?>" width="5%" align="center">
                                        <h1 class="h4 text-gray-900 mb-4">LOGIN</h1>
                                    </div>
                                    <?= $this->session->flashdata('message'); ?>
                                    <form action="" class="user" method="post" action="<?= base_url('index.php/Adm_ctrl'); ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="email" name="email" value="<?= set_value('email'); ?>" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                            <small class="text-danger"><?= form_error('email'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password" name="password" value="<?= set_value('password'); ?>" placeholder="Password">
                                            <small class="text-danger"><?= form_error('password'); ?></small>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('index.php/Adm_ctrl/register'); ?>">belum ada akun?</a>
                                    </div>

                                </div>
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