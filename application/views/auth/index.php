<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Page Title - SB Admin</title>
    <link href="<?= base_url('assets/sba/dist/css/styles.css'); ?>" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <img src="https://sikidos.itenas.ac.id/images/logo.png" style="display: block; margin-right: auto; margin-left: auto; width: 50%;">
                                </div>
                                <?= $this->session->flashdata('message'); ?>
                                <div class="card-body">
                                    <form action="<?= base_url('auth/login'); ?>" method="post">
                                        <div class="form-group">
                                            <label class="small mb-1" for="username">Username</label>
                                            <input class="form-control py-4" id="username" name="username" type="text" placeholder="Enter username" value="<?= set_value('username'); ?>">
                                            <small class="text-danger"><?= form_error('username'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="password">Password</label>
                                            <input class="form-control py-4" id="password" name="password" type="password" placeholder="Enter password" />
                                            <small class="text-danger"><?= form_error('password'); ?></small>
                                        </div>
                                        <!-- <div class="form-group">
                                            <div class="custom-control custom-checkbox"><input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" /><label class="custom-control-label" for="rememberPasswordCheck">Remember password</label></div>
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><a class="small" href="password.html">Forgot Password?</a> -->
                                        <a href="<?= base_url(''); ?>">kembali</a>
                                        <button class="btn btn-primary float-right" type="submit">Sign In</button>
                                </div>
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <!-- <div class="small"><a href="register.html">Need an account? Sign up!</a></div> -->
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </main>
    </div>

    <div id="layoutAuthentication_footer" style="position: fixed; bottom: 0; width:100%;">
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-center small">
                    <div class="text-muted">Copyright &copy; Karim 2020 </div>
                    <div>
                        <a href="#"> Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/sba/dist/js/scripts.js'); ?>"></script>
</body>

</html>