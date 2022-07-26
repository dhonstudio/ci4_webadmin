<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<body>
    <div class="container tm-mt-big tm-mb-big">
        <div class="row">
            <div class="col-12 mx-auto tm-login-col">
                <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h2 class="tm-block-title mb-4">Welcome to Dashboard, Register</h2>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <form method="post" class="tm-login-form" action="<?= $base_url . '/register' ?>">
                                <input hidden name="redirect" value="<?= $redirect ?>">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input name="username" type="text" class="form-control validate" id="username" value="" required />
                                </div>
                                <div class="form-group">
                                    <label for="fullName">Fullname</label>
                                    <input name="fullName" type="text" class="form-control validate" id="fullName" value="" required />
                                </div>
                                <div class="form-group mt-3">
                                    <label for="password">Password</label>
                                    <input name="password" type="password" class="form-control validate" id="password" value="" required />
                                </div>
                                <div class="form-group mt-3">
                                    <label for="password2">Repeat Password</label>
                                    <input name="password2" type="password" class="form-control validate" id="password2" value="" required />
                                </div>
                                <div class="form-group mt-4">
                                    <button type="submit" class="btn btn-primary btn-block text-uppercase">
                                        Register
                                    </button>
                                </div>
                            </form>
                            <a href="<?= $base_url . '/auth' ?>">
                                <button class="mt-5 btn btn-primary btn-block text-uppercase">
                                    Login
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="tm-footer row tm-mt-small">
        <div class="col-12 font-weight-light">
            <p class="text-center text-white mb-0 px-4 small">
                Copyright &copy; <b>2022</b> All rights reserved.

                Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
            </p>
        </div>
    </footer>
    <script src="<?= $assets . 'vendor/templatemo_524_product_admin/' ?>js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="<?= $assets . 'vendor/templatemo_524_product_admin/' ?>js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
</body>

<?= $this->endSection(); ?>