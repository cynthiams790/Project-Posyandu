<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-6 col-lg-6 col-md-6">

            <div class="card o-hidden border-0 shadow-lg my-5">

                <!-- Nested Row within Card Body -->
                <div class="row align-content-center justify-content-center">

                    <div class="col-sm-12" style="background-color: white;">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4"><b>Login<b></h1>
                            </div>
                            <form class="user" method="POST" action="<?= base_url('auth') ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="email" value="<?= set_value('email'); ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3 " >', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="password">
                                    <?= form_error('password', '<small class="text-danger pl-3 " >', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Login
                                </button>
                                <hr>

                            </form>

                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>

                            <div class="text-center">
                                <a class="small" href="<?= base_url('auth/register'); ?>">Create an Account!</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>