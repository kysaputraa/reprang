<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Admin REPRANG - Rencana Program & Anggaran</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link type="text/css" href="<?php echo base_url('view_assets/assets/css/style.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('stroke7icon/pe-icon-7-stroke/css/pe-icon-7-stroke.css') ?>">
    <link href="<?php echo base_url('fontawesome/css/fontawesome.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('fontawesome/css/brands.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('fontawesome/css/solid.css') ?>" rel="stylesheet">
    <link rel="icon" href="<?php echo base_url('img/jambi.png') ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
    <div class="app-header header-shadow">
        <div class="app-header__logo">
            <div class="logo-src">
                <img style="width: 100px; margin: -6px 0px 0px 30px;" src="<?php echo base_url('img/logo.png') ?>">
            </div>
            <div class="header__pane ml-auto">
                <div>
                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <!-- <div class="app-header__mobile-menu">
            <div>
                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div> -->
        <div class="app-header__menu">
            <span>
                <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                    <span class="btn-icon-wrapper">
                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                    </span>
                </button>
            </span>
        </div>    
        <div class="app-header__content">
            <!-- menu pertama pencarian  -->
            <div class="app-header-left">
                <div class="search-wrapper">
                    <div class="input-holder">
                        <input type="text" class="search-input" placeholder="Type to search">
                        <button class="search-icon"><span></span></button>
                    </div>
                    <button class="close"></button>
                </div>
            </div>
            <div class="app-header-right">
                <!-- menu kedua -->
                
                <!-- menu tampilan user login -->
                <?php $this->load->view('admin/layout/header_user.php'); ?>

                <!-- tombol menu sebelah kanan -->
                <!-- <div class="header-btn-lg">
                    <button type="button" class="hamburger hamburger--elastic open-right-drawer">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>   -->      
            </div>
        </div>
    </div>    
    <?php $this->load->view('admin/layout/theme.php'); ?>  
    <div class="app-main">
        <div class="app-sidebar sidebar-shadow">
            <div class="app-header__logo">
                <!-- <div class="logo-src"></div> -->
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    
            <?php $this->load->view('admin/layout/sidebar.php') ?>
        </div>    
        <div class="app-main__outer">
            <!-- content main utama -->
            <div class="app-main__inner">
                <?php $this->load->view($content) ?> 
            </div>
            <!-- content footer -->
            <div class="app-wrapper-footer">
                
            </div>
        </div>
    </div>
</div>
<!-- Menu sebelah kanan -->
<div class="app-drawer-wrapper">

</div>
<div class="app-drawer-overlay d-none animated fadeIn"></div>
<script type="text/javascript" src="<?php echo base_url('view_assets/assets/scripts/main.87c0748b313a1dda75f5.js'); ?>"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Apr 2020 05:26:19 GMT -->
</html>
