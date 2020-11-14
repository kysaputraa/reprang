

<!doctype html>
<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Apr 2020 05:25:34 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Admin REPRANG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link type="text/css" href="<?php echo base_url('view_assets/assets/css/style.css') ?>" rel="stylesheet">
    <link rel="icon" href="<?php echo base_url('img/jambi.png') ?>">
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100 bg-plum-plate bg-animation">
                <div class="d-flex h-100 justify-content-center align-items-center">
                    <div class="mx-auto app-login-box col-md-8">
                        <!-- <div class="app-logo-inverse mx-auto mb-3"></div> -->
                            <div class="modal-dialog w-100 mx-auto">
                                <form  method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/login/cek') ?>">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="h5 modal-title text-center">
                                                <h4 class="mt-2">
                                                    <img width="350px" src="<?php echo base_url('img/logo.png'); ?>">
                                                    <div>Selamat datang</div>
                                                    <span>Silahkan Masukkan data Akun untuk Login</span>
                                                </h4>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="position-relative form-group"><input name="username" id="exampleEmail" placeholder="Username . . ." type="text" class="form-control"></div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="position-relative form-group"><input name="password" id="examplePassword" placeholder="Password . . ." type="password" class="form-control"></div>
                                                </div>
                                            </div>
                                            <!-- <div class="position-relative form-check"><input name="check" id="exampleCheck" type="checkbox" class="form-check-input"><label for="exampleCheck" class="form-check-label">Keep me logged in</label></div> -->
                                            <div class="divider"></div>
                                            <!-- <h6 class="mb-0">No account? <a href="javascript:void(0);" class="text-primary">Sign up now</a></h6> -->
                                        </div>
                                        <div class="modal-footer clearfix">
                                            <!-- <div class="float-left"><a href="javascript:void(0);" class="btn-lg btn btn-link">Recover Password</a></div> -->
                                            <div class="float-right">
                                                <button type="submit" class="btn btn-primary btn-lg">Masuk</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        <div class="text-center text-white opacity-8 mt-3">Copyright © ArchitectUI 2019</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Apr 2020 05:26:19 GMT -->
</html>
