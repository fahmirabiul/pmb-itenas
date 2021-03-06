<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | General Form Elements</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/adlt/plugins/fontawesome-free/css/all.min.css'); ?>../../">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/adlt/dist/css/adminlte.min.css'); ?>">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div class="container mt-3">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">BNI Internet Banking / Virtual Account Billing</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="" method="POST">
                <div class="card-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">Nomor Virtual Account</div>
                            <div class="col-md-8">: <?= $va['va_number']; ?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">Merchant</div>
                            <div class="col-md-8">: <?= $va['nama_merchant']; ?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">Total Bill</div>
                            <div class="col-md-8">: <?= "Rp" . number_format($va['tagihan'], 2, ',', '.'); ?></div>
                        </div>
                        <input type="hidden" name="noVa" value="<?= $va['va_number']; ?>">
                        <input type="hidden" name="id_pendaftaran" value="<?= $va['id_pendaftaran']; ?>">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <input type="submit" value="Bayar" name="bayar" class="btn btn-primary"></input>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>

    <!-- jQuery -->
    <script src="<?= base_url('assets/adlt/plugins/jquery/jquery.min.js'); ?>"></script>
    <!-- Bootstrap 4 -->
    <script src=" <?= base_url('assets/adlt/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- bs-custom-file-input -->
    <script src="<?= base_url('assets/adlt/plugins/bs-custom-file-input/bs-custom-file-input.min.js'); ?>">
    </script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/adlt/dist/js/adminlte.min.js'); ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('assets/adlt/dist/js/demo.js'); ?>"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
    </script>
</body>

</html>